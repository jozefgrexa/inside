<?php
use Migrations\AbstractMigration;

class CreateParentsTable extends AbstractMigration
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
        $this->table('parents')
            ->addColumn('name', 'string', ['null' => true])
            ->addColumn('phone', 'string', ['null' => true])
            ->addColumn('participant_id', 'integer', ['null' => true])
            ->create();

        $this->table('parents')
            ->addForeignKey('participant_id', 'participants', 'id')
            ->update();
    }
}
