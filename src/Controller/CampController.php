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

// use Cake\ORM\Table;
use Cake\Core\Configure;

/**
 * Static content controller
 *
 * This controller will render views from Template/Pages/
 *
 * @link https://book.cakephp.org/3.0/en/controllers/pages-controller.html
 */
class CampController extends AppController
{
	public function initialize()
    {
        // parent::initialize();

        $this->loadModel('Participants');
        $this->loadModel('Churches');
        $this->loadModel('Parents');
        $this->loadModel('Events');
        $this->loadModel('Codes');
    }

    public function index()
    {
        $event = $this->Events->find()->where(['slug' => 'tabor-2019'])->first();

    	$rc_site_key = Configure::read('RCKeys.siteKey');

    	if ($this->request->is('post')) {
            $rcResponse = $this->_verifyResponse($this->request->getData('g-recaptcha-response'));

            if ($rcResponse['success']) {
                $this->_addParticipant($event->id);
                return $this->redirect(['action' => 'success']);
            }
            return $this->redirect(['action' => 'error', '?' => ['code' => $rcResponse['error-codes']]]);
        }

    	$peoplecount = $this->Participants->getPeopleCount($event->id);
        $churches = $this->Churches->find()->select('name')->toArray();
        $peoplenames = $this->Participants->find()->contain('Events')->select(['first_name'])->where(['Events.id' => $event->id])->toArray();

    	$this->set(compact(['churches','peoplecount','rc_site_key','peoplenames']));
    }
    
    public function success() {

    }

    public function error() {
        
    }

    public function signup($code = null) {
        $approved = $this->Codes->findByCode($code)->first();

        if ($approved && !$approved->used) {
            $event = $this->Events->find()->where(['slug' => 'tabor-2019'])->first();
            $rc_site_key = Configure::read('RCKeys.siteKey');

            if ($this->request->is('post')) {
                $rcResponse = $this->_verifyResponse($this->request->getData('g-recaptcha-response'));

                if ($rcResponse['success']) {
                    $approved->used = true;
                    $this->Codes->save($approved);
                    
                    $this->_addParticipant($event->id);
                    return $this->redirect(['action' => 'success']);
                }
                return $this->redirect(['action' => 'error', '?' => ['code' => $rcResponse['error-codes']]]);
            }
            $churches = $this->Churches->find()->select('name')->toArray();

            $this->set(compact(['churches','rc_site_key']));
        } else {
            return $this->redirect(['action' => 'index']);
        }
    }

    private function _addParticipant($event_id){

        $participant = $this->Participants->newEntity($this->request->getData());
        
        if ($parentname = $this->request->getData('parent')) {
        	$parentphone = $this->request->getData('phone');

        	if ($existing = $this->Parents->find()->where(['name' => $parentname, 'phone' => $parentphone])->first()) {
        		$parent = $existing;
        	} else {
		        $parent = $this->Parents->newEntity();
	        	$parent->name = $parentname;
	        	$parent->phone = $parentphone;
        	}
        	$participant->parent = $parent;
        }

        $participant->church = $this->Churches->findByName($this->request->getData('church'))->first(); 
        $participant->event = $this->Events->find()->where(['id' => $event_id])->first();
		$this->Participants->save($participant);

        $this->_sendEmail($participant->email, 'INSIDE Tábor 2019', 'camp_participant', ['participant' => $this->Participants->get($participant->id, ['contain' => 'Parents'])]);
        if ($this->request->getData('discount')) {
            $this->_sendEmail('inside@sem.sk', 'Tábor 2019 - ešte väčia zľava', 'camp_discount', ['participant' => $this->Participants->get($participant->id, ['contain' => 'Parents'])]);
        }
        if ($this->request->getData('sponsor')) {
            $this->_sendEmail('inside@sem.sk', 'Tábor 2019 - prispieť ešte viac', 'camp_sponsor', ['participant' => $this->Participants->get($participant->id, ['contain' => 'Parents'])]);
        }
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
