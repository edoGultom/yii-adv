<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%ref_kelas}}`.
 */
class m230206_004343_create_ref_kelas_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%ref_kelas}}', [
            'id' => $this->primaryKey(),
            'keterangan' => $this->string(20),
        ]);

        $this->batchInsert(
            'ref_kelas',
            [
                'keterangan',
            ],
            [
                ['Kelas 1'],
                ['Kelas 2'],
                ['Kelas 3'],
                ['Kelas 4'],
                ['Kelas 5'],
                ['Kelas 6'],
            ]
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%ref_kelas}}');
    }
}
