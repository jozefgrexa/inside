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

    public function getSerieStatus() {
        $serieStatus = [
            'Modra 1' => 0,
            'Tri bodky' => 0
        ];

        $football = TableRegistry::get('Football')->find()->toArray();

        foreach ($football as $match) {
            if ($match['team1'] == 'Modra 1') {
                if ($match['score1'] > $match['score2']) {
                    $serieStatus['Modra 1'] += 1;
                } elseif ($match['score1'] < $match['score2']) {
                    $serieStatus['Tri bodky'] += 1;
                }
            } elseif ($match['team1'] == 'Tri bodky') {
                if ($match['score1'] > $match['score2']) {
                    $serieStatus['Tri bodky'] += 1;
                } elseif ($match['score1'] < $match['score2']) {
                    $serieStatus['Modra 1'] += 1;
                }
            }
        }

        return $serieStatus;
    }
}