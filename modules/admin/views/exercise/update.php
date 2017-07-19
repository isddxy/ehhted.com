<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Exercise */

$this->title = 'Update Exercise: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Exercises', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="exercise-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php
        //$selected = \app\models\Muscle::find()->count()+1; //CREATE

        //$muscles = \app\models\Muscle::find()->select(['name'])->indexBy('id')->column();



    ?>

<!--    --><?//= Html::dropDownList('muscles', $selected, $muscles, ['class' => 'form-control', 'multiple'=> true]) ?>
<!--    --><?//= Html::submitButton('Submit', ['class' => 'btn-success']) ?>

    <?= $this->render('_form', [
        'model' => $model,
        'muscles' => $muscles,
        'selected' => $selected,
    ]) ?>

</div>
