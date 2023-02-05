<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%ref_kelas}}`.
 */
class m230205_141849_create_ref_kelas_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%ref_kelas}}', [
            'id' => $this->primaryKey(),
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
