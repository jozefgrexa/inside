<?php

namespace App\Model\Table;

use Cake\ORM\Table;

class DodgeballTable extends Table
{
    public function initialize(array $config)
    {
        $this->table('Dodgeball');
    }
}