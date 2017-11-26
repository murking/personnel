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
            'other' => 'Other',
            'othe' => 'Othe',
            'oth' => 'Oth',
            'ot' => 'Ot',
        ];
    }
}
