<?php

namespace App\Model\Table;

use Cake\ORM\Table;

class VolleyballTable extends Table
{
    public function initialize(array $config)
    {
        $this->table('Volleyball');
    }
}