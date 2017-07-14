<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MuscleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Muscles';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="muscle-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Muscle', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            [
                'label' => 'Группа мышц',
                'value' => function ($data) {
                    return $data->musclegroup->name; // $data['name'] для массивов, например, при использовании SqlDataProvider.
                },
            ],
            'name',
            'image',
            'description:ntext',
            // 'viewed',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
