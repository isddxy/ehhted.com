<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Muscle */

$this->title = 'Редактирование мышцы: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Muscles', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Обновить';
?>
<div class="muscle-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
