<?php
namespace app\models;
use yii\db\ActiveRecord;

class Objects extends ActiveRecord{
    public function getStatus(){
        return $this->hasOne(Status::class, ['id' => 'status_id']);
    }

    public function edit_object(){

    }
}