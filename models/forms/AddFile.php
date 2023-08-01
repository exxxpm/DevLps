<?php

namespace app\models\forms;

use app\models\File;
use app\models\FileLink;
use yii\base\Model;
use yii\helpers\FileHelper;

class AddFile extends Model
{
    public $file;
    public $id;
    public $model;

    public function __construct($id, $model)
    {
        $this->id = $id;
        $this->model = $model;
    }

    public function rules()
    {
        return [
            [['file'], 'file', 'skipOnEmpty' => false, 'maxFiles' => 10000],
        ];
    }

    public function add($model)
    {
        foreach ($this->file as $files_item) {
            $files = new File();
            $path = $this->get_full_path($files_item);

            $files->name = $files_item->baseName . '.' . $files_item->extension;
            $files->path = $path['fullPath'];

            if ($files->save()) {
                $this->add_files_link($model, $files);
                $this->upload($files_item, $path);
            }
        }
    }

    private function get_full_path($files_item)
    {
        $uploadPath = 'uploads/' . date('Y') . '/' . date('m');
        $fullPath = $uploadPath . '/' . $files_item->baseName . '.' . $files_item->extension;
        return ['uploadPath' => $uploadPath, 'fullPath' => $fullPath];
    }

    private function add_files_link($model, $files)
    {
        $link = new FileLink();
        $link->file_id = $files->id;
        $link->model = $this->model;
        $link->model_id = $model->id;
        $link->save();
    }

    public function upload($files_item, $path)
    {
        if ($this->validate()) {

            if (!file_exists($path['uploadPath'])) {
                FileHelper::createDirectory($uploadPath, 0775, true);
            }

            $files_item->saveAs($path['fullPath']);
            return true;
        } else {
            return false;
        }
    }
}
