<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Makale2Search */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="makale2-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID') ?>

    <?= $form->field($model, 'MName') ?>

    <?= $form->field($model, 'Text') ?>

    <?= $form->field($model, 'FDate') ?>

    <?= $form->field($model, 'CID') ?>

    <?php // echo $form->field($model, 'CDC') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
