<?php

namespace App\Model\Table;

use Cake\ORM\Table;

class EventsTable extends Table
{
    public function initialize(array $config)
    {
        $this->hasMany('Participants');
        $this->hasMany('Teams');
    }
}