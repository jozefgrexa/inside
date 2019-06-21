<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\ORM\TableRegistry;

class FloorballTable extends Table
{
    public function initialize(array $config)
    {
        $this->table('Floorball');
    }

    public function getStandings() {
    	$floorballTable = [
            'Sewas' => [
                'score1' => 0,
                'score2' => 0,
                'points' => 0,
            ],
            'BROS' => [
                'score1' => 0,
                'score2' => 0,
                'points' => 0,
            ],
            'Azkaban' => [
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

        $floorball = TableRegistry::get('Floorball')->find()->toArray();

        // team table
        foreach ($floorball as $match) {
            if ($match['comment'] == 'skupina A') {
                $floorballTable[$match['team1']]['score1'] += $match['score1'];
                $floorballTable[$match['team1']]['score2'] += $match['score2'];
                $floorballTable[$match['team1']]['points'] += $match['points1'];
                $floorballTable[$match['team2']]['score1'] += $match['score2'];
                $floorballTable[$match['team2']]['score2'] += $match['score1'];
                $floorballTable[$match['team2']]['points'] += $match['points2'];
            }
        }

        arsort($floorballTable);

        return $floorballTable;
    }
}