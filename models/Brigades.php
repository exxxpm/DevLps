<?php

namespace app\models;

use yii\db\ActiveRecord;

class Brigades extends ActiveRecord{
    public function getSlink(){
        return $this->hasMany(SurfaceLink::class, ['model_id' => 'id']);
    }

    public function getWlink(){
        return $this->hasMany(WorksLink::class, ['model_id' => 'id']);
    }
}