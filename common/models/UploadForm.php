<?php
/**
 * Created by PhpStorm.
 * User: zjh-mac
 * Date: 2017/12/8
 * Time: 下午4:14
 */
namespace common\models;
use yii\base\Model;
use yii\web\UploadedFile;
class UploadForm extends Model{
    public $imageFile;
    public function rules(){
        return [
            [['imageFile'],'file','skipOnEmpty'=>false,'extensions'=>'png,jpg,xls,xlsx'],
        ];
    }
    public function upload(){
        if($this->validate()){
            $this->imageFile->saveAs($this->imageFile->baseName.'.'.$this->imageFile->extension);
            return true;
        }else{
            return false;
        }
    }
}