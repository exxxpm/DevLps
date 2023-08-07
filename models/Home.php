<?php
namespace app\models;

use DateTime;
use yii\db\ActiveRecord;

class Home extends ActiveRecord{

    public function getEntrances(){
        return $this->hasMany(Entrance::class, ['home_id' => 'id'])->count();
    }

    public function getFlats(){
        return $this->hasMany(Flat::class, ['home_id' => 'id'])->count();
    }

    public function getRooms(){
        return $this->hasMany(Room::class, ['home_id' => 'id'])->count();
    }

    public function change_home($id) {
        $months = ['Янв' => 'Jan', 'Фев' => 'Feb', 'Март' => 'Mar', 'Апр' => 'Apr','Май' => 'May', 'Июнь' => 'Jun', 'Июль' => 'Jul', 'Авг' => 'Aug','Сен' => 'Sep', 'Окт' => 'Oct', 'Ноя' => 'Nov', 'Дек' => 'Dec'];

        $start_date_transformed = strtr($this->date_start, $months);
        $finish_date_transformed = strtr($this->date_finish, $months);

        $this->date_start = (DateTime::createFromFormat('d M y', $start_date_transformed) !== false) ? DateTime::createFromFormat('d M y', $start_date_transformed)->getTimestamp() : false;
        $this->date_finish = (DateTime::createFromFormat('d M y', $finish_date_transformed) !== false) ? DateTime::createFromFormat('d M y', $finish_date_transformed)->getTimestamp() : false;

        $current_time = time();
        $this->create = $current_time;
        $this->last_update = $current_time;
        $this->object_id = $id;
        return $this->save();
    }

    public function rules(){
        return [
            [['date_start', 'date_finish'], 'required'],
            [['name', 'description'], 'safe'],
        ];
    }
}