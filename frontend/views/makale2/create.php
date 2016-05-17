<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Makale2 */

$this->title = 'Yeni Makale Oluştur';
$this->params['breadcrumbs'][] = ['label' => 'Yeni Makale', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="makale2-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
