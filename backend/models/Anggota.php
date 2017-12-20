<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "anggota".
 *
 * @property integer $id
 * @property string $nim
 * @property string $nama
 * @property string $alamat
 * @property integer $id_jurusan
 * @property string $gambar
 * @property integer $status
 */
class Anggota extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'anggota';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nim', 'nama', 'alamat', 'id_jurusan', 'status'], 'required'],
            [['id_jurusan', 'status'], 'integer'],
            [['nim', 'nama', 'alamat', 'gambar'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nim' => 'Nim',
            'nama' => 'Nama',
            'alamat' => 'Alamat',
            'id_jurusan' => 'Id Jurusan',
            'gambar' => 'Gambar',
            'status' => 'Status',
        ];
    }
}
