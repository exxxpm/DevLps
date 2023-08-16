<?php
namespace app\models;

use Yii;
use DateTime;
use yii\db\ActiveRecord;

class Objects extends ActiveRecord{
    public function getStatus(){
        return $this->hasOne(Status::class, ['id' => 'status_id']);
    }

    public function rules(){
        return [
            [['name'], 'required', 'message' => 'Необходимо заполнить «Название».'],
            [['description'], 'trim'],
            [['status_id'], 'integer'],
            [['date_start'], 'validateDates'],
            [['date_finish'], 'validateDates']
        ];
    }

    public function validateDates($attribute, $params){
        if ($this->$attribute == null || strlen($this->$attribute) <= 1) {
            $this->addError($attribute, 'Необходимо заполнить данное поле.');
        }
    }

    public function add_object() {
        $months = ['Янв' => 'Jan', 'Фев' => 'Feb', 'Март' => 'Mar', 'Апр' => 'Apr','Май' => 'May', 'Июнь' => 'Jun', 'Июль' => 'Jul', 'Авг' => 'Aug','Сен' => 'Sep', 'Окт' => 'Oct', 'Ноя' => 'Nov', 'Дек' => 'Dec'];

        $start_date_transformed = strtr($this->date_start, $months);
        $finish_date_transformed = strtr($this->date_finish, $months);

        $this->date_start = (DateTime::createFromFormat('d M y', $start_date_transformed) !== false) ? DateTime::createFromFormat('d M y', $start_date_transformed)->getTimestamp() : false;
        $this->date_finish = (DateTime::createFromFormat('d M y', $finish_date_transformed) !== false) ? DateTime::createFromFormat('d M y', $finish_date_transformed)->getTimestamp() : false;

        $current_time = time();
        $this->create = $current_time;
        $this->last_update = $current_time;
        $this->author_id =  Yii::$app->user->id;
        return $this->save();
    }

    public function edit_object() {
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

    public function afterDelete(){
        parent::afterDelete();
        Home::deleteAll(['object_id' => $this->id]);
    }
}