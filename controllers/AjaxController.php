<?php
namespace app\controllers;

use Yii;
use yii\web\Response;
use yii\web\Controller;
use app\models\Entrance;
use app\models\Floor;
use app\models\FileLink;
use app\models\File;
use app\models\Flat;
use app\models\Home;
use app\models\Objects;
use app\models\Room;


class AjaxController extends Controller{
    public function beforeAction($action){
        if ($action->id === 'save-json') {
            $this->enableCsrfValidation = false;
        }

        return parent::beforeAction($action);
    }

    public function actionGenerator(){
        $model = Yii::$app->request->post('model');
        $id = Yii::$app->request->post('id');

        $html = $this->renderAjax('view_list/'.$model , compact('id'));
        return json_encode(['html' => $html,]);
    }

    public function actionDeleteFile(){
        $file_id = Yii::$app->request->post('id');
        $fileLink = FileLink::findOne(['file_id' => $file_id]);

        if ($fileLink) {
            $file = $fileLink->file;
            $fileLink->delete();
            $filePath = $fileLink->path;
                if (file_exists($filePath)) {
                    unlink($filePath);
                }
            if ($file) {
                $file->delete();
            } else {}
        } else {}
    }

    public function actionDeleteUserImg(){
        $file_id = Yii::$app->request->post('id');
        $file = File::findOne(['id' => $file_id]);

        if ($file) {
            $file_path = $file->path;
            $file->delete();
            if (file_exists($file_path)) {
                unlink($file_path);
            }
        } else {}
    }

    public function actionDelete(){
        $delete_arr = Yii::$app->request->post('arr');

        foreach ($delete_arr as $record){
            switch ($record['model']){
                case 'object':
                    $object = Objects::findOne($record['id']);
                    $object->delete();
                    break;
                case 'home':
                    $home = Home::findOne($record['id']);
                    $home->delete();
                    break;
                case 'entrance':
                    $entrance = Entrance::findOne($record['id']);
                    $entrance->delete();
                    break;
                case 'floor':
                    $floor = Floor::findOne($record['id']);
                    $floor->delete();
                    break;
                case 'flat':
                    $flat = Flat::findOne($record['id']);
                    $flat->delete();
                    break;
                case 'room':
                    $room = Room::findOne($record['id']);
                    $room->delete();
                    break;
            }
        }
    }

    public function actionUpdateStatus() {
        $object_id = Yii::$app->request->post('object_id');
        $status_id = Yii::$app->request->post('status_id');
        $object = Objects::findOne($object_id);

        if ($object) {
            $object->status_id = $status_id;
            $object->save();
            return 'Success';
        }
        return 'Error';
    }

    public function actionSaveJson(){
        $json_data = Yii::$app->request->post('json');
        $id = Yii::$app->request->post('id');

        $uploadPath = 'uploads/' . date('Y') . '/' . date('m');
        if (!is_dir($uploadPath)) {
            if (!mkdir($uploadPath, 0777, true) && !is_dir($uploadPath)) {
                return false;
            }
        }

        $randomFileName = Yii::$app->security->generateRandomString(8);
        $filePath = $uploadPath . '/' . $randomFileName . '.json';

        if (file_put_contents($filePath, json_encode($json_data, JSON_PRETTY_PRINT))) {
            $room = Room::findOne($id);
            $room->plan = $filePath;
            $room->save();
            return $filePath;
        } else {
            return false;
        }
    }

}