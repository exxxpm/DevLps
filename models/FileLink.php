<?php

namespace app\models;
use yii\db\ActiveRecord;

class FileLink extends ActiveRecord{

    public function getFile(){
        return $this->hasOne(File::class, ['id' => 'file_id']);
    }

}