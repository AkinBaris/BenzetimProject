<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\TUsersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tusers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tusers-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tusers', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID',
            'Username',
            'Password',
            'E-mail',
            'Name',
            // 'Surname',
            // 'LastLogin',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
