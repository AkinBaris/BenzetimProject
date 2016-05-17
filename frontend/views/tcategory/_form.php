<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\TCategory */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tcategory-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'C_Name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'C_UpID')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
