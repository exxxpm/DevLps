<?php
namespace app\controllers;

use Yii;
use app\models\User;
use app\models\Entrance;
use app\models\Flat;
use app\models\Floor;
use app\models\Home;
use app\models\Objects;
use yii\filters\VerbFilter;
use yii\web\Controller;
use yii\filters\AccessControl;
use yii\web\UploadedFile;
use app\models\FileLink;
use app\models\forms\AddFile;
use app\models\forms\AddNote;
use app\models\NotesLink;

class FloorController extends Controller{

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
        $this->view->title = 'Создание этажа';
        $this->view->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width,initial-scale=1.0,  shrink-to-fit=no']);
        $this->layout = 'edit';

        $id = Yii::$app->request->get('id');
        $user = User::findOne(Yii::$app->user->id);
        $floor = new Floor();
        $entrance = Entrance::findOne($id);

        if ($floor->load(Yii::$app->request->post())) {
            if ($floor->validate() && $floor->add_floor($id, $entrance)) {
                return $this->refresh();
            }
        }

        return $this->render('add', compact('floor',  'id', 'user'));
    }
    public function actionEdit(){

        $this->view->title = 'Редактирование этажа';
        $this->view->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width,initial-scale=1.0,  shrink-to-fit=no']);
        $this->layout = 'edit';

        $id = Yii::$app->request->get('id');
        $user = User::findOne(Yii::$app->user->id);
        $floor = Floor::findOne($id);

        if ($floor->load(Yii::$app->request->post())) {
            if ($floor->validate() && $floor->edit_floor()) {
                return $this->refresh();
            }
        }

        return $this->render('edit', compact('floor',  'id', 'user'));
    }
    public function actionIndex(){
        $this->view->title = 'Этаж';
        $this->view->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width,initial-scale=1.0,  shrink-to-fit=no']);

        $id = Yii::$app->request->get('id');
        $floor = Floor::findOne($id);
        $entrance = Entrance::findOne($floor->entrance_id);
        $home = Home::findOne($floor->home_id);
        $object = Objects::findOne($floor->object_id);
        $flats = Flat::find()->where(['home_id' => $floor->home_id, 'object_id' => $floor->object_id, 'entrance_id' => $floor->entrance_id, 'floor_id' => $id])->all();

        return $this->render('index', compact('floor','entrance', 'home', 'object', 'flats', 'id'));
    }

    public function actionInfo(){
        $this->view->title = 'Этаж';
        $this->view->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width,initial-scale=1.0,  shrink-to-fit=no']);


        $id = Yii::$app->request->get('id');
        $user = User::findOne(Yii::$app->user->id);
        $floor = Floor::findOne($id);
        $entrance = Entrance::findOne($floor->entrance_id);
        $home = Home::findOne($floor->home_id);
        $object = Objects::findOne($floor->object_id);
        $files = FileLink::find()->where(['model_id' => $id, 'model' => 'floor'])->orderBy(['id' => SORT_DESC])->all();

        $add_file = new AddFile($id, "floor");

        if ($add_file->load(Yii::$app->request->post())) {
            $add_file->file = UploadedFile::getInstances($add_file, 'file');
            $add_file->add($floor);
            return $this->refresh();
        }

        return $this->render('info', compact('floor','entrance', 'home', 'object', 'id', 'user', 'add_file', 'files'));
    }

    public function actionTasks(){
        $this->view->title = 'Этаж';
        $this->view->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width,initial-scale=1.0,  shrink-to-fit=no']);


        $id = Yii::$app->request->get('id');
        $floor = Floor::findOne($id);
        $entrance = Entrance::findOne($floor->entrance_id);
        $home = Home::findOne($floor->home_id);
        $object = Objects::findOne($floor->object_id);
        return $this->render('task', compact('floor','entrance', 'home', 'object','id'));
    }

    public function actionWorkSchedule(){
        $this->view->title = 'Этаж';
        $this->view->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width,initial-scale=1.0,  shrink-to-fit=no']);


        $id = Yii::$app->request->get('id');
        $floor = Floor::findOne($id);
        $entrance = Entrance::findOne($floor->entrance_id);
        $home = Home::findOne($floor->home_id);
        $object = Objects::findOne($floor->object_id);
        return $this->render('work_schedule', compact('floor','entrance', 'home', 'object', 'id'));
    }

    public function actionNotes(){
        $this->view->title = 'Этаж';
        $this->view->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width,initial-scale=1.0,  shrink-to-fit=no']);

        $id = Yii::$app->request->get('id');
        $floor = Floor::findOne($id);
        $entrance = Entrance::findOne($floor->entrance_id);
        $home = Home::findOne($floor->home_id);
        $object = Objects::findOne($floor->object_id);
        $notes = NotesLink::find()->where(['model_id' => $id, 'model' => 'floor'])->orderBy(['id' => SORT_DESC])->all();

        $add_form = new AddNote($id, "floor");
        $add_file = new AddFile($id, "notes");

        if ($add_form->load(Yii::$app->request->post()) && $add_file->load(Yii::$app->request->post())) {
            $add_file->file = UploadedFile::getInstances($add_file, 'file');
            $add_file->add($add_form->add());
            return $this->refresh();
        }

        return $this->render('notes', compact('floor','entrance', 'home', 'object', 'id', 'notes', 'add_form', 'add_file'));
    }
}