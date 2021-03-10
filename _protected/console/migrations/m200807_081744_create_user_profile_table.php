<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%user_profile}}`.
 */
class m200807_081744_create_user_profile_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%user_profile}}', [
            'id' => $this->primaryKey(),
            'first' => $this->string(255),
            'last' => $this->string(255),
            'phone' => $this->string(255),
            'description' => $this->string(),
            'filename' => $this->string(),
            'course' => $this->string(),
            'user_id' => $this->integer(),
            'data' => $this->dateTime(),
            'student_status' => $this->integer(),
        ]);
        
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%user_profile}}');
    }
}
