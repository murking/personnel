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
 * @property string $relation
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
            [['idfamily', 'spbasic'], 'integer'],
            [['spbirth'], 'safe'],
            [['spname', 'sppleace', 'spethnic', 'spdegree', 'sppolitic', 'spwduty', 'spphone', 'relation'], 'string', 'max' => 45],
            [['spbasic'], 'exist', 'skipOnError' => true, 'targetClass' => Basic::className(), 'targetAttribute' => ['spbasic' => 'idbasic']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idfamily' => '家庭ID',
            'spname' => '姓名',
            'spbirth' => '出生日期',
            'sppleace' => '出生地点',
            'spethnic' => '民族',
            'spdegree' => '学历',
            'sppolitic' => '政治面貌',
            'spwduty' => '职务',
            'spphone' => '电话',
            'spbasic' => '员工姓名',
            'relation' => '关系',
        ];
    }
/**    public function getRel($insert){
        if ($insert==1){
            return '配偶';
        }
    }
 */
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
