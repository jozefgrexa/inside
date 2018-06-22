<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\ORM\TableRegistry;

class FootballTable extends Table
{
    public function initialize(array $config)
    {
        $this->table('Football');
    }

    public function getStandings(){
    	$footballTable = [
            'Červení draci' => [
                'score1' => 0,
                'score2' => 0,
                'points' => 0,
            ],
            'FC Jalkapallo' => [
                'score1' => 0,
                'score2' => 0,
                'points' => 0,
            ],
            'Iskričky' => [
                'score1' => 0,
                'score2' => 0,
                'points' => 0,
            ],
        ];

        $football = TableRegistry::get('Football')->find()->toArray();

        // team table
        foreach ($football as $match) {
            if ($match['comment']=='skupina A'){
                $footballTable[$match['team1']]['score1'] += $match['score1'];
                $footballTable[$match['team1']]['score2'] += $match['score2'];
                $footballTable[$match['team1']]['points'] += $match['points1'];
                $footballTable[$match['team2']]['score1'] += $match['score2'];
                $footballTable[$match['team2']]['score2'] += $match['score1'];
                $footballTable[$match['team2']]['points'] += $match['points2'];
            }
        }

        arsort($footballTable);

        return $footballTable;
    }
}