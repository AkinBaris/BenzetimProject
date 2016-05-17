<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\TMakale */

$this->title = 'Update Tmakale: ' . $model->ID;
$this->params['breadcrumbs'][] = ['label' => 'Tmakales', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID, 'url' => ['view', 'id' => $model->ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tmakale-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
