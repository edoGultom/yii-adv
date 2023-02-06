<?php

use yii\db\Migration;

/**
 * Class m230206_033431_add_column_field_table_guru
 */
class m230206_033431_add_column_field_table_guru extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('guru', 'no_hp', $this->string(15));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230206_033431_add_column_field_table_guru cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230206_033431_add_column_field_table_guru cannot be reverted.\n";

        return false;
    }
    */
}