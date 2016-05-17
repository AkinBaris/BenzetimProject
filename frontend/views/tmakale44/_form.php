<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\TMakale44 */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tmakale44-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'M_Name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'M_Text')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'M_FDate')->textInput() ?>

    <?= $form->field($model, 'C_ID')->textInput() ?>

    <?= $form->field($model, 'C_DC')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
