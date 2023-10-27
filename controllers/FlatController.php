<?php
namespace app\controllers;

use Yii;
use app\models\FileLink;
use app\models\forms\AddFile;
use app\models\forms\AddNote;
use app\models\NotesLink;
use app\models\User;
use app\models\Flat;
use app\models\Floor;
use app\models\Room;
use app\models\Objects;
use yii\filters\VerbFilter;
use yii\web\Controller;
use yii\filters\AccessControl;
use yii\web\UploadedFile;

class FlatController extends Controller{

    public function behaviors(){
        return [
            'access' => [
                'class' => AccessControl::class,
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
                'denyCallback' => function () {
                    return Yii::$app->response->redirect(['/login/index']);
                },
            ],
        ];
    }

    public function actionAdd(){
        $this->view->title = 'Создание квартиры';
        $this->view->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width,initial-scale=1.0,  shrink-to-fit=no']);
        $this->layout = 'edit';

        $id = Yii::$app->request->get('id');
        $user = User::findOne(Yii::$app->user->id);
        $flat = new Flat();
        $floor = Floor::findOne($id);

        if ($flat->load(Yii::$app->request->post())) {
            if ($flat->validate() && $flat->add_flat($id, $floor)) {
                return $this->refresh();
            }
        }

        return $this->render('add', compact('flat',  'id', 'user'));
    }
    public function actionEdit(){

        $this->view->title = 'Редактирование квартиры';
        $this->view->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width,initial-scale=1.0,  shrink-to-fit=no']);
        $this->layout = 'edit';

        $id = Yii::$app->request->get('id');
        $flat = Flat::findOne($id);
        $user = User::findOne($flat->author_id);

        if ($flat->load(Yii::$app->request->post())) {
            if ($flat->validate() && $flat->edit_flat()) {
                return $this->refresh();
            }
        }

        return $this->render('edit', compact('flat',  'id', 'user'));
    }
    public function actionIndex(){
        $this->view->title = 'Квартира';
        $this->view->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width,initial-scale=1.0,  shrink-to-fit=no']);

        $id = Yii::$app->request->get('id');
        $flat = Flat::findOne($id);
        $rooms = Room::find()->where(['home_id' => $flat->home_id, 'object_id' => $flat->object_id, 'entrance_id' => $flat->entrance_id, 'floor_id' => $flat->floor_id, 'flat_id' => $id])->all();

        return $this->render('index', compact('flat', 'rooms', 'id'));
    }

    public function actionInfo(){
        $this->view->title = 'Квартира';
        $this->view->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width,initial-scale=1.0,  shrink-to-fit=no']);


        $id = Yii::$app->request->get('id');
        $user = User::findOne(Yii::$app->user->id);
        $flat = Flat::findOne($id);
        $files = FileLink::find()->where(['model_id' => $id, 'model' => 'flat'])->orderBy(['id' => SORT_DESC])->all();

        $add_file = new AddFile($id, "flat");

        if ($add_file->load(Yii::$app->request->post())) {
            $add_file->file = UploadedFile::getInstances($add_file, 'file');
            $add_file->add($flat);
            return $this->refresh();
        }

        return $this->render('info', compact( 'flat', 'id', 'user', 'add_file', 'files'));
    }

    public function actionDetailInfo(){
        $this->view->title = 'Квартира';
        $this->view->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width,initial-scale=1.0,  shrink-to-fit=no']);
        $this->layout = 'detail_info';

        $id = Yii::$app->request->get('id');
        $user = User::findOne(Yii::$app->user->id);
        $flat = Flat::findOne($id);
        $rooms = Room::find()->where(['home_id' => $flat->home_id, 'object_id' => $flat->object_id, 'entrance_id' => $flat->entrance_id, 'floor_id' => $flat->floor_id, 'flat_id' => $id])->all();

        return $this->render('detail_info', compact( 'flat', 'id', 'rooms'));
    }

    public function actionTasks(){
        $this->view->title = 'Квартира';
        $this->view->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width,initial-scale=1.0,  shrink-to-fit=no']);


        $id = Yii::$app->request->get('id');
        $flat = Flat::findOne($id);
        return $this->render('task', compact('flat', 'id'));
    }

    public function actionWorkSchedule(){
        $this->view->title = 'Квартира';
        $this->view->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width,initial-scale=1.0,  shrink-to-fit=no']);


        $id = Yii::$app->request->get('id');
        $flat = Flat::findOne($id);
        return $this->render('work_schedule', compact( 'flat', 'id'));
    }

    public function actionNotes(){
        $this->view->title = 'Квартира';
        $this->view->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width,initial-scale=1.0,  shrink-to-fit=no']);

        $id = Yii::$app->request->get('id');
        $flat = Flat::findOne($id);
        $notes = NotesLink::find()->where(['model_id' => $id, 'model' => 'flat'])->orderBy(['id' => SORT_DESC])->all();
        $user = User::findOne(Yii::$app->user->id);

        $add_form = new AddNote($id, "flat");
        $add_file = new AddFile($id, "notes");

        if ($add_form->load(Yii::$app->request->post()) && $add_file->load(Yii::$app->request->post())) {
            $add_file->file = UploadedFile::getInstances($add_file, 'file');
            $add_file->add($add_form->add());
            return $this->refresh();
        }

        return $this->render('notes', compact('flat', 'id', 'notes', 'add_form', 'add_file', 'user'));
    }

}