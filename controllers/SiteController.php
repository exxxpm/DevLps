<?php
namespace app\controllers;

use Yii;
use app\models\FileLink;
use app\models\forms\AddUser;
use app\models\User;
use app\models\forms\AddFile;
use app\models\forms\AddNote;
use app\models\Home;
use app\models\NotesLink;
use app\models\Objects;
use app\models\Status;
use yii\data\ActiveDataProvider;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;
use yii\web\UploadedFile;

class SiteController extends Controller{

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
    public function actionIndex(){
        $this->view->title = 'Объекты';
        $this->view->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width,initial-scale=1.0,  shrink-to-fit=no']);

        $query = Objects::find();

        if (Yii::$app->request->get('status') && Yii::$app->request->get('status') != 1) {
            $query->andWhere(['status_id' => Yii::$app->request->get('status')]);
        }

        if (Yii::$app->request->get('sort')) {
            $query->orderBy([Yii::$app->request->get('sort') => SORT_ASC]);
        }

        $provider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 10,
            ],
            'sort' => [
            ],
        ]);

        $status = Status::find()->all();
        $objects = $provider->getModels();
        $total_count = $provider->getTotalCount();

        return $this->render('index', compact('objects', 'status', 'total_count'));
    }

    public function actionObject(){
        $this->view->title = 'Объект';
        $this->view->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width,initial-scale=1.0,  shrink-to-fit=no']);


        $id = Yii::$app->request->get('id');
        $object = Objects::findOne($id);
        $homes = Home::find()->where(['object_id' => $id])->all();
        return $this->render('object', compact('object', 'id', 'homes'));
    }

    public function actionInfo(){
        $this->view->title = 'Объект';
        $this->view->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width,initial-scale=1.0,  shrink-to-fit=no']);


        $id = Yii::$app->request->get('id');
        $user = User::findOne(Yii::$app->user->id);
        $object = Objects::findOne($id);
        $files = FileLink::find()->where(['model_id' => $id, 'model' => 'object'])->orderBy(['id' => SORT_DESC])->all();

        $add_file = new AddFile($id, "object");

        if ($add_file->load(Yii::$app->request->post())) {
            $add_file->file = UploadedFile::getInstances($add_file, 'file');
            $add_file->add($object);
            return $this->refresh();
        }

        return $this->render('info', compact('object', 'id', 'user', 'add_file', 'files'));
    }

    public function actionTasks(){
        $this->view->title = 'Объект';
        $this->view->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width,initial-scale=1.0,  shrink-to-fit=no']);


        $id = Yii::$app->request->get('id');
        $object = Objects::findOne($id);
        return $this->render('task', compact('object', 'id'));
    }

    public function actionWorkSchedule(){
        $this->view->title = 'Объект';
        $this->view->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width,initial-scale=1.0,  shrink-to-fit=no']);


        $id = Yii::$app->request->get('id');
        $object = Objects::findOne($id);
        return $this->render('work_schedule', compact('object', 'id'));
    }

    public function actionNotes(){
        $this->view->title = 'Объект';
        $this->view->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width,initial-scale=1.0,  shrink-to-fit=no']);

        $id = Yii::$app->request->get('id');
        $object = Objects::findOne($id);
        $notes = NotesLink::find()->where(['model_id' => $id, 'model' => 'object'])->orderBy(['id' => SORT_DESC])->all();
        $user = User::findOne(Yii::$app->user->id);

        $add_form = new AddNote($id, "object");
        $add_file = new AddFile($id, "notes");

        if ($add_form->load(Yii::$app->request->post()) && $add_file->load(Yii::$app->request->post())) {
            $add_file->file = UploadedFile::getInstances($add_file, 'file');
            $add_file->add($add_form->add());
            return $this->refresh();
        }

        return $this->render('notes', compact('object', 'id', 'notes', 'add_form', 'add_file', 'user'));
    }

    public function actionAdd(){
        $this->view->title = 'Создание объекта';
        $this->view->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width,initial-scale=1.0,  shrink-to-fit=no']);
        $this->layout = 'edit';

        $id = Yii::$app->request->get('id');
        $user = User::findOne(Yii::$app->user->id);
        $object = new Objects();

        if ($object->load(Yii::$app->request->post())) {
            if ($object->validate() && $object->add_object()) {
                return $this->refresh();
            }else {
                Yii::$app->getSession()->setFlash('error', 'Ошибка валидации');
            }
        }

        return $this->render('add', compact('object',  'id', 'user'));
    }

    public function actionEdit(){
        $this->view->title = 'Редактирование объекта';
        $this->view->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width,initial-scale=1.0,  shrink-to-fit=no']);
        $this->layout = 'edit';

        $id = Yii::$app->request->get('id');
        $object = Objects::findOne($id);
        $user = User::findOne($object->author_id);

        if ($object->load(Yii::$app->request->post())) {
            if ($object->validate() && $object->edit_object()) {
                return $this->refresh();
            }else {
                Yii::$app->getSession()->setFlash('error', 'Ошибка валидации');
            }
        }

        return $this->render('edit', compact('object',  'id', 'user'));
    }
}


