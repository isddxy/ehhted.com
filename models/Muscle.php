<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "muscle".
 *
 * @property integer $id
 * @property integer $musclegroup_id
 * @property string $name
 * @property string $image
 * @property string $description
 * @property integer $viewed
 */
class Muscle extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'muscle';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['musclegroup_id'], 'required'],
            [['name'], 'required'],
            [['image'], 'required'],
            [['description'], 'required'],
            [['musclegroup_id', 'viewed'], 'integer'],
            [['description'], 'string'],
            [['name', 'image'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'musclegroup_id' => 'Группа мышц',
            'name' => 'Название',
            'image' => 'Картинка',
            'description' => 'Описание',
            'viewed' => 'Просмотров',
        ];
    }

    public function getMusclegroup()
    {
        return $this->hasOne(Musclegroup::className(), ['id' => 'musclegroup_id']);
    }

    public function getAllMusclegroup()
    {
        return $allMusclegroup = Musclegroup::find()
            ->indexBy('id')
            ->all();
    }
}
