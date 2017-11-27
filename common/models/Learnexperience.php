<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "learnexperience".
 *
 * @property integer $idlearnexperience
 * @property string $period
 * @property string $scmajor
 * @property string $scduty
 * @property string $witness
 * @property integer $basicid
 *
 * @property Basic $basic
 */
class Learnexperience extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'learnexperience';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['basicid'], 'integer'],
            [['period', 'scmajor', 'scduty', 'witness'], 'string', 'max' => 45],
            [['basicid'], 'exist', 'skipOnError' => true, 'targetClass' => Basic::className(), 'targetAttribute' => ['basicid' => 'idbasic']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idlearnexperience' => 'id',
            'period' => '起止日期',
            'scmajor' => '就读学校和专业',
            'scduty' => '职务',
            'witness' => '见证人',
            'basicid' => '员工id',
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
