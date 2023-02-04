<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%table_siswa}}`.
 */
class m230204_073307_create_table_siswa_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%siswa}}', [
            'id' => $this->primaryKey(),
            'nim' => $this->string(18),
            'nama' => $this->text(),
            'id_jenis_kelamin' => $this->tinyInteger(),
            'tgl_lahir' => $this->date(),
            'alamat' => $this->text(),
            'no_hp' => $this->string(15),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%table_siswa}}');
    }
}