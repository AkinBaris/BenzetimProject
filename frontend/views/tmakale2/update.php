<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\TMakale2 */

$this->title = 'Update Tmakale2: ' . $model->ID;
$this->params['breadcrumbs'][] = ['label' => 'Tmakale2s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID, 'url' => ['view', 'id' => $model->ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tmakale2-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
