<?php

namespace app\models;
use yii\db\ActiveRecord;

class Works extends ActiveRecord{
    public function rules(){
        return [
            [['name'], 'required', 'message' => 'Необходимо заполнить «Наименование работы».'],
            [['surface', 'formula'], 'trim'],
        ];
    }
    public function create_modification() {
        return $this->save();
    }
}