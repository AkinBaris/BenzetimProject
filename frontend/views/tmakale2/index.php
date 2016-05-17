<?php

use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\TMakale2Search */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tmakale2s';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tmakale2-index">


    <p>
        <?= Html::a('Create Tmakale2', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= ListView::widget([
        'dataProvider' => $dataProvider,
        'itemOptions' => ['class' => 'item'],
        'itemView' => function ($model, $key, $index, $widget) {
            return Html::a(Html::encode($model->ID), ['view', 'id' => $model->ID]);
        },
    ]) ?>
</div>
