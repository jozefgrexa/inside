<?php
use Migrations\AbstractMigration;

class CreateCaptainsTable extends AbstractMigration
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
        $this->table('captains')
            ->addColumn('participant_id', 'integer', ['null' => true])
            ->addColumn('team_id', 'integer', ['null' => true])
            ->create();

        $this->table('captains')
            ->addForeignKey('participant_id', 'participants', 'id')
            ->addForeignKey('team_id', 'teams', 'id')
            ->update();
    }
}
