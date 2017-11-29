<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "contract".
 *
 * @property integer $idcontract
 * @property string $contype
 * @property string $connumber
 * @property string $conbegin
 * @property string $conend
 * @property string $conpleace
 * @property string $conbook
 * @property string $applydate
 * @property string $insurancedate
 * @property string $funddate
 * @property string $departdate
 * @property integer $conbasic
 *
 * @property Basic $conbasic0
 */
class Contract extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'contract';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [

            [['conbasic'], 'integer'],
            [['conbegin', 'conend', 'applydate', 'insurancedate', 'funddate', 'departdate'], 'safe'],
            [['contype', 'connumber', 'conpleace', 'conbook'], 'string', 'max' => 45],
            [['conbasic'], 'exist', 'skipOnError' => true, 'targetClass' => Basic::className(), 'targetAttribute' => ['conbasic' => 'idbasic']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idcontract' => '合同ID',
            'contype' => '合同类型',
            'connumber' => '合同编号',
            'conbegin' => '合同开始日期',
            'conend' => '合同结束日期',
            'conpleace' => '档案所在地',
            'conbook' => '劳动手册',
            'applydate' => '办理录用手续时间',
            'insurancedate' => '办理保险时间',
            'funddate' => '办理公积金时间',
            'departdate' => '离职时间',
            'conbasic' => '员工ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getConbasic0()
    {
        return $this->hasOne(Basic::className(), ['idbasic' => 'conbasic']);
    }
}
