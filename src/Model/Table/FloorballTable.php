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

    public function getStandings($group){
    	switch ($group) {
    		case 'skupina A':
		    	$floorballTable = [
		            'Dream Team' => [
		                'score1' => 0,
		                'score2' => 0,
		                'points' => 0,
		            ],
		            'WOLFS' => [
		                'score1' => 0,
		                'score2' => 0,
		                'points' => 0,
		            ],
		            'BROS' => [
		                'score1' => 0,
		                'score2' => 0,
		                'points' => 0,
		            ],
		        ];
    			break;
    		case 'skupina B':
		        $floorballTable = [
		            'StarBoyz' => [
		                'score1' => 0,
		                'score2' => 0,
		                'points' => 0,
		            ],
		            'Maža Team' => [
		                'score1' => 0,
		                'score2' => 0,
		                'points' => 0,
		            ],
		            'BLACK KNIGHTS' => [
		                'score1' => 0,
		                'score2' => 0,
		                'points' => 0,
		            ],
		        ];
		        break;
		    case 'skupina C':
		        $floorballTable = [
		            'FBK 18 Piešťany' => [
		                'score1' => 0,
		                'score2' => 0,
		                'points' => 0,
		            ],
		            'Flames' => [
		                'score1' => 0,
		                'score2' => 0,
		                'points' => 0,
		            ],
		            'To je tvoj pes?' => [
		                'score1' => 0,
		                'score2' => 0,
		                'points' => 0,
		            ],
		        ];
    			break;
    	}

        $floorball = TableRegistry::get('Floorball')->find()->toArray();

        // team table
        foreach ($floorball as $match) {
            if ($match['comment'] == $group){
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