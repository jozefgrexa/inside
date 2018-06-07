<?php
use Migrations\AbstractMigration;

class EditParentColumn extends AbstractMigration
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
        $this->table('Parents')
            ->dropForeignKey('participant_id')
            ->update();

        $this->table('Parents')
            ->removeColumn('participant_id')
            ->update();

        $this->table('Participants')
            ->addColumn('parent_id', 'integer', ['null' => true])
            ->update();

        $this->table('Participants')
            ->addForeignKey('parent_id', 'parents', 'id')
            ->update();
    }
}
