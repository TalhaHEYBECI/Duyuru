<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\duyuruSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="duyuru-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'duyuru_id') ?>

    <?= $form->field($model, 'yazan_id') ?>

    <?= $form->field($model, 'duyuru_bas') ?>

    <?= $form->field($model, 'kategori_id') ?>

    <?= $form->field($model, 'duyuru_detayi') ?>

    <?php // echo $form->field($model, 'tarih') ?>

    <?php // echo $form->field($model, 'zaman_siniri') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
