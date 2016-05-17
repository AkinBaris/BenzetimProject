<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Users5 */

$this->title = 'Yeni Kullanıcı';
$this->params['breadcrumbs'][] = ['label' => 'Kullanıcı İşlemleri', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="users5-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
