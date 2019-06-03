<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\ORM\Table;
use Cake\Core\Configure;
use Cake\I18n\Date;

/**
 * Static content controller
 *
 * This controller will render views from Template/Pages/
 *
 * @link https://book.cakephp.org/3.0/en/controllers/pages-controller.html
 */
class GamesController extends AppController
{
	public function initialize()
    {
        // parent::initialize();

        $this->loadModel('Participants');
        $this->loadModel('Teams');
        $this->loadModel('Captains');
        $this->loadModel('Sports');
        $this->loadModel('Churches');

        $this->loadModel('Football');
        $this->loadModel('Floorball');
        $this->loadModel('Volleyball');
        $this->loadModel('Dodgeball');
    }

    public function index()
    {
        $event_id = 9;
        $rc_site_key = Configure::read('RCKeys.siteKey');

        if ($this->request->is('post')) {
            $rcResponse = $this->_verifyResponse($this->request->getData('g-recaptcha-response'));

            if ($rcResponse['success']) {
                $this->_addParticipant($event_id);
                return $this->redirect(['action' => 'success']);
            }
            return $this->redirect(['action' => 'error', '?' => ['code' => $rcResponse['error-codes']]]);
        }

        // match servis
        // $football = $this->Football->find()->order(['time' => 'ASC'])->toArray();
        // $floorball = $this->Floorball->find()->order(['time' => 'ASC'])->toArray();
        // $volleyball = $this->Volleyball->find()->order(['time' => 'ASC'])->toArray();
        // $dodgeball = $this->Dodgeball->find()->order(['time' => 'ASC'])->toArray();

        // $footballTable = $this->Football->getStandings();
        // $floorballATable = $this->Floorball->getStandings('skupina A');
        // $floorballBTable = $this->Floorball->getStandings('skupina B');
        // $floorballCTable = $this->Floorball->getStandings('skupina C');
        // $volleyballTable = $this->Volleyball->getStandings();
        // $dodgeballTable = $this->Dodgeball->getStandings();

        $teams = $this->Teams->find()->contain(['Sports','Captains','Events'])->order(['sport_id' => 'ASC'])->where(['Events.id' => $event_id]);
        $teamscount = $this->Teams->getSportTeamsCount($event_id);
        $captains = $this->Captains->getCaptainList($event_id);
        $peoplecount = $this->Participants->getPeopleCount($event_id);
        $players = $this->Participants->find()->contain('Events')->select(['first_name','team_id'])->where(['Events.id' => $event_id])->toArray();

        $churches = $this->Churches->find()->select('name')->toArray();
        $sports = $this->Sports->find()->select()->where(['title !=' => 'nosport'])->toArray();

        foreach ($teams as $key => $team) {
            if ($team->id > 8) {
                $playersCount[$team->id] = $this->Participants->find('all')->where(['team_id' => $team->id])->count();
            }
        }

        // $this->set(compact(['teams','sports','peoplecount','teamscount','playersCount','players','football','floorball','volleyball','dodgeball','footballTable','floorballATable','floorballBTable','floorballCTable','volleyballTable','dodgeballTable']));
        $this->set(compact(['teams','churches','sports','captains','peoplecount','teamscount','playersCount','players','rc_site_key']));
    }

    public function success() {

    }

    public function error() {
        
    }

    private function _addParticipant($event_id){
        $prices = array(
            '2019-05-01' => 5,
            '2019-06-01' => 6,
            '2019-06-11' => 7
        );
        
        $participant = $this->Participants->newEntity($this->request->getData());

        if ($this->request->getData('team-c')) {
            $team = $this->Teams->newEntity();
            $team->name = $this->request->getData('team-c');
            $team->sport = $this->Sports->findByName($this->request->getData('sport'))->first();
            $team->event = $this->Participants->Events->get($event_id);
            
            $captain = $this->Captains->newEntity();
            $captain->participant = $participant;
            $captain->team = $team;
            $this->Captains->save($captain);
        } else {
            $team = $this->Teams->find()->where(['id' => $this->request->getData('team')])->first();
        }

        $participant->team = $team;
        $participant->church = $this->Churches->findByName($this->request->getData('church'))->first(); 
        $participant->event = $this->Participants->Events->get($event_id);

        $today = date('Y-m-d');
        $payment = 0;
        foreach ($prices as $date => $price) {
            if ($today >= $date) { $payment = $price; }
        }
        $participant->payment = $payment;

        $this->Participants->save($participant);

        $this->_sendEmail($participant->email, 'INSIDE Games 2019', 'games_participant', ['participant' => $this->Participants->get($participant->id, ['contain' => 'Teams'])]);
    }

    private function _verifyResponse($recaptcha){
        
        $remoteIp = $this->_getIPAddress();

        // Discard empty solution submissions
        if (empty($recaptcha)) {
            return array(
                'success' => false,
                'error-codes' => 'missing-input',
            );
        }

        $getResponse = $this->_getHTTP(
            array(
                'secret' => Configure::read('RCKeys.secretKey'),
                'remoteip' => $remoteIp,
                'response' => $recaptcha,
            )
        );

        // get reCAPTCHA server response
        $responses = json_decode($getResponse, true);

        if (isset($responses['success']) and $responses['success'] == true) {
            $status = true;
        } else {
            $status = false;
            $error = (isset($responses['error-codes'])) ? $responses['error-codes']
                : 'invalid-input-response';
        }

        return array(
            'success' => $status,
            'error-codes' => (isset($error)) ? $error : null,
        );
    }


    private function _getIPAddress(){
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
             $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
              $ip = $_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }

    private function _getHTTP($data){
        
        $url = 'https://www.google.com/recaptcha/api/siteverify?'.http_build_query($data);
        $response = file_get_contents($url);

        return $response;
    }
    
}