<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\ORM\TableRegistry;

class CaptainsTable extends Table
{
    public function initialize(array $config)
    {
        $this->table('Captains');
        $this->belongsTo('Participants');
        $this->belongsTo('Teams');
    }

    public function getCaptainList(){
    	$captains = TableRegistry::get('Captains');
    	$query = $captains->find('all')->contain(['Participants']);

		foreach ($query as $row) {
			$keyField = $row->participant->id;
			$valueField = $row->participant->first_name . ' ' . $row->participant->last_name;
			$captainList[$keyField] = $valueField;
		}

		return $captainList;
    }
}