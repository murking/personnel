<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "department".
 *
 * @property integer $iddepartment
 * @property string $depname
 * @property string $depup
 * @property string $depshort
 * @property string $depmanager
 *
 * @property Wage[] $wages
 */
class Department extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'department';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['iddepartment'], 'required'],
            [['iddepartment'], 'integer'],
            [['depname', 'depup', 'depshort', 'depmanager'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'iddepartment' => '部门ID',
            'depname' => '部门',
            'depup' => '上级部门',
            'depshort' => '部门简称',
            'depmanager' => '部门主管',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWages()
    {
        return $this->hasMany(Wage::className(), ['wagdepart' => 'iddepartment']);
    }
}
