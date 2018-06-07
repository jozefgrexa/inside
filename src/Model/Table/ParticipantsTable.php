<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\ORM\TableRegistry;

class ParticipantsTable extends Table
{
    public function initialize(array $config)
    {
    	$this->table('Participants');
        $this->belongsTo('Teams');
        $this->belongsTo('Churches');
        $this->belongsTo('Events');
        $this->belongsTo('Parents');
    }

    public function getPeopleCount() {
    	$count['all'] = $this->_getAllCount();
    	$count['sport'] = $this->_getSportmenCount();
    	$count['nosport'] = $this->_getNoSportmenCount();
    	return $count;
    }

    protected function _getSportmenCount() {
    	$participants = TableRegistry::get('Participants');
    	return $participants->find('all')->contain(['Teams'])->where(['Teams.sport_id !=' => 5])->count();
    }

    protected function _getNoSportmenCount() {
    	$participants = TableRegistry::get('Participants');
    	return $participants->find('all')->contain(['Teams'])->where(['Teams.sport_id' => 5])->count();
    }

    protected function _getAllCount() {
    	return TableRegistry::get('Participants')->find('all')->count();
    }

}