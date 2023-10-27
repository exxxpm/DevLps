<?php

namespace app\models\forms;

use app\models\FormulasLink;
use app\models\SurfaceLink;
use app\models\Works;
use yii\base\Model;

class EditWorks extends Model {
    public $name;
    public $surface_id;
    public $formula;
    public $_works;

    public function __construct($id){
        $this->_works = Works::findOne($id);
        $this->name = $this->_works->name;
        $this->surface_id = $this->_works->surface->name;
        $this->formula = $this->_works->formula;
    }

    public function rules(){
        return [
            [['name'], 'required', 'message' => 'Необходимо заполнить «Наименование работы».'],
            [['surface_id', 'formula'], 'trim'],
        ];
    }

    public function edit(){
        $works = $this->_works;
        $works->name = $this->name;
        $works->surface_id = $this->surface_id;
        $works->formula = $this->formula;

        $works->save();
    }
}