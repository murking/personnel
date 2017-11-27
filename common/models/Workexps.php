<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "workexps".
 *
 * @property integer $idworkexps
 * @property string $wkperiod
 * @property string $wkdepart
 * @property string $wkduty
 * @property string $wkwitness
 * @property integer $basicid
 *
 * @property Basic $basic
 */
class Workexps extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'workexps';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idworkexps', 'basicid'], 'required'],
            [['idworkexps', 'basicid'], 'integer'],
            [['wkperiod', 'wkdepart', 'wkduty', 'wkwitness'], 'string', 'max' => 45],
            [['basicid'], 'exist', 'skipOnError' => true, 'targetClass' => Basic::className(), 'targetAttribute' => ['basicid' => 'idbasic']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idworkexps' => 'ID',
            'wkperiod' => '起止日期',
            'wkdepart' => '工作单位及部门',
            'wkduty' => '职务',
            'wkwitness' => '证明人',
            'basicid' => '员工ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBasic()
    {
        return $this->hasOne(Basic::className(), ['idbasic' => 'basicid']);
    }
}
