<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "produk".
 *
 * @property string $kode
 * @property string $nama
 * @property string $harga
 * @property string $kategori
 *
 * @property Kategori $kategori0
 * @property Transaksi[] $transaksis
 */
class Produk extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'produk';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode'], 'required'],
            [['kode'], 'string', 'max' => 10],
            [['nama'], 'string', 'max' => 20],
            [['harga'], 'string', 'max' => 14],
            [['kategori'], 'string', 'max' => 4],
            [['kode'], 'unique'],
            [['kategori'], 'exist', 'skipOnError' => true, 'targetClass' => Kategori::className(), 'targetAttribute' => ['kategori' => 'kode']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kode' => 'Kode',
            'nama' => 'Nama',
            'harga' => 'Harga',
            'kategori' => 'Kategori',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKategori0()
    {
        return $this->hasOne(Kategori::className(), ['kode' => 'kategori']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTransaksis()
    {
        return $this->hasMany(Transaksi::className(), ['kode_produk' => 'kode']);
    }
}
