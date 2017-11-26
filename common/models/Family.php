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
            'idfamily' => 'Idfamily',
            'spname' => 'Spname',
            'spbirth' => 'Spbirth',
            'sppleace' => 'Sppleace',
            'spethnic' => 'Spethnic',
            'spdegree' => 'Spdegree',
            'sppolitic' => 'Sppolitic',
            'spwduty' => 'Spwduty',
            'spphone' => 'Spphone',
            'spbasic' => 'Spbasic',
            'relation' => 'Relation',
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
