<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TMakaleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tmakales';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tmakale-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tmakale', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID',
            'M_Name',
            'M_Text:ntext',
            'M_FDate',
            'C_ID',
            // 'C_DC',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
