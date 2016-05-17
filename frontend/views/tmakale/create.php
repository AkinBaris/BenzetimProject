<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\TMakale */

$this->title = 'Create Tmakale';
$this->params['breadcrumbs'][] = ['label' => 'Tmakales', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tmakale-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
