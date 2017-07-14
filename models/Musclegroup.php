<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "musclegroup".
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property string $image
 */
class Musclegroup extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'musclegroup';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['description'], 'required'],
            [['image'], 'required'],
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
            'name' => 'Название',
            'description' => 'Описание',
            'image' => 'Картинка',
        ];
    }

    public function getMuscle()
    {
        return $this->hasMany(Muscle::className(), ['musclegroup_id' => 'id']);
    }
}
