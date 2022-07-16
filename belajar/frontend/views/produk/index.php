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

    <div style="background-color: #ccc">
    <?php foreach($data as $produk):?>
        
            <div class="col-lg-3" style="background-color: #fff; margin-right: 10px">
                <table border="1" style="border: 1px solid #ccc" class="col-lg-10">
                    <tr>
                        <td style="text-align: center;"><?= $produk->nama; ?></td>
                    </tr>
                    <tr>
                        <td style="text-align: center; height: 100px"><img src="pocof1.jpg" height="100px" width="100px"/></td>
                    </tr>
                    <tr>
                        <td style="text-align: center;"><?= Html::a('Beli', ['transaksi/beli',"kode" => $produk->kode], ['class' => 'btn-sm btn-info'])?></td>
                    </tr>
                    </table>
            </div>
<?php endforeach; ?>
</div>
</div>
