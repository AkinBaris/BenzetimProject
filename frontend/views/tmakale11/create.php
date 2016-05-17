<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\TMakale11 */

$this->title = 'Create Tmakale11';
$this->params['breadcrumbs'][] = ['label' => 'Tmakale11s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tmakale11-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
