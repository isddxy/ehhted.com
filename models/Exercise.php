<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "exercise".
 *
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property string $image
 * @property integer $viewed
 * @property integer $status
 */
class Exercise extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'exercise';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'description', 'status', 'image'], 'required'],
            [['description'], 'string'],
            [['viewed', 'status'], 'integer'],
            ['image', 'image', 'extensions' => 'png, jpg, gif'],
            [['title',], 'string', 'max' => 255],

        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'description' => 'Description',
            'image' => 'Image',
            'viewed' => 'Viewed',
            'status' => 'Status',
        ];
    }
}
