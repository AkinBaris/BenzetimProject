<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\HomeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ana Sayfa Makale';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="home-index">
	<a href="http://localhost:8080/BenzetimProject/frontend/web/index.php?r=users5" class="btn btn-success">Kullanıcı İşlemleri</a>
			<a href="http://localhost:8080/BenzetimProject/frontend/web/index.php?r=makale2" class="btn btn-success">Makale İşlemleri</a>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID',
            'HText:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
