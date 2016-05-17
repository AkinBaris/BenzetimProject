<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\TUsers */

$this->title = $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Tusers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tusers-view">

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
            'E-mail',
            'Name',
            'Surname',
            'LastLogin',
        ],
    ]) ?>

</div>
