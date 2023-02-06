<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%guru}}`.
 */
class m230206_024216_create_guru_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%guru}}', [
            'id' => $this->primaryKey(),
            'nama' => $this->text(),
            'alamat' => $this->text(),
            'id_jenis_kelamin' => $this->tinyInteger(),
            'id_kelas' => $this->tinyInteger(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%guru}}');
    }
}
