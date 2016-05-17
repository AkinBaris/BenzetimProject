<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\TMakale44Search */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tmakale44s';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tmakale44-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tmakale44', ['create'], ['class' => 'btn btn-success']) ?>
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
