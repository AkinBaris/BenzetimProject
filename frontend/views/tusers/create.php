<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\TUsers */

$this->title = 'Create Tusers';
$this->params['breadcrumbs'][] = ['label' => 'Tusers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tusers-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
