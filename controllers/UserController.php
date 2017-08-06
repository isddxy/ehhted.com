<?php
/**
 * Created by PhpStorm.
 * User: antonmilaea
 * Date: 03.08.17
 * Time: 17:24
 */

namespace app\controllers;

use app\models\User;
use Yii;
use yii\web\Controller;
use yii\web\HttpException;


class UserController extends Controller
{

    public function actionIndex()
    {
        $users = User::allUsers();
        return $this->render('index', ['users'=>$users]);
    }

    public function actionView($username)
    {
        $user = User::findByUsername(['login'=>$username]);
        if ($user)
        {
            return $this->render('profile', ['user'=> $user]);
        } else {
            $user = User::findById(['id'=>$username]);
            if ($user)
            {
                return $this->render('profile', ['user'=> $user]);
            } else {
                throw new HttpException(404 ,'Page not found');
            }
        }
    }

}