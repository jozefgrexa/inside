<?php
use Migrations\AbstractMigration;

class CreateMatchPlans extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $this->table('volleyball')
            ->addColumn('time', 'string', ['null' => true])
            ->addColumn('team1', 'string', ['null' => true])
            ->addColumn('team2', 'string', ['null' => true])
            ->addColumn('score1', 'integer', ['null' => true])
            ->addColumn('score2', 'integer', ['null' => true])
            ->addColumn('points1', 'integer', ['null' => true])
            ->addColumn('points2', 'integer', ['null' => true])
            ->addColumn('ground', 'string', ['null' => true])
            ->addColumn('comment', 'string', ['null' => true])
            ->create();

        $this->table('football')
            ->addColumn('time', 'string', ['null' => true])
            ->addColumn('team1', 'string', ['null' => true])
            ->addColumn('team2', 'string', ['null' => true])
            ->addColumn('score1', 'integer', ['null' => true])
            ->addColumn('score2', 'integer', ['null' => true])
            ->addColumn('points1', 'integer', ['null' => true])
            ->addColumn('points2', 'integer', ['null' => true])
            ->addColumn('ground', 'string', ['null' => true])
            ->addColumn('comment', 'string', ['null' => true])
            ->create();

        $this->table('dodgeball')
            ->addColumn('time', 'string', ['null' => true])
            ->addColumn('team1', 'string', ['null' => true])
            ->addColumn('team2', 'string', ['null' => true])
            ->addColumn('score1', 'integer', ['null' => true])
            ->addColumn('score2', 'integer', ['null' => true])
            ->addColumn('points1', 'integer', ['null' => true])
            ->addColumn('points2', 'integer', ['null' => true])
            ->addColumn('ground', 'string', ['null' => true])
            ->addColumn('comment', 'string', ['null' => true])
            ->create();

        $this->table('floorball')
            ->addColumn('time', 'string', ['null' => true])
            ->addColumn('team1', 'string', ['null' => true])
            ->addColumn('team2', 'string', ['null' => true])
            ->addColumn('score1', 'integer', ['null' => true])
            ->addColumn('score2', 'integer', ['null' => true])
            ->addColumn('points1', 'integer', ['null' => true])
            ->addColumn('points2', 'integer', ['null' => true])
            ->addColumn('ground', 'string', ['null' => true])
            ->addColumn('comment', 'string', ['null' => true])
            ->create();
    }
}
