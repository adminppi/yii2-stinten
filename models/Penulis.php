<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "penulis".
 *
 * @property integer $id
 * @property string $nama
 * @property integer $id_jenis_kelamin
 * @property integer $id_pendidikan
 * @property string $alamat
 * @property string $telepon
 * @property string $email
 */
class Penulis extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'penulis';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama'], 'required'],
            [['id_jenis_kelamin', 'id_pendidikan'], 'integer'],
            [['alamat'], 'string'],
            [['nama', 'telepon', 'email'], 'string', 'max' => 255],
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
            'id_jenis_kelamin' => 'Id Jenis Kelamin',
            'id_pendidikan' => 'Id Pendidikan',
            'alamat' => 'Alamat',
            'telepon' => 'Telepon',
            'email' => 'Email',
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
