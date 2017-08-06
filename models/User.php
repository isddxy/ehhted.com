<?php

namespace app\models;

use Yii;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string $login
 * @property string $firstname
 * @property string $lastname
 * @property string $email
 * @property string $password
 * @property string $photo
 * @property string $isAdmin
 */
class User extends \yii\db\ActiveRecord implements IdentityInterface
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['login', 'firstname', 'lastname', 'email', 'password', 'photo', 'isAdmin'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'login' => 'Login',
            'firstname' => 'Firstname',
            'lastname' => 'Lastname',
            'email' => 'Email',
            'password' => 'Password',
            'photo' => 'Photo',
            'isAdmin' => 'Is Admin',
        ];
    }


    public static function findIdentity($id)
    {
       return User::findOne($id);
    }


    public function getId()
    {
        return $this->id;
    }


    public function getAuthKey()
    {
        // TODO: Implement getAuthKey() method.
    }


    public function validateAuthKey($authKey)
    {
        // TODO: Implement validateAuthKey() method.
    }


    public static function findIdentityByAccessToken($token, $type = null)
    {
        // TODO: Implement findIdentityByAccessToken() method.
    }

    public static function allUsers()
    {
        return User::find()->all();
    }

    public static function findByUsername($username)
    {
        return User::find()->where(['login'=>$username])->orWhere(['email'=>$username])->one();
    }

    public static function findById($id)
    {
        return User::find()->where(['id'=>$id])->one();
    }

    public function validatePassword($password)
    {
        return ($this->password == $password) ? true : false;
    }
}
