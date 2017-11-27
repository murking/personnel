<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "workper".
 *
 * @property integer $idper
 * @property string $perdate
 * @property string $perstatus
 * @property string $perlevel
 * @property string $percom
 * @property integer $peridbasic
 *
 * @property Basic $peridbasic0
 */
class Workper extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'workper';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idper', 'peridbasic'], 'required'],
            [['idper', 'peridbasic'], 'integer'],
            [['perdate', 'perstatus', 'perlevel', 'percom'], 'string', 'max' => 45],
            [['peridbasic'], 'exist', 'skipOnError' => true, 'targetClass' => Basic::className(), 'targetAttribute' => ['peridbasic' => 'idbasic']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idper' => 'Idper',
            'perdate' => 'Perdate',
            'perstatus' => 'Perstatus',
            'perlevel' => 'Perlevel',
            'percom' => 'Percom',
            'peridbasic' => 'Peridbasic',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPeridbasic0()
    {
        return $this->hasOne(Basic::className(), ['idbasic' => 'peridbasic']);
    }
}
