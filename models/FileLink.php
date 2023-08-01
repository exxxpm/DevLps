<?php

namespace app\models;
use yii\db\ActiveRecord;

class FileLink extends ActiveRecord{
    public function getFiles(){
        return $this->hasOne(File::class, ['id' => 'file_id']);
    }
}