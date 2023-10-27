<?php

namespace app\models;

use app\models\forms\AddWorks;
use yii\db\ActiveRecord;

class WorksLink extends ActiveRecord{
    public function getWorks(){
        return $this->hasMany(Works::class, ['id' => 'works_id']);
    }
}