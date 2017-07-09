<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "workexercise".
 *
 * @property integer $id
 * @property integer $work_id
 * @property integer $exercise_id
 * @property integer $user_id
 * @property string $date
 */
class Workexercise extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'workexercise';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['work_id', 'exercise_id', 'user_id'], 'integer'],
            [['date'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'work_id' => 'Work ID',
            'exercise_id' => 'Exercise ID',
            'user_id' => 'User ID',
            'date' => 'Date',
        ];
    }
}
