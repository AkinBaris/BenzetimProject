<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\TMakale2Search */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tmakale2-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID') ?>

    <?= $form->field($model, 'M_Name') ?>

    <?= $form->field($model, 'M_Text') ?>

    <?= $form->field($model, 'M_FDate') ?>

    <?= $form->field($model, 'C_ID') ?>

    <?php // echo $form->field($model, 'C_DC') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
