<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "exercise_muscle".
 *
 * @property integer $id
 * @property integer $exercise_id
 * @property integer $muscle_id
 */
class ExerciseMuscle extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'exercise_muscle';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['exercise_id', 'muscle_id'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'exercise_id' => 'Exercise ID',
            'muscle_id' => 'Muscle ID',
        ];
    }
}
