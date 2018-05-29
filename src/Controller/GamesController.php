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

    	if ($this->request->is('post')) {
    		$this->_addParticipant();
    	}
        $rc_site_key = Configure::read('RCKeys.siteKey');

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
        $email_template = 'games_participant';
        $this->_sendEmail($participant->email, 'INSIDE Games 2018', $email_template, ['participant' => $this->Participants->get($participant->id, ['contain' => 'Teams'])]);
        // $this->_sendEmail($shopEmail, 'Detail objednávky č.' . $order->order_number, $email_template, ['order' => $this->Orders->get($order->id, ['contain' => 'OrderItems'])]);
    }
    
}