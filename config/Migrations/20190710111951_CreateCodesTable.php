<?php
use Migrations\AbstractMigration;

class CreateCodesTable extends AbstractMigration
{
    /**
     * Migrate Up.
     */
    public function up()
    {
        $codes = $this->table('codes');
        $codes->addColumn('code', 'string')
              ->addColumn('used', 'boolean', ['null' => false, 'default' => false])
              ->addIndex(['code'], ['unique' => true])
              ->save();
    }

    /**
     * Migrate Down.
     */
    public function down()
    {

    }
}
