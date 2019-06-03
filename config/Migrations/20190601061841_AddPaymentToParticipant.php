<?php
use Migrations\AbstractMigration;

class AddPaymentToParticipant extends AbstractMigration
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
            ->addColumn('payment','integer',['null' => true])
            ->update();
    }
}
