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
            'name' => 'Name',
            'description' => 'Description',
            'image' => 'Image',
        ];
    }
}
