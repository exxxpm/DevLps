<?php
namespace app\models;
use Yii;
use DateTime;
use yii\db\ActiveRecord;

class Objects extends ActiveRecord{
    public function getStatus(){
        return $this->hasOne(Status::class, ['id' => 'status_id']);
    }

    public function change_object() {
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
        Yii::info("Home related to Object ID {$this->id} deleted.", __METHOD__);
    }

    public function rules(){
        return [
            [['date_start', 'date_finish'], 'required'],
            [['name', 'description', 'status_id'], 'safe'],
        ];
    }
}