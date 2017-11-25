<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "task".
 *
 * @property integer $idtask
 * @property string $tpye
 * @property string $creattime
 * @property string $status
 * @property integer $img
 * @property integer $uid
 *
 * @property User $u
 */
class Task extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'task';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idtask'], 'required'],
            [['idtask', 'img', 'uid'], 'integer'],
            [['creattime'], 'safe'],
            [['tpye', 'status'], 'string', 'max' => 45],
            [['uid'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['uid' => 'id']],
        ];
    }
    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idtask' => 'Idtask',
            'tpye' => 'Tpye',
            'creattime' => 'Creattime',
            'status' => 'Status',
            'img' => 'Img',
            'uid' => 'Uid',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getU()
    {
        return $this->hasOne(User::className(), ['id' => 'uid']);
    }
}
