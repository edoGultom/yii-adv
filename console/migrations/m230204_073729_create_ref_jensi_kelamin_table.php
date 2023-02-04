<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%ref_jensi_kelamin}}`.
 */
class m230204_073729_create_ref_jensi_kelamin_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%ref_jensi_kelamin}}', [
            'id' => $this->primaryKey(),
            'keterangan' => $this->string(20),
        ]);

        $this->batchInsert(
            'ref_jensi_kelamin',
            [
                'keterangan',
            ],
            [
                ['Pria'],
                ['Wanita'],
            ]
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%ref_jensi_kelamin}}');
    }
}