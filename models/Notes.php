<?php

namespace app\models;

use yii\db\ActiveRecord;

class Notes extends ActiveRecord{

    public function getFile(){
        return $this->hasMany(FileLink::class, ['id' => 'model_id']);
    }

}