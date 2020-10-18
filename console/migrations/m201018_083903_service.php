<?php

use yii\db\Migration;

/**
 * Class m201018_083903_service
 */
class m201018_083903_service extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('city', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
        ]);
        $this->insert('city', ['name' => 'Москва']);
        $this->insert('city', ['name' => 'Не Москва']);

        $this->createTable('service', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'code' => $this->string()->notNull(),
            'price' => $this->integer()->notNull(),
            'description' => $this->text(),
            'status' => $this->tinyInteger(),
            'expires_at' => $this->dateTime(),
            'city_id' => $this->integer()->notNull(),
        ]);
        $this->addForeignKey('fk__service__city', 'service', 'city_id', 'city', 'id', 'restrict', 'cascade');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('service');
        $this->dropTable('city');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201018_083903_service cannot be reverted.\n";

        return false;
    }
    */
}
