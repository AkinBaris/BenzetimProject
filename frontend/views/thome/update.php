<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\THome */

$this->title = 'Update Thome: ' . $model->ID;
$this->params['breadcrumbs'][] = ['label' => 'Thomes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID, 'url' => ['view', 'id' => $model->ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="thome-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
