<?php

use yii\db\Migration;

class m170724_053229_users extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%user}}', [
            'id' => $this->primaryKey(),
            'password_hash' => $this->string()->notNull(),
            'email' => $this->string()->notNull()->unique(),

        ], $tableOptions);
    }

    public function safeDown()
    {

        //echo "m170724_053229_art cannot be reverted.\n";

        return false;
    }

}
