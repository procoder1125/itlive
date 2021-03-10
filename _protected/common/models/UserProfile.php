<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "user_profile".
 *
 * @property int $id
 * @property string $first
 * @property string $last
 * @property string $phone
 * @property string $description
 * @property string $filename
 * @property string $course
 * @property int $user_id
 */
class UserProfile extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user_profile';
    }

    /**
     * {@inheritdoc}
     */
    const STUDENT_STATUS_ACTIVE = 1;
    const STUDENT_STATUS_NOT_ACTIVE = 0;
    const STUDENT_STATUS_GRADUATE = 10;

    public $foto;
    public function rules()
    {
        return [
            [['user_id',], 'integer'],
            ['student_status', 'integer'],
            [['first', 'last', 'phone', 'description', 'filename', 'course'], 'string', 'max' => 255],
            ['data', 'safe'],
            ['foto', 'file', 'extensions' => ['jpg', 'png', 'jpeg', 'gif'], 'skipOnEmpty'=>true],

            //['student_status', 'default', 'value' => UserProfile::STUDENT_STATUS_ACTIVE, 'on' => 'default'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'first' => 'First',
            'last' => 'Last',
            'phone' => 'Phone',
            'description' => 'Description',
            'filename' => 'Filename',
            'course' => 'Course',
            'user_id' => 'User ID',
        ];
    }
}
