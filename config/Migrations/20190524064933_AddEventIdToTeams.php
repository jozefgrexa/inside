<?php
use Migrations\AbstractMigration;

class AddEventIdToTeams extends AbstractMigration
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
        $this->table('Teams')
            ->addColumn('event_id','integer',['null' => true])
            ->update();
            
        $this->table('Teams')
            ->addForeignKey('event_id', 'events', 'id')
            ->update();
    }
}
