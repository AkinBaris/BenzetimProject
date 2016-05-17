<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\Users5Search */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Yeni Kullanıcı';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="users5-index">
    <p>
        <?= Html::a('Yeni Kullanıcı', ['create'], ['class' => 'btn btn-success']) ?>
			<a href="http://localhost:8080/BenzetimProject/frontend/web/index.php?r=makale2" class="btn btn-success">Makale İşlemleri</a>
			<a href="http://localhost:8080/BenzetimProject/frontend/web/index.php?r=home" class="btn btn-success">Ana Sayfa İşlemleri</a>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID',
            'Username',
            'Password',
            'LastLogin',
            'tip',
            // 'Name:ntext',
            // 'Surname:ntext',
            // 'Email:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
