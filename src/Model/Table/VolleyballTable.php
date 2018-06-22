<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\ORM\TableRegistry;

class VolleyballTable extends Table
{
    public function initialize(array $config)
    {
        $this->table('Volleyball');
    }

    public function getStandings(){
    	$volleyballTable = [
            'Allonsy' => [
                'score1' => 0,
                'score2' => 0,
                'points' => 0,
            ],
            'Iskričky' => [
                'score1' => 0,
                'score2' => 0,
                'points' => 0,
            ],
            'Draci C' => [
                'score1' => 0,
                'score2' => 0,
                'points' => 0,
            ],
            '6+3' => [
                'score1' => 0,
                'score2' => 0,
                'points' => 0,
            ],
            'HUPIKÉK TÖRPIKÉK' => [
                'score1' => 0,
                'score2' => 0,
                'points' => 0,
            ],
            'Rytieri pozdĺžneho stola' => [
                'score1' => 0,
                'score2' => 0,
                'points' => 0,
            ],
        ];

        $volleyball = TableRegistry::get('Volleyball')->find()->toArray();

        // team table
        foreach ($volleyball as $match) {
            if ($match['comment']=='skupina A'){
                $volleyballTable[$match['team1']]['score1'] += $match['score1'];
                $volleyballTable[$match['team1']]['score2'] += $match['score2'];
                $volleyballTable[$match['team1']]['points'] += $match['points1'];
                $volleyballTable[$match['team2']]['score1'] += $match['score2'];
                $volleyballTable[$match['team2']]['score2'] += $match['score1'];
                $volleyballTable[$match['team2']]['points'] += $match['points2'];
            }
        }

        arsort($volleyballTable);

        return $volleyballTable;
    }
}