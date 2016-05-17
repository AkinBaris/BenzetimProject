<?php

use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\TMakaleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tmakales';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tmakale-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tmakale', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= ListView::widget([
        'dataProvider' => $dataProvider,
        'itemOptions' => ['class' => 'item'],
        'itemView' => function ($model, $key, $index, $widget) {
            return Html::a(Html::encode($model->ID), ['view', 'id' => $model->ID]);
        },
    ]) ?>
</div>
