<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "anggota".
 *
 * @property integer $id
 * @property string $nama
 * @property string $alamat
 * @property string $tempat_lahir
 * @property string $tanggal_lahir
 * @property string $telepon
 * @property string $email
 * @property integer $id_jenis_kelamin
 * @property integer $id_pendidikan
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
            [['nama','tempat_lahir', 'alamat'], 'required'],
            [['email'],'email'],
            [['tanggal_lahir'], 'safe'],
            [['telepon', 'id_jenis_kelamin', 'id_pendidikan'], 'integer'],
            [['nama', 'alamat', 'tempat_lahir', 'email'], 'string', 'max' => 255],
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
            'alamat' => 'Alamat',
            'tempat_lahir' => 'Tempat Lahir',
            'tanggal_lahir' => 'Tanggal Lahir',
            'telepon' => 'Telepon',
            'email' => 'Email',
            'id_jenis_kelamin' => 'Id Jenis Kelamin',
            'id_pendidikan' => 'Id Pendidikan',
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
