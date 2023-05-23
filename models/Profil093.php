<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "profil_093".
 *
 * @property int $id
 * @property int $id_mahasiswa
 * @property string $foto_profil
 *
 * @property Mahasiswa093 $mahasiswa
 */
class Profil093 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'profil_093';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_mahasiswa', 'foto_profil'], 'required'],
            [['id_mahasiswa'], 'integer'],
            [['foto_profil'], 'string', 'max' => 19],
            [['id_mahasiswa'], 'unique'],
            [['id_mahasiswa'], 'exist', 'skipOnError' => true, 'targetClass' => Mahasiswa093::class, 'targetAttribute' => ['id_mahasiswa' => 'Id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_mahasiswa' => 'Id Mahasiswa',
            'foto_profil' => 'Foto Profil',
        ];
    }

    /**
     * Gets query for [[Obat093]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getObat093()
    {
        return $this->hasMany(Obat093::class, ['Id']);
    }
}
