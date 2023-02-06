<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "guru".
 *
 * @property int $id
 * @property string|null $nama
 * @property string|null $alamat
 * @property int|null $id_jenis_kelamin
 * @property int|null $id_kelas
 * @property string|null $no_hp
 */
class Guru extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'guru';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'alamat'], 'string'],
            [['id_jenis_kelamin', 'id_kelas'], 'default', 'value' => null],
            [['id_jenis_kelamin', 'id_kelas'], 'integer'],
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
            'nama' => 'Nama',
            'alamat' => 'Alamat',
            'id_jenis_kelamin' => 'Id Jenis Kelamin',
            'id_kelas' => 'Id Kelas',
            'no_hp' => 'No Hp',
        ];
    }
    public function getRefJenisKelamin()
    {
        return $this->hasOne(RefJensiKelamin::className(), ['id' => 'id_jenis_kelamin']);
    }
    public function getRefKelas()
    {
        return $this->hasOne(RefKelas::className(), ['id' => 'id_kelas']);
    }
}