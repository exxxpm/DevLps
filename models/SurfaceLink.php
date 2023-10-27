<?php

namespace app\models;

use yii\db\ActiveRecord;

class SurfaceLink extends ActiveRecord{
    public function getSurface(){
        return $this->hasOne(Surface::class, ['id' => 'surface_id']);
    }
}