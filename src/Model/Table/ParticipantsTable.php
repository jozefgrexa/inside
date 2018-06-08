<?php

namespace App\Model\Table;

use Cake\ORM\Table;

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

    public function getPeopleCount($eventId) {
    	$count['all'] = $this->_getAllCount($eventId);
    	$count['sport'] = $this->_getSportmenCount($eventId);
    	$count['nosport'] = $this->_getNoSportmenCount($eventId);
    	return $count;
    }

    protected function _getSportmenCount($eventId) {
    	return $this->find('all')->contain(['Teams'])->where(['Participants.event_id' => $eventId, 'Teams.sport_id !=' => 5])->count();
    }

    protected function _getNoSportmenCount($eventId) {
    	return $this->find('all')->contain(['Teams'])->where(['Participants.event_id' => $eventId, 'Teams.sport_id' => 5])->count();
    }

    protected function _getAllCount($eventId) {
    	return $this->find('all')->where(['Participants.event_id' => $eventId])->count();
    }

}