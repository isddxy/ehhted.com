<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bodysize".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $description
 * @property string $date
 * @property double $shoulders
 * @property double $wrist
 * @property double $forearms
 * @property double $chest
 * @property double $biceps
 * @property double $pelvis
 * @property double $waist
 * @property double $hip
 * @property double $calves
 * @property double $аnkle
 */
class Bodysize extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bodysize';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id'], 'integer'],
            [['description'], 'string'],
            [['date'], 'safe'],
            [['shoulders', 'wrist', 'forearms', 'chest', 'biceps', 'pelvis', 'waist', 'hip', 'calves', 'аnkle'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'description' => 'Description',
            'date' => 'Date',
            'shoulders' => 'Shoulders',
            'wrist' => 'Wrist',
            'forearms' => 'Forearms',
            'chest' => 'Chest',
            'biceps' => 'Biceps',
            'pelvis' => 'Pelvis',
            'waist' => 'Waist',
            'hip' => 'Hip',
            'calves' => 'Calves',
            'аnkle' => 'аnkle',
        ];
    }
}
