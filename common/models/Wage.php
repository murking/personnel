<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "wage".
 *
 * @property integer $idwage
 * @property string $wagname
 * @property string $wagbas
 * @property string $wagpost
 * @property string $wagdiff
 * @property string $wagage
 * @property string $wagalone
 * @property string $wagother
 * @property string $wagreward
 * @property string $wagde
 * @property string $wagshould
 * @property string $wagpension
 * @property string $wagmedical
 * @property string $waglost
 * @property string $wagfund
 * @property string $wagup
 * @property string $wagtax
 * @property string $wagptax
 * @property string $wagunion
 * @property string $wagget
 * @property integer $wagdepart
 * @property string $wagcreatedate
 * @property string $wagupdatedate
 * @property Department $wagdepart0
 */
class Wage extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'wage';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idwage'], 'required'],
            [['idwage', 'wagdepart'], 'integer'],
            [['wagname', 'wagbas', 'wagpost', 'wagdiff', 'wagage', 'wagalone', 'wagother', 'wagreward', 'wagde', 'wagshould', 'wagpension', 'wagmedical', 'waglost', 'wagfund', 'wagup', 'wagtax', 'wagptax', 'wagunion', 'wagget', 'wagcreatedate', 'wagupdatedate'], 'string', 'max' => 45],
            [['wagdepart'], 'exist', 'skipOnError' => true, 'targetClass' => Department::className(), 'targetAttribute' => ['wagdepart' => 'iddepartment']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idwage' => '员工ID',
            'wagname' => '姓名',
            'wagbas' => '基本工资',
            'wagpost' => '岗位工资',
            'wagdiff' => '补差',
            'wagage' => '司龄',
            'wagalone' => '独子',
            'wagother' => '其它',
            'wagreward' => '奖励',
            'wagde' => '扣减',
            'wagshould' => '应发数',
            'wagpension' => '养老金',
            'wagmedical' => '医疗金',
            'waglost' => '失业金',
            'wagfund' => '公积金',
            'wagup' => '补缴',
            'wagtax' => '应税工资',
            'wagptax' => '个挑税',
            'wagunion' => '工会费',
            'wagget' => '实发金额',
            'wagdepart' => '部门',
            'wagcreatedate' => '日期',
            'wagupdatedate' => '更改日期',
        ];
    }
    public function beforeSave($insert)
    {
        if(parent::beforeSave($insert))
        {
            if($insert)
            {
                $this->wagcreatedate=time();
                $this->wagupdatedate=time();
            }
            else
            {
                $this->wagupdatedate=time();
            }
            return true;
        }
        else
        {
            return false;
        }
    }
    public function getWagdepart0()
    {
        return $this->hasOne(Department::className(), ['iddepartment' => 'wagdepart']);

    }
}
