<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\TMakale2 */

$this->title = 'Create Tmakale2';
$this->params['breadcrumbs'][] = ['label' => 'Tmakale2s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tmakale2-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
