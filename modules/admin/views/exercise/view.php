<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Exercise */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Exercises', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="exercise-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?php $muscle = $model->muscles;?>
    <?php
        $items = '';
        foreach ($muscle as $item) {
            $items .= '<li><a href="/admin/muscle/view?id='.$item->id.'">'.$item->name.'</a></li>';
        }
    ?>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            'description:ntext',
            'image',
            'viewed',
            'status',
        ],
    ]) ?>
    <h4>Задействует мышцы:</h4>
    <ul>
        <?=$items?>
    </ul>


</div>
