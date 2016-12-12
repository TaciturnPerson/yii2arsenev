<?php

use yii\db\Migration;

class m161212_160036_blog extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%blog}}', [
            'id' => $this->primaryKey(),
            'author_id' => $this->integer()->notNull(),
            'moderator_id' => $this->integer()->notNull(),
            'title' => $this->string()->notNull(),
            'content' => $this->text()->notNull(),
            'preview_element' => $this->string()->notNull(),
            'created_at' => $this->timestamp()->notNull()->defaultValue('0000-00-00 00:00'),
            'updated_at' => $this->timestamp()->notNull()->defaultValue('0000-00-00 00:00'),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%blog}}');
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
