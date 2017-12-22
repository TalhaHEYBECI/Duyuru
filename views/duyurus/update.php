<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\duyuru */

$this->title = 'Update Duyuru: ' . $model->duyuru_id;
$this->params['breadcrumbs'][] = ['label' => 'Duyurus', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->duyuru_id, 'url' => ['view', 'id' => $model->duyuru_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="duyuru-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
