<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "siswa".
 *
 * @property int $id
 * @property string|null $nim
 * @property string|null $nama
 * @property int|null $id_jenis_kelamin
 * @property string|null $tgl_lahir
 * @property string|null $alamat
 * @property string|null $no_hp
 */
class Siswa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'siswa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'alamat'], 'string'],
            [['id_jenis_kelamin'], 'default', 'value' => null],
            [['id_jenis_kelamin'], 'integer'],
            [['tgl_lahir'], 'safe'],
            [['nim'], 'string', 'max' => 18],
            [['no_hp'], 'string', 'max' => 15],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nim' => 'Nim',
            'nama' => 'Nama',
            'id_jenis_kelamin' => 'Id Jenis Kelamin',
            'tgl_lahir' => 'Tgl Lahir',
            'alamat' => 'Alamat',
            'no_hp' => 'No Hp',
        ];
    }
    public function getRefJenisKelamin()
    {
        return $this->hasOne(RefJensiKelamin::className(), ['id' => 'id_jenis_kelamin']);
    }
}