<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%guru}}`.
 */
class m230205_141753_create_guru_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%guru}}', [
            'id' => $this->primaryKey(),
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
