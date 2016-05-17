<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\TMakale44 */

$this->title = 'Create Tmakale44';
$this->params['breadcrumbs'][] = ['label' => 'Tmakale44s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tmakale44-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
