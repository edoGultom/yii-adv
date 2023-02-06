<?php

use yii\db\Migration;

/**
 * Class m230204_080122_role_data_siswa
 */
class m230204_080122_role_data_siswa extends Migration
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
                    '/data-siswa/*', 2, NULL, NULL, NULL, time(), time()
                ],
                [
                    '/data-guru/*', 2, NULL, NULL, NULL, time(), time()
                ],
                [
                    '/data-siswa/*', 2, NULL, NULL, NULL, time(), time()
                ],
                [
                    'Admin', 1, NULL, NULL, NULL, time(), time()
                ],
                [
                    'Master', 1, NULL, NULL, NULL, time(), time()
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
                    'Admin', '/data-siswa/*'
                ],
                [
                    'Admin', '/data-guru/*'
                ],
            ]
        );

        $this->batchInsert(
            'auth_assignment',
            [
                'item_name',
                'user_id',
                'created_at',
            ],
            [
                [
                    'Admin',
                    '1',
                    NULL
                ],
            ]
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230204_080122_role_data_siswa cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230204_080122_role_data_siswa cannot be reverted.\n";

        return false;
    }
    */
}