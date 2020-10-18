<?php

use yii\db\Migration;

/**
 * Class m201018_110914_demo_services
 */
class m201018_110914_demo_services extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->batchInsert(
            'service',
            ['name', 'code', 'price', 'description', 'status', 'expires_at', 'city_id'],
            [
                ['Service 1', 'svc1', 100, 'Это услуга 1.', 1, '2020-10-30', 1],
                ['Service 2', 'svc2', 120, 'Это услуга 2. Она выключена.', 0, '2020-10-30', 1],
                ['Service 3', 'svc3', 140, 'Это услуга 3.', 1, '2020-10-30', 1],
                ['Service 4', 'svc4', 110, 'Это услуга 4. Она не для Москвы.', 1, '2020-10-30', 2],
            ]
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        ;$this->delete('service');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201018_110914_demo_services cannot be reverted.\n";

        return false;
    }
    */
}
