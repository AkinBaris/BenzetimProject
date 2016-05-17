<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Makale */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="makale-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'MName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Text')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'FDate')->textInput() ?>

    <?= $form->field($model, 'CID')->textInput() ?>

    <?= $form->field($model, 'CDC')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
