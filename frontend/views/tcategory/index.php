<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\TCategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tcategories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tcategory-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tcategory', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID',
            'C_Name',
            'C_UpID',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
