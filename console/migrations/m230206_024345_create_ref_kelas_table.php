<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%ref_kelas}}`.
 */
class m230206_024345_create_ref_kelas_table extends Migration
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
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%ref_kelas}}');
    }
}
