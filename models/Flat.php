<?php
namespace app\models;
use DateTime;
use yii\db\ActiveRecord;

class Flat extends ActiveRecord{
    public function add_flat($id, $floor) {
        $months = ['Янв' => 'Jan', 'Фев' => 'Feb', 'Март' => 'Mar', 'Апр' => 'Apr','Май' => 'May', 'Июнь' => 'Jun', 'Июль' => 'Jul', 'Авг' => 'Aug','Сен' => 'Sep', 'Окт' => 'Oct', 'Ноя' => 'Nov', 'Дек' => 'Dec'];

        $start_date_transformed = strtr($this->date_start, $months);
        $finish_date_transformed = strtr($this->date_finish, $months);

        $this->date_start = (DateTime::createFromFormat('d M y', $start_date_transformed) !== false) ? DateTime::createFromFormat('d M y', $start_date_transformed)->getTimestamp() : false;
        $this->date_finish = (DateTime::createFromFormat('d M y', $finish_date_transformed) !== false) ? DateTime::createFromFormat('d M y', $finish_date_transformed)->getTimestamp() : false;

        $current_time = time();
        $this->create = $current_time;
        $this->last_update = $current_time;
        $this->floor_id = $id;
        $this->entrance_id = $floor->entrance_id;
        $this->home_id = $floor->home_id;
        $this->object_id = $floor->object_id;
        return $this->save();
    }

    public function edit_flat() {
        $months = ['Янв' => 'Jan', 'Фев' => 'Feb', 'Март' => 'Mar', 'Апр' => 'Apr','Май' => 'May', 'Июнь' => 'Jun', 'Июль' => 'Jul', 'Авг' => 'Aug','Сен' => 'Sep', 'Окт' => 'Oct', 'Ноя' => 'Nov', 'Дек' => 'Dec'];

        $start_date_transformed = strtr($this->date_start, $months);
        $finish_date_transformed = strtr($this->date_finish, $months);

        $this->date_start = (DateTime::createFromFormat('d M y', $start_date_transformed) !== false) ? DateTime::createFromFormat('d M y', $start_date_transformed)->getTimestamp() : false;
        $this->date_finish = (DateTime::createFromFormat('d M y', $finish_date_transformed) !== false) ? DateTime::createFromFormat('d M y', $finish_date_transformed)->getTimestamp() : false;

        $current_time = time();
        $this->create = $current_time;
        $this->last_update = $current_time;
        return $this->save();
    }

    public function rules(){
        return [
            [['date_start', 'date_finish'], 'required'],
            [['name', 'description'], 'safe'],
        ];
    }
}