<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "othermember".
 *
 * @property integer $idothermember
 * @property string $ottitle
 * @property string $otname
 * @property string $otbirth
 * @property string $otwduty
 * @property string $otpolitic
 */
class Othermember extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'othermember';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idothermember'], 'required'],
            [['idothermember'], 'integer'],
            [['otbirth'], 'safe'],
            [['ottitle', 'otname', 'otwduty', 'otpolitic'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idothermember' => 'Idothermember',
            'ottitle' => 'Ottitle',
            'otname' => 'Otname',
            'otbirth' => 'Otbirth',
            'otwduty' => 'Otwduty',
            'otpolitic' => 'Otpolitic',
        ];
    }
}
