<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "family".
 *
 * @property integer $idfamily
 * @property string $spname
 * @property string $spbirth
 * @property string $sppleace
 * @property string $spethnic
 * @property string $spdegree
 * @property string $sppolitic
 * @property string $spwduty
 * @property string $spphone
 * @property integer $spbasic
 * @property integer $other
 * @property integer $othe
 * @property integer $oth
 * @property integer $ot
 *
 * @property Basic $spbasic0
 * @property Othermember[] $othermembers
 */
class Family extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'family';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idfamily'], 'required'],
            [['idfamily', 'spbasic', 'other', 'othe', 'oth', 'ot'], 'integer'],
            [['spbirth'], 'safe'],
            [['spname', 'sppleace', 'spethnic', 'spdegree', 'sppolitic', 'spwduty', 'spphone'], 'string', 'max' => 45],
            [['spbasic'], 'exist', 'skipOnError' => true, 'targetClass' => Basic::className(), 'targetAttribute' => ['spbasic' => 'idbasic']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idfamily' => 'Idfamily',
            'spname' => '配偶姓名',
            'spbirth' => '配偶出生日期',
            'sppleace' => '配偶籍贯',
            'spethnic' => '配偶名族',
            'spdegree' => '配偶学历',
            'sppolitic' => '配偶政治面貌',
            'spwduty' => '配偶单位及职务',
            'spphone' => '配偶联系电话',
            'spbasic' => '员工姓名',
            'other' => 'Other',
            'othe' => 'Othe',
            'oth' => 'Oth',
            'ot' => 'Ot',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSpbasic0()
    {
        return $this->hasOne(Basic::className(), ['idbasic' => 'spbasic']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOthermembers()
    {
        return $this->hasMany(Othermember::className(), ['otfam' => 'idfamily']);
    }
}
