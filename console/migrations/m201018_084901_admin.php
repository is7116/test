<?php

use common\models\User;
use yii\db\Migration;

/**
 * Class m201018_084901_admin
 */
class m201018_084901_admin extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('user', [
            'username' => 'admin',
            'email' => 'admin@localhost',
            'auth_key' => 'LTdksW5F_IM1Q1_xpMNJjlyDFfNPdeA7',
            'password_hash' => '$2y$13$cMvZmjON9xBjTP4MWUdAYu2A2DRUBp9B9JMQJ2g.dMUcBRpRytoG.', //pass
            'status' => 10,
            'created_at' => time(),
            'updated_at' => time(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->delete('user', ['username' => 'admin']);
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201018_084901_admin cannot be reverted.\n";

        return false;
    }
    */
}
