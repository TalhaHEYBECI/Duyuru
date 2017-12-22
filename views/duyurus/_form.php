<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\duyuru */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="duyuru-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'yazan_id')->textInput() ?>

    <?= $form->field($model, 'duyuru_bas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kategori_id')->textInput() ?>

    <?= $form->field($model, 'duyuru_detayi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tarih')->textInput() ?>

    <?= $form->field($model, 'zaman_siniri')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
