<?php
namespace app\controllers;

use Yii;
use app\models\FileLink;
use app\models\forms\AddFile;
use app\models\forms\AddNote;
use app\models\NotesLink;
use app\models\User;
use app\models\Floor;
use app\models\Entrance;
use yii\filters\VerbFilter;
use yii\web\Controller;
use yii\filters\AccessControl;
use yii\web\UploadedFile;

class EntranceController extends Controller{

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

    public $layout = 'home_info';
    public function actionAdd(){
        $this->view->title = 'Создание подъезда';
        $this->view->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width,initial-scale=1.0,  shrink-to-fit=no']);
        $this->layout = 'edit';

        $id = Yii::$app->request->get('id');
        $user = User::findOne(Yii::$app->user->id);
        $entrance = new Entrance();
        $home = Home::findOne($id);

        if ($entrance->load(Yii::$app->request->post())) {
            if ($entrance->validate() && $entrance->add_entrance($id, $home)) {
                return $this->refresh();
            }
        }

        return $this->render('add', compact('entrance',  'id', 'user'));
    }

    public function actionEdit(){
        $this->view->title = 'Редактирование подъезда';
        $this->view->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width,initial-scale=1.0,  shrink-to-fit=no']);
        $this->layout = 'edit';

        $id = Yii::$app->request->get('id');
        $user = User::findOne(Yii::$app->user->id);
        $entrance = Entrance::findOne($id);

        if ($entrance->load(Yii::$app->request->post())) {
            if ($entrance->validate() && $entrance->edit_entrance()) {
                return $this->refresh();
            }
        }

        return $this->render('edit', compact('entrance',  'id', 'user'));
    }

    public function actionIndex(){
        $this->view->title = 'Подъезд';
        $this->view->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width,initial-scale=1.0,  shrink-to-fit=no']);

        $id = Yii::$app->request->get('id');
        $entrance = Entrance::findOne($id);
        $floors = Floor::find()->where(['home_id' => $entrance->home_id, 'object_id' => $entrance->object_id, 'entrance_id' => $id])->all();

        return $this->render('index', compact('entrance', 'floors', 'id'));
    }

    public function actionInfo(){
        $this->view->title = 'Подъезд';
        $this->view->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width,initial-scale=1.0,  shrink-to-fit=no']);


        $id = Yii::$app->request->get('id');
        $user = User::findOne(Yii::$app->user->id);
        $entrance = Entrance::findOne($id);
        $files = FileLink::find()->where(['model_id' => $id, 'model' => 'entrance'])->orderBy(['id' => SORT_DESC])->all();

        $add_file = new AddFile($id, "entrance");

        if ($add_file->load(Yii::$app->request->post())) {
            $add_file->file = UploadedFile::getInstances($add_file, 'file');
            $add_file->add($entrance);
            return $this->refresh();
        }

        return $this->render('info', compact('entrance', 'id', 'user', 'add_file', 'files'));
    }

    public function actionShahmatka(){
        $this->view->title = 'Подъезд';
        $this->view->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width,initial-scale=1.0,  shrink-to-fit=no']);


        $id = Yii::$app->request->get('id');
        $entrance = Entrance::findOne($id);
        return $this->render('task', compact('entrance','id'));
    }

    public function actionTasks(){
        $this->view->title = 'Подъезд';
        $this->view->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width,initial-scale=1.0,  shrink-to-fit=no']);


        $id = Yii::$app->request->get('id');
        $entrance = Entrance::findOne($id);
        return $this->render('task', compact('entrance','id'));
    }

    public function actionWorkSchedule(){
        $this->view->title = 'Подъезд';
        $this->view->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width,initial-scale=1.0,  shrink-to-fit=no']);


        $id = Yii::$app->request->get('id');
        $entrance = Entrance::findOne($id);
        return $this->render('work_schedule', compact('entrance', 'id'));
    }

    public function actionNotes(){
        $this->view->title = 'Подъезд';
        $this->view->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width,initial-scale=1.0,  shrink-to-fit=no']);

        $id = Yii::$app->request->get('id');
        $entrance = Entrance::findOne($id);
        $notes = NotesLink::find()->where(['model_id' => $id, 'model' => 'entrance'])->orderBy(['id' => SORT_DESC])->all();

        $add_form = new AddNote($id, "entrance");
        $add_file = new AddFile($id, "notes");

        if ($add_form->load(Yii::$app->request->post()) && $add_file->load(Yii::$app->request->post())) {
            $add_file->file = UploadedFile::getInstances($add_file, 'file');
            $add_file->add($add_form->add());
            return $this->refresh();
        }

        return $this->render('notes', compact('entrance', 'id', 'notes', 'add_form', 'add_file'));
    }
}