<?php

namespace app\controllers;

use app\models\LoginForm;
use app\models\SignupForm;
use yii\web\Controller;
use Yii;
use app\models\User;
use yii\web\HttpException;

class AuthController extends Controller
{
    /**
     * @return string|\yii\web\Response
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }


    public function actionSignup()
    {
        $model = new SignupForm();
        return $this->render('signup', ['model'=>$model]);
    }


    public function actionTest()
    {
        $user = User::findOne(1);
//        Yii::$app->user->login($user);
        Yii::$app->user->logout();
        if(Yii::$app->user->isGuest)
        {
            echo 'Вы гость';
        } else {
            echo 'Вы Авторизованый';
        }
        //$this->vardump(Yii::$app->components);
    }


    public function actionAjaxLogin() {
        if (Yii::$app->request->isAjax) {
            $model = new LoginForm();
            if ($model->load(Yii::$app->request->post())) {
                if ($model->login()) {
                    return $this->goBack();
                } else {
                    Yii::$app->response->format = yii\web\Response::FORMAT_JSON;
                    return \yii\widgets\ActiveForm::validate($model);
                }
            }
        } else {
            throw new HttpException(404 ,'Page not found');
        }
    }


    public function vardump($array) {
        echo '<pre>';
        print_r($array);
        echo '</pre>';
    }
}