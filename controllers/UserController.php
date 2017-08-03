<?php
/**
 * Created by PhpStorm.
 * User: antonmilaea
 * Date: 03.08.17
 * Time: 17:24
 */

namespace app\controllers;

use Yii;
use yii\web\Controller;


class UserController extends Controller
{

    public function actionIndex($id)
    {
        return $this->render('index', ['id'=> $id]);
    }

}