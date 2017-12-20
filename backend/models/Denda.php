<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "denda".
 *
 * @property integer $id
 * @property integer $id_peminjaman
 * @property string $jumlah
 * @property string $tanggal
 */
class Denda extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'denda';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_peminjaman'], 'required'],
            [['id_peminjaman'], 'integer'],
            [['tanggal'], 'safe'],
            [['jumlah'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_peminjaman' => 'Id Peminjaman',
            'jumlah' => 'Jumlah',
            'tanggal' => 'Tanggal',
        ];
    }
}
