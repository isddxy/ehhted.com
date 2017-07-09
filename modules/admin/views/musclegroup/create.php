<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Musclegroup */

$this->title = 'Create Musclegroup';
$this->params['breadcrumbs'][] = ['label' => 'Musclegroups', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="musclegroup-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
