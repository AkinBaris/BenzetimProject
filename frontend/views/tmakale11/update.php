<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\TMakale11 */

$this->title = 'Update Tmakale11: ' . $model->ID;
$this->params['breadcrumbs'][] = ['label' => 'Tmakale11s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID, 'url' => ['view', 'id' => $model->ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tmakale11-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
