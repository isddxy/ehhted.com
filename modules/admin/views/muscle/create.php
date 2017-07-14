<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Muscle */

$this->title = 'Создание мышцы';
$this->params['breadcrumbs'][] = ['label' => 'Muscles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="muscle-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>


    <hr><hr><hr>

</div>
