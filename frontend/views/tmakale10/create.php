<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\TMakale10 */

$this->title = 'Create Tmakale10';
$this->params['breadcrumbs'][] = ['label' => 'Tmakale10s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tmakale10-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
