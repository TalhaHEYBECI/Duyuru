<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "duyuru".
 *
 * @property integer $duyuru_id
 * @property integer $yazan_id
 * @property string $duyuru_bas
 * @property integer $kategori_id
 * @property string $duyuru_detayi
 * @property string $tarih
 * @property integer $zaman_siniri
 */
class Duyuru extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'duyuru';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['yazan_id', 'duyuru_bas', 'kategori_id', 'duyuru_detayi', 'tarih', 'zaman_siniri'], 'required'],
            [['yazan_id', 'kategori_id', 'zaman_siniri'], 'integer'],
            [['tarih'], 'safe'],
            [['duyuru_bas'], 'string', 'max' => 256],
            [['duyuru_detayi'], 'string', 'max' => 1024],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'duyuru_id' => 'Duyuru ID',
            'yazan_id' => 'Yazan ID',
            'duyuru_bas' => 'Duyuru Bas',
            'kategori_id' => 'Kategori ID',
            'duyuru_detayi' => 'Duyuru Detayi',
            'tarih' => 'Tarih',
            'zaman_siniri' => 'Zaman Siniri',
        ];
    }
}
