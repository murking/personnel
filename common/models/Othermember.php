<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "othermember".
 *
 * @property integer $idothermember
 * @property string $ottitle
 * @property string $otname
 * @property string $otbirth
 * @property string $otwduty
 * @property string $otpolitic
 * @property integer $otfam
 *
 * @property Family $otfam0
 */
class Othermember extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'othermember';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idothermember'], 'required'],
            [['idothermember', 'otfam'], 'integer'],
            [['otbirth'], 'safe'],
            [['ottitle', 'otname', 'otwduty', 'otpolitic'], 'string', 'max' => 45],
            [['otfam'], 'exist', 'skipOnError' => true, 'targetClass' => Family::className(), 'targetAttribute' => ['otfam' => 'idfamily']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idothermember' => 'Idothermember',
            'ottitle' => '称谓',
            'otname' => '姓名',
            'otbirth' => '出生日期',
            'otwduty' => '职务',
            'otpolitic' => '政治面貌',
            'otfam' => 'Otfam',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOtfam0()
    {
        return $this->hasOne(Family::className(), ['idfamily' => 'otfam']);
    }
}
