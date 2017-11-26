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
            'iddepartment' => 'Iddepartment',
            'depname' => 'Depname',
            'depup' => 'Depup',
            'depshort' => 'Depshort',
            'depmanager' => 'Depmanager',
        ];
    }
}
