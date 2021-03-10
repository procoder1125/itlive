<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%kurslar}}`.
 */
class m210107_101829_create_kurslar_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%kurslar}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'kurs_davomilik' => $this->integer(),
            'description' => $this->text(),
            'filename' => $this->string(),
            'teacher_id' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%kurslar}}');
    }
}
