<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "ref_jensi_kelamin".
 *
 * @property int $id
 * @property string|null $keterangan
 */
class RefJensiKelamin extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ref_jensi_kelamin';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['keterangan'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'keterangan' => 'Keterangan',
        ];
    }
}
