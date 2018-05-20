<?php
use Migrations\AbstractMigration;

class CreateBasicTables extends AbstractMigration
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
        $this->table('churches')
            ->addColumn('name', 'string', ['null' => true])
            ->create();

        $this->table('events')
            ->addColumn('name', 'string', ['null' => true])
            ->addColumn('start_date', 'date', ['null' => true])
            ->addColumn('end_date', 'date', ['null' => true])
            ->addColumn('place', 'string', ['null' => true])
            ->addColumn('price', 'integer', ['null' => true])
            ->addColumn('age_min', 'integer', ['null' => true])
            ->addColumn('age_max', 'integer', ['null' => true])
            ->create();
        
        $this->table('participants')
            ->addColumn('first_name', 'string', ['null' => true])
            ->addColumn('last_name', 'string', ['null' => true])
            ->addColumn('email', 'integer', ['null' => true])
            ->addColumn('birthday', 'integer', ['null' => true])
            ->addColumn('residence', 'string', ['null' => true])
            ->addColumn('church', 'integer', ['null' => true])
            ->addColumn('event', 'integer', ['null' => true])
            ->create();

        $this->table('participants')
            ->addForeignKey('church', 'churches', 'id')
            ->addForeignKey('event', 'events', 'id')
            ->update();

        $this->table('sports')
            ->addColumn('name', 'string', ['null' => true])
            ->addColumn('ground_type', 'string', ['null' => true])
            ->addColumn('ground_size', 'string', ['null' => true])
            ->addColumn('players_count', 'string', ['null' => true])
            ->create();

        $this->table('teams')
            ->addColumn('name', 'string', ['null' => true])
            ->addColumn('sport', 'integer', ['null' => true])
            ->addColumn('captain', 'integer', ['null' => true])
            ->create();

        $this->table('teams')
            ->addForeignKey('sport', 'sports', 'id')
            ->addForeignKey('captain', 'participants', 'id')
            ->update();
    }
}
