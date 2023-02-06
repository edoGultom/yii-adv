<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "table_guru".
 *
 * @property int $id
 * @property string|null $nama
 * @property string|null $alamat
 * @property int|null $id_jeniskelamin
 * @property int|null $id_kelas
 */
class TableGuru extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'table_guru';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'alamat'], 'string'],
            [['id_jeniskelamin', 'id_kelas'], 'default', 'value' => null],
            [['id_jeniskelamin', 'id_kelas'], 'integer'],
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
            'id_jeniskelamin' => 'Id Jeniskelamin',
            'id_kelas' => 'Id Kelas',
        ];
    }
}
