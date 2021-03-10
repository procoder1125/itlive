<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "kurslar".
 *
 * @property int $id
 * @property string $title
 */
class Kurslar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */

    public static function tableName()
    {
        return 'kurslar';
    }

    /**
     * {@inheritdoc}
     */

     public $foto;
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['title', 'filename'], 'string', 'max' => 255],
            ['foto', 'file', 'extensions' => ['jpg', 'png', 'jpeg', 'gif'], 'skipOnEmpty'=>false],
            ['description', 'string'],
            ['teacher_id', 'integer'],
            ['kurs_davomilik', 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
        ];
    }
}
