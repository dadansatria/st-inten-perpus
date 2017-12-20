<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "peminjaman".
 *
 * @property integer $id
 * @property integer $id_buku
 * @property integer $id_anggota
 * @property string $tanggal_peminjaman
 * @property string $tanggal_pengembalian
 * @property integer $status
 */
class Peminjaman extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'peminjaman';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_buku', 'id_anggota'], 'required'],
            [['id_buku', 'id_anggota', 'status'], 'integer'],
            [['tanggal_peminjaman', 'tanggal_pengembalian'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_buku' => 'Id Buku',
            'id_anggota' => 'Id Anggota',
            'tanggal_peminjaman' => 'Tanggal Peminjaman',
            'tanggal_pengembalian' => 'Tanggal Pengembalian',
            'status' => 'Status',
        ];
    }
}
