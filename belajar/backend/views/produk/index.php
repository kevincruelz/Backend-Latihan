<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Produks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="produk-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Produk', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kode',
            'nama',
            'harga',
            'kategori', //Asli
            'kategori0.nama', //Relasi tanpa modifikasi
            ['label' => 'kategori','attribute' => 'kategori','value' => 'kategori0.nama',],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
