<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "transaksi".
 *
 * @property string $kode
 * @property string $tanggal
 * @property string $kode_produk
 * @property int $jumlah
 *
 * @property Produk $kodeProduk
 */
class Transaksi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'transaksi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode'], 'required'],
            [['jumlah'], 'integer'],
            [['kode'], 'string', 'max' => 10],
            [['tanggal'], 'string', 'max' => 16],
            [['kode_produk'], 'string', 'max' => 4],
            [['kode'], 'unique'],
            [['kode_produk'], 'exist', 'skipOnError' => true, 'targetClass' => Produk::className(), 'targetAttribute' => ['kode_produk' => 'kode']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kode' => 'Kode',
            'tanggal' => 'Tanggal',
            'kode_produk' => 'Kode Produk',
            'jumlah' => 'Jumlah',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKodeProduk()
    {
        return $this->hasOne(Produk::className(), ['kode' => 'kode_produk']);
    }
}
