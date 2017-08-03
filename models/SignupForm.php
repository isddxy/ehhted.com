<?php

namespace app\models;

use yii\base\Model;

class SignupForm extends Model
{
    public $id;
    public $email;
    public $password;

    public function rules()
    {
        return [
            [['email','password'], 'required'],
            [['email'], 'unique', 'targetClass'=>'app/models/User', 'targetAttribute'=>'email'],
            [['email'], 'email'],
        ];
    }
}