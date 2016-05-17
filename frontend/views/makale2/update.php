<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Makale2 */

$this->title = 'Update Makale2: ' . $model->ID;
$this->params['breadcrumbs'][] = ['label' => 'Makale2s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID, 'url' => ['view', 'id' => $model->ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="makale2-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
