<?php

namespace App\Model\Table;

use Cake\ORM\Table;

class SportsTable extends Table
{
    public function initialize(array $config)
    {
        $this->hasMany('Teams');
    }
}