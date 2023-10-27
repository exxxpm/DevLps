<?php

namespace app\models\forms;
use app\models\FormulasLink;
use app\models\SurfaceLink;
use app\models\Works;
use yii\base\Model;

class AddWorks extends Model {
    public $name;
    public $surface_id;
    public $formula;
    public function rules(){
        return [
            [['name'], 'required', 'message' => 'Необходимо заполнить «Наименование работы».'],
            [['surface_id', 'formula'], 'trim'],
        ];
    }

    public function add(){
        $works = new Works();
        $works->name = $this->name;
        $works->surface_id = $this->surface_id;
        $works->formula = $this->formula;

        $works->save();
    }
}