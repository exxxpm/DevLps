<?php

namespace app\models;

use yii\db\ActiveRecord;

class Works extends ActiveRecord{
    public function getSurface(){
        return $this->hasOne(Surface::class, ['id' => 'surface_id']);
    }
}