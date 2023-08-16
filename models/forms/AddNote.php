<?php

namespace app\models\forms;

use Yii;
use app\models\FileLink;
use app\models\Notes;
use app\models\NotesLink;
use app\models\File;
use yii\base\Model;

class AddNote extends Model {

    public $id;
    public $model;
    public $message;

    public function __construct($id, $model){
        $this->id = $id;
        $this->model = $model;
    }

    public function add(){
        $model = new Notes();

        $model->author_id =  Yii::$app->user->id;
        $model->message = $this->message;
        $model->date = time();

        if($model->save()){
            $this->add_notes_link($model);
        }
        return $model;
    }

    private function add_notes_link($model){
        $link = new NotesLink();
        $link->note_id = $model->id;
        $link->model = $this->model;
        $link->model_id = $this->id;
        $link->save();
    }

    public function rules(){
        return [
            [['message'], 'safe'],
        ];
    }
}