<?php

namespace app\models\forms;

use app\models\File;
use app\models\FileLink;
use yii\base\Model;
use yii\web\UploadedFile;
use yii\helpers\FileHelper;

class AddFile extends Model {
    public $file;
    public $id;
    public $model;

    public function __construct($id, $model){
        $this->id = $id;
        $this->model = $model;
    }

    public function rules() {
        return [
            [['file'], 'file', 'skipOnEmpty' => false],
        ];
    }

    public function add($model){
        $files = new File();
        $uploadPath = 'uploads/' . date('Y') . '/' . date('m');
        $fullPath = $uploadPath . '/' . $this->file->baseName . '.' . $this->file->extension;

        $files->name = $this->file->baseName.'.'.$this->file->extension;
        $files->path = $fullPath;

        if($files->save()){
            $this->add_files_link($model, $files);
            $this->upload();
        }
    }

    private function add_files_link($model, $files){
        $link = new FileLink();
        $link->file_id = $files->id;
        $link->model = $this->model;
        $link->model_id = $model->id;
        $link->save();
    }

    public function upload() {
        if ($this->validate()) {
            $uploadPath = 'uploads/' . date('Y') . '/' . date('m');
            $fullPath = $uploadPath . '/' . $this->file->baseName . '.' . $this->file->extension;

            if (!file_exists($uploadPath)) {
                FileHelper::createDirectory($uploadPath, 0775, true);
            }

            $this->file->saveAs($fullPath);
            return true;
        } else {
            return false;
        }
    }
}
