<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\Makale2Search */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Makale';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="makale2-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Yeni Makale', ['create'], ['class' => 'btn btn-success']) ?>
		<a href="http://localhost:8080/BenzetimProject/frontend/web/index.php?r=users5" class="btn btn-success">Kullanıcı İşlemleri</a>
			<a href="http://localhost:8080/BenzetimProject/frontend/web/index.php?r=home" class="btn btn-success">Ana Sayfa İşlemleri</a>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID',
            'MName',
            //'Text:ntext',
            //'FDate',
            //'CID',
            // 'CDC',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
