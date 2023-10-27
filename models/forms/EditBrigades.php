<?php

namespace app\models\forms;

use app\models\Brigades;
use app\models\SurfaceLink;
use app\models\WorksLink;
use yii\base\Model;

class EditBrigades extends Model{
    public $name;
    public $surfaces = [];
    public $works = [];
    public $names = [];
    public $phones = [];
    public $_brigades;

    public function rules(){
        return [
            [['name'], 'required', 'message' => 'Необходимо заполнить «Наименование работы».'],
            [['surfaces', 'works', 'names', 'phones'], 'trim'],
        ];
    }

    public function __construct($id){
        $this->_brigades = Brigades::findOne($id);
        $this->name = $this->_brigades->name;

        $workers = unserialize($this->_brigades->workers);
        foreach ($workers as $worker) {
            $this->names[] = $worker["name"];
            $this->phones[] = $worker["phone"];
        }

        $surfaces = SurfaceLink::find(['model_id' => 'id'])->all();
        foreach ($surfaces as $surface){
            $this->surfaces[] = $surface->surface_id;
        }
        $works = WorksLink::find(['model_id' => 'id'])->all();
        foreach ($works as $work){
            $this->works[] = $work->works_id;
        }
    }

    public function edit(){
        $brigada = $this->_brigades;

        $workers = [];
        for ($count_workers = 0; $count_workers < count($this->names); $count_workers++){
            $workers [$count_workers] = [
                "name" => $this->names[$count_workers],
                "phone" => $this->phones[$count_workers],
            ];
        }

        $brigada->name = $this->name;
        $brigada->workers = serialize($workers);

        if($brigada->save()){
            $this->additional_data($brigada);
        }
        return $brigada;
    }

    public function additional_data($brigada){
        $surface_link = SurfaceLink::find()->where(['model_id' => $brigada->id])->all();
        foreach ($surface_link as $surface){
            $surface->delete();
        }

        $works_link = WorksLink::find()->where(['model_id' => $brigada->id])->all();
        foreach ($works_link as $work){
            $work->delete();
        }

        foreach ($this->surfaces as $surface){
            $surface_link = new SurfaceLink();
            $surface_link->surface_id = $surface;
            $surface_link->model_id = $brigada->id;
            $surface_link->save();
        }

        foreach ($this->works as $work){
            $works_link = new WorksLink();
            $works_link->works_id = $work;
            $works_link->model_id = $brigada->id;
            $works_link->save();
        }
    }
}