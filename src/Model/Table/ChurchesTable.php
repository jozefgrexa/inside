<?php

namespace App\Model\Table;

use Cake\ORM\Table;

class ChurchesTable extends Table
{
    public function initialize(array $config)
    {
        $this->hasMany('Participants');
    }
}