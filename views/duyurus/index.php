<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\duyuruSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Duyurus';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="duyuru-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Duyuru', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'duyuru_id',
            'yazan_id',
            'duyuru_bas',
            'kategori_id',
            'duyuru_detayi',
            // 'tarih',
            // 'zaman_siniri',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
