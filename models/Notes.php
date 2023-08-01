<?php

namespace app\models;

use yii\db\ActiveRecord;

class Notes extends ActiveRecord{
    public function getFiles(){
        return $this->hasMany(FileLink::class, ['model_id' => 'id']);
    }
}