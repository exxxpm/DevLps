<?php

namespace app\controllers;

use app\models\forms\AddFile;
use app\models\forms\AddNote;
use app\models\NotesLink;
use app\models\Objects;
use app\models\Status;
use Yii;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\UploadedFile;

class SiteController extends Controller
{
    public function actionIndex()
    {
        $this->view->title = 'Объекты';
        $this->view->registerCsrfMetaTags();
        $this->view->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
        $this->view->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width,initial-scale=1.0,  shrink-to-fit=no']);
        $this->view->registerMetaTag(['name' => 'description', 'content' => 'О чем страница']);
        $this->view->registerMetaTag(['name' => 'keywords', 'content' => '']);

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

    public function actionObject()
    {
        $this->view->title = 'Объект';
        $this->view->registerCsrfMetaTags();
        $this->view->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
        $this->view->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width,initial-scale=1.0,  shrink-to-fit=no']);
        $this->view->registerMetaTag(['name' => 'description', 'content' => 'О чем страница']);
        $this->view->registerMetaTag(['name' => 'keywords', 'content' => '']);


        $id = Yii::$app->request->get('id');
        $object = Objects::findOne($id);
        return $this->render('object', compact('object', 'id'));
    }

    public function actionInfo()
    {
        $this->view->title = 'Объект';
        $this->view->registerCsrfMetaTags();
        $this->view->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
        $this->view->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width,initial-scale=1.0,  shrink-to-fit=no']);
        $this->view->registerMetaTag(['name' => 'description', 'content' => 'О чем страница']);
        $this->view->registerMetaTag(['name' => 'keywords', 'content' => '']);


        $id = Yii::$app->request->get('id');
        $object = Objects::findOne($id);
        return $this->render('info', compact('object', 'id'));
    }

    public function actionTasks()
    {
        $this->view->title = 'Объект';
        $this->view->registerCsrfMetaTags();
        $this->view->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
        $this->view->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width,initial-scale=1.0,  shrink-to-fit=no']);
        $this->view->registerMetaTag(['name' => 'description', 'content' => 'О чем страница']);
        $this->view->registerMetaTag(['name' => 'keywords', 'content' => '']);


        $id = Yii::$app->request->get('id');
        $object = Objects::findOne($id);
        return $this->render('task', compact('object', 'id'));
    }

    public function actionWorkSchedule()
    {
        $this->view->title = 'Объект';
        $this->view->registerCsrfMetaTags();
        $this->view->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
        $this->view->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width,initial-scale=1.0,  shrink-to-fit=no']);
        $this->view->registerMetaTag(['name' => 'description', 'content' => 'О чем страница']);
        $this->view->registerMetaTag(['name' => 'keywords', 'content' => '']);


        $id = Yii::$app->request->get('id');
        $object = Objects::findOne($id);
        return $this->render('work_schedule', compact('object', 'id'));
    }

    public function actionNotes()
    {
        $this->view->title = 'Объект';
        $this->view->registerCsrfMetaTags();
        $this->view->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
        $this->view->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width,initial-scale=1.0,  shrink-to-fit=no']);
        $this->view->registerMetaTag(['name' => 'description', 'content' => 'О чем страница']);
        $this->view->registerMetaTag(['name' => 'keywords', 'content' => '']);

        $id = Yii::$app->request->get('id');
        $object = Objects::findOne($id);
        $notes = NotesLink::find()->where(['model_id' => $id, 'model' => 'object'])->orderBy(['id' => SORT_DESC])->all();

        $add_form = new AddNote($id, "object");
        $add_file = new AddFile($id, "notes");

        if ($add_form->load(Yii::$app->request->post()) && $add_file->load(Yii::$app->request->post())) {
            $add_file->file = UploadedFile::getInstances($add_file, 'file');
            $add_file->add($add_form->add());
            return $this->refresh();
        }

        return $this->render('notes', compact('object', 'id', 'notes', 'add_form', 'add_file'));
    }

    public function actionEdit()
    {
        $this->view->title = 'Редактирование объекта';
        $this->view->registerCsrfMetaTags();
        $this->view->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
        $this->view->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width,initial-scale=1.0,  shrink-to-fit=no']);
        $this->view->registerMetaTag(['name' => 'description', 'content' => 'О чем страница']);
        $this->view->registerMetaTag(['name' => 'keywords', 'content' => '']);
        $this->layout = 'edit';

        $id = Yii::$app->request->get('id');
        $object = Objects::findOne($id);

        if ($object->load(Yii::$app->request->post())) {
            if($object->edit()) {
                return $this->refresh();
            }
        }

        return $this->render('edit', compact('object',  'id'));
    }

}
