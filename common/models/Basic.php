<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "basic".
 *
 * @property integer $idbasic
 * @property string $name
 * @property string $department
 * @property string $duty
 * @property string $idcard
 * @property string $sex
 * @property string $politic
 * @property string $brithdate
 * @property string $educationbk
 * @property string $degree
 * @property string $graduationdate
 * @property string $graduationsc
 * @property string $major
 * @property string $jobtitle
 * @property string $householdreg
 * @property string $householdadd
 * @property string $address
 * @property string $zip
 * @property string $phone
 * @property string $homephone
 * @property string $entrydate
 *
 * @property Contract[] $contracts
 * @property Learnexperience[] $learnexperiences
 * @property Workexps[] $workexps
 * @property Workper[] $workpers
 */
class Basic extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'basic';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idbasic'], 'required'],
            [['idbasic'], 'integer'],
            [['brithdate', 'graduationdate', 'entrydate'], 'safe'],
            [['name', 'department', 'duty', 'idcard', 'sex', 'politic', 'educationbk', 'degree', 'graduationsc', 'major', 'jobtitle', 'householdreg', 'householdadd', 'address', 'zip', 'phone', 'homephone'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idbasic' => '员工id',
            'name' => '姓名',
            'department' => '部门',
            'duty' => '职位',
            'idcard' => '身份证',
            'sex' => '性别',
            'politic' => '政治面貌',
            'brithdate' => '出生日期',
            'educationbk' => 'Educationbk',
            'degree' => '学位',
            'graduationdate' => '毕业时间',
            'graduationsc' => '毕业学校',
            'major' => '专业',
            'jobtitle' => '职务',
            'householdreg' => '籍贯',
            'householdadd' => '籍贯地址',
            'address' => '联系地址',
            'zip' => 'Zip',
            'phone' => 'Phone',
            'homephone' => 'Homephone',
            'entrydate' => 'Entrydate',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getContracts()
    {
        return $this->hasMany(Contract::className(), ['conbasic' => 'idbasic']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLearnexperiences()
    {
        return $this->hasMany(Learnexperience::className(), ['basicid' => 'idbasic']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWorkexps()
    {
        return $this->hasMany(Workexps::className(), ['basicid' => 'idbasic']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWorkpers()
    {
        return $this->hasMany(Workper::className(), ['peridbasic' => 'idbasic']);
    }
}
