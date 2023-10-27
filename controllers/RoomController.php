<?php
namespace app\controllers;

use Yii;
use app\models\FileLink;
use app\models\forms\AddFile;
use app\models\forms\AddNote;
use app\models\NotesLink;
use app\models\User;
use app\models\Flat;
use app\models\Room;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;
use yii\web\UploadedFile;

class RoomController extends Controller{

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
        $this->view->title = 'Создание помещение';
        $this->view->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width,initial-scale=1.0,  shrink-to-fit=no']);
        $this->layout = 'edit';

        $id = Yii::$app->request->get('id');
        $user = User::findOne(Yii::$app->user->id);
        $room = new Room();
        $flat = Flat::findOne($id);

        if ($room->load(Yii::$app->request->post())) {
            if ($room->validate() && $id_room = $room->add_room($id, $flat)) {
                return $this->redirect(['/room/edit/', 'id' => $id_room]);
            }
        }

        return $this->render('add', compact('room',  'id', 'user'));
    }
    public function actionEdit(){

        $this->view->title = 'Редактирование помещения';
        $this->view->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width,initial-scale=1.0,  shrink-to-fit=no']);
        $this->layout = 'edit';

        $id = Yii::$app->request->get('id');
        $room = Room::findOne($id);
        $user = User::findOne($room->author_id);

        if ($room->load(Yii::$app->request->post())) {
            if ($room->validate() && $room->edit_room()) {
                return $this->refresh();
            }
        }

        return $this->render('edit', compact('room',  'id', 'user'));
    }
    public function actionIndex(){
        $this->view->title = 'Помещение';
        $this->view->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width,initial-scale=1.0,  shrink-to-fit=no']);

        $id = Yii::$app->request->get('id');
        $room = Room::findOne($id);
        //$tasks = Room::find()->where(['home_id' => $flat->home_id, 'object_id' => $flat->object_id, 'entrance_id' => $flat->entrance_id, 'floor_id' => $flat->floor_id, 'flat_id' => $flat->floor_id])->all();

        return $this->render('index', compact('room', 'id'));
    }

    public function actionInfo(){
        $this->view->title = 'Этаж';
        $this->view->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width,initial-scale=1.0,  shrink-to-fit=no']);


        $id = Yii::$app->request->get('id');
        $user = User::findOne(Yii::$app->user->id);
        $room = Room::findOne($id);
        $files = FileLink::find()->where(['model_id' => $id, 'model' => 'room'])->orderBy(['id' => SORT_DESC])->all();

        $add_file = new AddFile($id, "room");

        if ($add_file->load(Yii::$app->request->post())) {
            $add_file->file = UploadedFile::getInstances($add_file, 'file');
            $add_file->add($room);
            return $this->refresh();
        }

        return $this->render('info', compact('room', 'id', 'user', 'add_file', 'files'));
    }

    public function actionTasks(){
        $this->view->title = 'Этаж';
        $this->view->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width,initial-scale=1.0,  shrink-to-fit=no']);


        $id = Yii::$app->request->get('id');
        $room = Room::findOne($id);
        return $this->render('task', compact( 'room', 'id'));
    }

    public function actionWorkSchedule(){
        $this->view->title = 'Этаж';
        $this->view->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width,initial-scale=1.0,  shrink-to-fit=no']);


        $id = Yii::$app->request->get('id');
        $room = Room::findOne($id);
        return $this->render('work_schedule', compact( 'room', 'id'));
    }

    public function actionNotes(){
        $this->view->title = 'Этаж';
        $this->view->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width,initial-scale=1.0,  shrink-to-fit=no']);

        $id = Yii::$app->request->get('id');
        $room = Room::findOne($id);
        $notes = NotesLink::find()->where(['model_id' => $id, 'model' => 'room'])->orderBy(['id' => SORT_DESC])->all();
        $user = User::findOne(Yii::$app->user->id);

        $add_form = new AddNote($id, "room");
        $add_file = new AddFile($id, "notes");

        if ($add_form->load(Yii::$app->request->post()) && $add_file->load(Yii::$app->request->post())) {
            $add_file->file = UploadedFile::getInstances($add_file, 'file');
            $add_file->add($add_form->add());
            return $this->refresh();
        }

        return $this->render('notes', compact('room', 'id', 'notes', 'add_form', 'add_file', 'user'));
    }

    public function actionPlan(){
        $this->view->title = 'Создание чертежа';
        $this->view->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width,initial-scale=1.0,  shrink-to-fit=no']);
        $this->layout = 'plan_loyout';

        $id = Yii::$app->request->get('id');

        return $this->render('plan', compact('id'));
    }
}