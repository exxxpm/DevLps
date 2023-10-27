<?php
namespace app\controllers;

use Yii;
use app\models\FileLink;
use app\models\forms\AddFile;
use app\models\forms\AddNote;
use app\models\NotesLink;
use app\models\User;
use app\models\Entrance;
use yii\web\Controller;
use \app\models\Home;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

class HomeController extends Controller{

    public $layout = 'home_info';

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
        $this->view->title = 'Создание дома';
        $this->view->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width,initial-scale=1.0,  shrink-to-fit=no']);
        $this->layout = 'edit';

        $id = Yii::$app->request->get('id');
        $user = User::findOne(Yii::$app->user->id);
        $home = new Home();

        if ($home->load(Yii::$app->request->post())) {
            if ($home->validate() && $home->add_home($id)) {
                return $this->refresh();
            }
        }

        return $this->render('add', compact('home',  'id', 'user'));
    }

    public function actionEdit(){
        $this->view->title = 'Редактирование дома';
        $this->view->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width,initial-scale=1.0,  shrink-to-fit=no']);
        $this->layout = 'edit';

        $id = Yii::$app->request->get('id');
        $home = Home::findOne($id);
        $user = User::findOne($home->author_id);

        if ($home->load(Yii::$app->request->post())) {
            if ($home->validate() && $home->edit_home($id)) {
                return $this->refresh();
            }
        }

        return $this->render('edit', compact('home',  'id', 'user'));
    }

    public function actionIndex(){
        $this->view->title = 'Дом';
        $this->view->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width,initial-scale=1.0,  shrink-to-fit=no']);


        $id = Yii::$app->request->get('id');
        $home = Home::findOne($id);
        $entrances = Entrance::find()->where(['home_id' => $home->id, 'object_id' => $home->object_id])->all();

        return $this->render('index', compact('home', 'entrances', 'id'));
    }

    public function actionInfo(){
        $this->view->title = 'Дом';
        $this->view->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width,initial-scale=1.0,  shrink-to-fit=no']);


        $id = Yii::$app->request->get('id');
        $user = User::findOne(Yii::$app->user->id);
        $home = Home::findOne($id);
        $files = FileLink::find()->where(['model_id' => $id, 'model' => 'home'])->orderBy(['id' => SORT_DESC])->all();

        $add_file = new AddFile($id, "home");

        if ($add_file->load(Yii::$app->request->post())) {
            $add_file->file = UploadedFile::getInstances($add_file, 'file');
            $add_file->add($home);
            return $this->refresh();
        }

        return $this->render('info', compact('home', 'id', 'user', 'add_file', 'files'));
    }

    public function actionTasks(){
        $this->view->title = 'Дом';
        $this->view->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width,initial-scale=1.0,  shrink-to-fit=no']);


        $id = Yii::$app->request->get('id');
        $home = Home::findOne($id);
        return $this->render('task', compact('home','id'));
    }

    public function actionWorkSchedule(){
        $this->view->title = 'Дом';
        $this->view->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width,initial-scale=1.0,  shrink-to-fit=no']);


        $id = Yii::$app->request->get('id');
        $home = Home::findOne($id);
        return $this->render('work_schedule', compact('home', 'id'));
    }

    public function actionNotes(){
        $this->view->title = 'Дом';
        $this->view->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width,initial-scale=1.0,  shrink-to-fit=no']);

        $id = Yii::$app->request->get('id');
        $home = Home::findOne($id);
        $notes = NotesLink::find()->where(['model_id' => $id, 'model' => 'home'])->orderBy(['id' => SORT_DESC])->all();
        $user = User::findOne(Yii::$app->user->id);

        $add_form = new AddNote($id, "home");
        $add_file = new AddFile($id, "notes");

        if ($add_form->load(Yii::$app->request->post()) && $add_file->load(Yii::$app->request->post())) {
            $add_file->file = UploadedFile::getInstances($add_file, 'file');
            $add_file->add($add_form->add());
            return $this->refresh();
        }

        return $this->render('notes', compact('home', 'id', 'notes', 'add_form', 'add_file', 'user'));
    }

}