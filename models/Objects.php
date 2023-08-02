<?php
namespace app\models;
use yii\db\ActiveRecord;

class Objects extends ActiveRecord{
    
    public function getStatus(){
        return $this->hasOne(Status::class, ['id' => 'status_id']);
    }

    public function edit(){
        $name = $this->name;
        $decription = $this->name;
        $date_start = strtotime($this->date_start);
        $date_finish = strtotime($this->date_finish);
        $status_id = $this->status_id;
        $edit_update = time();

        $this->save();
    }

    public function rules(){
        return [
            [['date_start', 'date_finish'], 'required'],
            [['name', 'description', 'status_id', 'edit_update'], 'safe'],
        ];
    }
}