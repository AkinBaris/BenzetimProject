<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\TUsers */

$this->title = 'Update Tusers: ' . $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Tusers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Name, 'url' => ['view', 'id' => $model->ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tusers-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
