<?php
namespace app\models;

use Yii;
use DateTime;
use yii\db\ActiveRecord;

class Entrance extends ActiveRecord{

    public function rules(){
        return [
            [['name'], 'required', 'message' => 'Необходимо заполнить «Название».'],
            [['description'], 'trim'],
            [['date_start'], 'validateDates'],
            [['date_finish'], 'validateDates']
        ];
    }

    public function validateDates($attribute, $params){
        if ($this->$attribute == null || strlen($this->$attribute) <= 1) {
            $this->addError($attribute, 'Необходимо заполнить данное поле.');
        }
    }

    public function getFloors(){
        return $this->hasMany(Floor::class, ['entrance_id' => 'id'])->count();
    }

    public function getFlats(){
        return $this->hasMany(Flat::class, ['entrance_id' => 'id'])->count();
    }

    public function getRooms(){
        return $this->hasMany(Room::class, ['entrance_id' => 'id'])->count();
    }

    private function get_date(){
        $months = ['Янв' => 'Jan', 'Фев' => 'Feb', 'Март' => 'Mar', 'Апр' => 'Apr','Май' => 'May', 'Июнь' => 'Jun', 'Июль' => 'Jul', 'Авг' => 'Aug','Сен' => 'Sep', 'Окт' => 'Oct', 'Ноя' => 'Nov', 'Дек' => 'Dec'];

        $start_date_transformed = strtr($this->date_start , $months);
        $finish_date_transformed = strtr($this->date_finish, $months);

        $this->date_start = (DateTime::createFromFormat('d M y', $start_date_transformed) !== false) ? DateTime::createFromFormat('d M y', $start_date_transformed)->getTimestamp() : false;
        $this->date_finish = (DateTime::createFromFormat('d M y', $finish_date_transformed) !== false) ? DateTime::createFromFormat('d M y', $finish_date_transformed)->getTimestamp() : false;
    }

    public function add_entrance($id, $home) {
        $this->get_date();

        $current_time = time();
        $this->create = $current_time;
        $this->last_update = $current_time;

        $this->home_id = $id;
        $this->object_id = $home->object_id;
        $this->author_id =  Yii::$app->user->id;

        return $this->save();
    }

    public function edit_entrance() {
        $this->get_date();

        $this->last_update = time();
        return $this->save();
    }

    public function afterDelete(){
        parent::afterDelete();
        Floor::deleteAll(['entrance_id' => $this->id]);
    }
}