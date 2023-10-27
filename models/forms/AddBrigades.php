<?php

namespace app\models\forms;

use app\models\Brigades;
use app\models\Surface;
use app\models\SurfaceLink;
use app\models\Works;
use app\models\WorksLink;
use yii\base\Model;

class AddBrigades extends Model {
    public $name;
    public $surfaces = [];
    public $works = [];
    public $names = [];
    public $phones = [];
    public function rules(){
        return [
            [['name'], 'required', 'message' => 'Необходимо заполнить «Наименование работы».'],
            [['surfaces', 'works', 'names', 'phones'], 'trim'],
        ];
    }

    public function add(){
        $brigada = new Brigades();

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