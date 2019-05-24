<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\ORM\TableRegistry;

class TeamsTable extends Table
{
    public function initialize(array $config)
    {
    	$this->table('Teams');
        $this->belongsTo('Sports');
        $this->hasMany('Participants');
        $this->hasOne('Captains');
        $this->belongsTo('Events');
    }

    public function getSportTeamsCount($event_id) {
    	$count['all'] = $this->_getAllCount($event_id);
    	$count['football'] = $this->_getFootballCount($event_id);
    	$count['floorball'] = $this->_getFloorballCount($event_id);
    	$count['volleyball'] = $this->_getVolleyballCount($event_id);
    	$count['dodgeball'] = $this->_getDodgeballCount($event_id);
    	return $count;
    }

    protected function _getAllCount($event_id) {
    	$teams = TableRegistry::get('Teams');
    	return $teams->find('all')->where(['sport_id !=' => 5, 'event_id' => $event_id])->count();
    }
    protected function _getFootballCount($event_id) {
    	$teams = TableRegistry::get('Teams');
    	return $teams->find('all')->where(['sport_id' => 1, 'event_id' => $event_id])->count();
    }
    protected function _getFloorballCount($event_id) {
    	$teams = TableRegistry::get('Teams');
    	return $teams->find('all')->where(['sport_id' => 2, 'event_id' => $event_id])->count();
    }
    protected function _getVolleyballCount($event_id) {
    	$teams = TableRegistry::get('Teams');
    	return $teams->find('all')->where(['sport_id' => 3, 'event_id' => $event_id])->count();
    }
    protected function _getDodgeballCount($event_id) {
    	$teams = TableRegistry::get('Teams');
    	return $teams->find('all')->where(['sport_id' => 4, 'event_id' => $event_id])->count();
    }
}