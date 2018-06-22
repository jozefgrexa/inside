<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\ORM\TableRegistry;

class DodgeballTable extends Table
{
    public function initialize(array $config)
    {
        $this->table('Dodgeball');
    }

    public function getStandings(){
    	$dodgeballTable = [
            'Maskáčový gang' => [
                'score1' => 0,
                'score2' => 0,
                'points' => 0,
            ],
            'Modranský swag' => [
                'score1' => 0,
                'score2' => 0,
                'points' => 0,
            ],
            'Ťavičky' => [
                'score1' => 0,
                'score2' => 0,
                'points' => 0,
            ],
            'Deti z Palisád' => [
                'score1' => 0,
                'score2' => 0,
                'points' => 0,
            ],
        ];

        $dodgeball = TableRegistry::get('Dodgeball')->find()->toArray();

        // team table
        foreach ($dodgeball as $match) {
            if ($match['comment']=='skupina A'){
                $dodgeballTable[$match['team1']]['score1'] += $match['score1'];
                $dodgeballTable[$match['team1']]['score2'] += $match['score2'];
                $dodgeballTable[$match['team1']]['points'] += $match['points1'];
                $dodgeballTable[$match['team2']]['score1'] += $match['score2'];
                $dodgeballTable[$match['team2']]['score2'] += $match['score1'];
                $dodgeballTable[$match['team2']]['points'] += $match['points2'];
            }
        }

        arsort($dodgeballTable);

        return $dodgeballTable;
    }
}