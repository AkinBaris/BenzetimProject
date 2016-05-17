<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Users5 */

$this->title = $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Users5s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="users5-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ID',
            'Username',
            'Password',
            'LastLogin',
            'tip',
            'Name:ntext',
            'Surname:ntext',
            'Email:ntext',
        ],
    ]) ?>

</div>
