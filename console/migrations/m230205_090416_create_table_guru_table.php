<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%table_guru}}`.
 */
class m230205_090416_create_table_guru_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%table_guru}}', [
            'id' => $this->primaryKey(),
            'nama' => $this->text(),
            'alamat' => $this->text(),
            'id_jeniskelamin' => $this->tinyInteger(),
            'id_kelas' => $this->tinyInteger(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%table_guru}}');
    }
}
