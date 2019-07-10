<?php
use Migrations\AbstractMigration;

class FillCodesTable extends AbstractMigration
{
    /**
     * Migrate Up.
     */
    public function up()
    {
        $i = 0;

        while ($i<100) {
            $rows[$i] = [
              'code'  => $this->generateRandomString(),
              'used' => 0
            ];
            $i++;
        }

        $this->insert('codes', $rows);
    }

    /**
     * Migrate Down.
     */
    public function down()
    {
    }

    private function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}
