<?php

namespace app\models;
use yii\base\Model;
use app\models\File;
use yii\helpers\FileHelper;
class SaveFile extends Model {
    public $file;

    public function __construct($file, $config = []){
        $this->file = $file;
        parent::__construct($config);
    }

    private function getFullPath(){
        $uploadPath = 'uploads/' . date('Y') . '/' . date('m');
        $fullPath = $uploadPath . '/' . $this->file->baseName . '.' . $this->file->extension;
        return ['uploadPath' => $uploadPath, 'fullPath' => $fullPath];
    }

    public function addFile(){
        $file = new File();
        $path = $this->getFullPath();

        $file->name = $this->file->baseName . '.' . $this->file->extension;
        $file->path = $path['fullPath'];

        if ($file->save()) {
            $this->uploadFile($path);
        }

        return $file;
    }

    public function uploadFile($path){
        if (!file_exists($path['uploadPath'])) {
            FileHelper::createDirectory($path['uploadPath'], 0775, true);
        }
        $this->file->saveAs($path['fullPath']);
    }
}