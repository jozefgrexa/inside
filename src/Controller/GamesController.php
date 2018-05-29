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
    }

    public function index()
    {
        $rc_site_key = Configure::read('RCKeys.siteKey');
        $rc_secret_key = Configure::read('RCKeys.secretKey');

        if ($this->request->is('post')) {
            $rcResponse = $this->_verifyResponse($this->request->getData('g-recaptcha-response'));
            if ($rcResponse['success'] == true) {
                $this->_addParticipant();
            }
            $this->set(compact('rcResponse'));
        }

		$teams = $this->Teams->find()->contain(['Sports','Captains']);
		$teamscount = $this->Teams->getSportTeamsCount();
		$captains = $this->Captains->getCaptainList();
		$peoplecount = $this->Participants->getPeopleCount();

		$churches = $this->Churches->find()->select('name')->toArray();
		$sports = $this->Sports->find()->select()->where(['title !=' => 'nosport'])->toArray();

        foreach ($teams as $key => $team) {
            if ($team->id > 8) {
                $playersCount[$team->id] = $this->Participants->find('all')->where(['team_id' => $team->id])->count();
            }
        }

		$this->set(compact(['teams','churches','sports','captains','peoplecount','teamscount','playersCount','rc_site_key']));
    }


    private function _addParticipant(){

		$participant = $this->Participants->newEntity($this->request->getData());

    	if ($teamname = $this->request->getData('team-c')) {
			$team = $this->Teams->newEntity();
    		$team->name = $this->request->getData('team-c');
    		$team->sport = $this->Sports->findByName($this->request->getData('sport'))->first();
			
			$captain = $this->Captains->newEntity();
			$captain->participant = $participant;
			$captain->team = $team;
			$this->Captains->save($captain);
    	} else {
    		$team = $this->Teams->findByName($this->request->getData('team'))->first();
    	}

		$participant->team = $team;
    	$participant->church = $this->Participants->Churches->findByName($this->request->getData('church'))->first(); 
    	$participant->event = $this->Participants->Events->findByName('Games 2018')->first();

		$this->Participants->save($participant);

		// $shopEmail = new Email('default'); //shop email configuration can be edited in app.php
        // $shopEmail = $shopEmail->from();
        // $email_template = 'games_participant';
        // $this->_sendEmail($participant->email, 'INSIDE Games 2018', $email_template, ['participant' => $this->Participants->get($participant->id, ['contain' => 'Teams'])]);
        // $this->_sendEmail($shopEmail, 'Detail objednávky č.' . $order->order_number, $email_template, ['order' => $this->Orders->get($order->id, ['contain' => 'OrderItems'])]);
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

        $getResponse = $this->getHTTP(
            array(
                'secret' => $this->config['rc_secret_key'],
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