<?php

use yii\db\Migration;

/**
 * Class m230206_032712_role_data_guru
 */
class m230206_032712_role_data_guru extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->batchInsert(
            'auth_item',
            [
                'name',
                'type',
                'description',
                'rule_name',
                'data',
                'created_at',
                'updated_at'
            ],
            [

                [
                    '/data-guru/*', 2, NULL, NULL, NULL, time(), time()
                ],
            ]
        );

        $this->batchInsert(
            'auth_item_child',
            [
                'parent',
                'child'
            ],
            [
                [
                    'Admin', '/data-guru/*'
                ],

            ]
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230206_032712_role_data_guru cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230206_032712_role_data_guru cannot be reverted.\n";

        return false;
    }
    */
}