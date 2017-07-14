<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Muscle */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Мышцы', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="muscle-view">

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

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            [
                'label' => 'Группа мышц',
                'value' => $model->musclegroup->name,
            ],
            'name',
            'image',
            'description:ntext',
            'viewed',
        ],
    ]) ?>

</div>
