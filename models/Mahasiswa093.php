<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mahasiswa_093".
 *
 * @property int $Id
 * @property string $Nim
 * @property string $Nama
 * @property string $Kelas
 * @property string $Jurusan
 *
 * @property Profil093 $profil093
 */
class Mahasiswa093 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mahasiswa_093';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id', 'Nim', 'Nama', 'Kelas', 'Jurusan'], 'required'],
            [['Id'], 'integer'],
            [['Nim'], 'string', 'max' => 15],
            [['Nama', 'Jurusan'], 'string', 'max' => 15],
            [['Kelas'], 'string', 'max' => 15],
        ];

        
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id' => 'ID',
            'Nim' => 'No Induk Mahasiswa',
            'Nama' => 'Nama Mahasiswa',
            'Kelas' => 'Kelas',
            'Jurusan' => 'Jurusan',
        ];
    }

    /**
     * Gets query for [[Profil093]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProfil093()
    {
        return $this->hasOne(Profil093::class, ['id_mahasiswa' => 'Id']);
    }
}
