<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\THome */

$this->title = 'Create Thome';
$this->params['breadcrumbs'][] = ['label' => 'Thomes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="thome-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
