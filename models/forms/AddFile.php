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
            [['file'], 'file', 'skipOnEmpty' => false, 'maxFiles' => 10000],
        ];
    }

    public function add($model){
        foreach ($this->file as $files_item) {
            $files = new File();
            $uploadPath = 'uploads/' . date('Y') . '/' . date('m');
            $fullPath = $uploadPath . '/' . $files_item->baseName . '.' . $files_item->extension;

            $files->name = $files_item->baseName.'.'.$files_item->extension;
            $files->path = $fullPath;

            if($files->save()){
                $this->add_files_link($model, $files);
                $this->upload($files_item);
            }
        }
    }

    private function add_files_link($model, $files){
        $link = new FileLink();
        $link->file_id = $files->id;
        $link->model = $this->model;
        $link->model_id = $model->id;
        $link->save();
    }

    public function upload($files_item) {
        if ($this->validate()) {
            $uploadPath = 'uploads/' . date('Y') . '/' . date('m');
            $fullPath = $uploadPath . '/' . $files_item->baseName . '.' . $files_item->extension;

            if (!file_exists($uploadPath)) {
                FileHelper::createDirectory($uploadPath, 0775, true);
            }

            $files_item->saveAs($fullPath);
            return true;
        } else {
            return false;
        }
    }
}
