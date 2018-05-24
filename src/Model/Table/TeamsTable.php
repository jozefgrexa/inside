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
    }

    public function getSportTeamsCount() {
    	$count['all'] = $this->_getAllCount();
    	$count['football'] = $this->_getFootballCount();
    	$count['floorball'] = $this->_getFloorballCount();
    	$count['volleyball'] = $this->_getVolleyballCount();
    	$count['dodgeball'] = $this->_getDodgeballCount();
    	return $count;
    }

    protected function _getAllCount() {
    	$teams = TableRegistry::get('Teams');
    	return $teams->find('all')->where(['sport_id !=' => 5])->count();
    }

    protected function _getFootballCount() {
    	$teams = TableRegistry::get('Teams');
    	return $teams->find('all')->where(['sport_id' => 1])->count();
    }
    protected function _getFloorballCount() {
    	$teams = TableRegistry::get('Teams');
    	return $teams->find('all')->where(['sport_id' => 2])->count();
    }
    protected function _getVolleyballCount() {
    	$teams = TableRegistry::get('Teams');
    	return $teams->find('all')->where(['sport_id' => 3])->count();
    }
    protected function _getDodgeballCount() {
    	$teams = TableRegistry::get('Teams');
    	return $teams->find('all')->where(['sport_id' => 4])->count();
    }
}