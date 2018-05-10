<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "buku".
 *
 * @property integer $id
 * @property string $nama
 * @property string $tahun_terbit
 * @property integer $id_penulis
 * @property integer $id_penerbit
 * @property integer $id_kategori
 * @property string $sinopsis
 * @property integer $stok
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
            [['nama'], 'required'],
            [['tahun_terbit'], 'safe'],
            [['id_penulis', 'id_penerbit', 'id_kategori', 'stok'], 'integer'],
            [['sinopsis'], 'string'],
            [['nama'], 'string', 'max' => 255],
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
            'tahun_terbit' => 'Tahun Terbit',
            'id_penulis' => 'Id Penulis',
            'id_penerbit' => 'Id Penerbit',
            'id_kategori' => 'Id Kategori',
            'sinopsis' => 'Sinopsis',
            'stok' => 'Stok',
        ];
    }

    /**
     * @inheritdoc
     * @return array untuk dropdown
     */
    public static function getList()
    {
        return \yii\helpers\ArrayHelper::map(self::find()->all(), 'id', 'nama');
    }

}
