<?php
use Migrations\AbstractMigration;

class UpdateParticipantsTable extends AbstractMigration
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
        $this->table('Participants')
            ->addColumn('team_id','integer',['null' => true])
            ->update();
            
        $this->table('Participants')
            ->addForeignKey('team_id', 'teams', 'id')
            ->update();
    }
}
