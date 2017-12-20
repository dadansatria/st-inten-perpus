<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "buku".
 *
 * @property integer $id
 * @property string $nama
 * @property integer $id_penulis
 * @property integer $id_penerbit
 * @property string $tahun
 * @property string $kota
 * @property string $katalog
 * @property string $keterangan
 * @property integer $eksemplar
 * @property integer $stok
 * @property string $no_rak
 * @property string $updated_at
 * @property string $created_at
 */
class Buku extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'buku';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_penulis', 'id_penerbit', 'tahun', 'nama', 'no_rak'], 'required'],
            [['id_penulis', 'id_penerbit', 'eksemplar', 'stok'], 'integer'],
            [['keterangan'], 'string'],
            [['updated_at', 'created_at'], 'safe'],
            [['nama', 'kota', 'katalog', 'no_rak'], 'string', 'max' => 255],
            [['tahun'], 'string', 'max' => 4],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'id_penulis' => 'Penulis',
            'id_penerbit' => 'Penerbit',
            'tahun' => 'Tahun',
            'kota' => 'Kota',
            'katalog' => 'Katalog',
            'keterangan' => 'Keterangan',
            'eksemplar' => 'Eksemplar',
            'stok' => 'Stok',
            'no_rak' => 'No Rak',
            'updated_at' => 'Updated At',
            'created_at' => 'Created At',
        ];
    }

    public function getPenulis()
    {
        return $this->hasOne(Penulis::className(), ['id' => 'id_penulis']);
    }


    public function getPenerbit()
    {
        return $this->hasOne(Penerbit::className(), ['id' => 'id_penerbit']);
    }

    public function getRelationField($relation,$field)
    {
        if (!empty($this->$relation->$field)) {
            return $this->$relation->$field;
        } else {
            return null;
        }
    }

}
