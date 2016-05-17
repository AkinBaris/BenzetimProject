<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\TCategory */

$this->title = 'Create Tcategory';
$this->params['breadcrumbs'][] = ['label' => 'Tcategories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tcategory-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
