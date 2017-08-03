<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Modal;

Modal::begin([
    'header'=>'<h4>Login</h4>',
    'id'=>'login-modal',
]);
?>

    <p>Please fill out the following fields to login:</p>

<?php $form = ActiveForm::begin([
    'id' => 'login-form',
    'enableAjaxValidation' => true,
    'action' => ['auth/ajax-login']
]);
echo $form->field($model, 'username')->textInput()->label('Логин или E-mail');
echo $form->field($model, 'password')->passwordInput()->label('Пароль');
echo $form->field($model, 'rememberMe')->checkbox()->label('Запомнить меня');
?>

    <div>
        If you forgot your password you can <?= Html::a('reset it', ['site/request-password-reset']) ?>.
    </div>
    <div class="form-group">
        <div class="text-right">

            <?php
            echo Html::button('Cancel', ['class' => 'btn btn-default', 'data-dismiss' => 'modal']);
            echo Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']);
            ?>

        </div>
    </div>

<?php
ActiveForm::end();
Modal::end();