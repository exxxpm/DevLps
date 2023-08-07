<?php
namespace app\controllers;

use Yii;
use app\models\Entrance;
use app\models\Objects;
use yii\web\Controller;
use \app\models\Home;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;

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
        $home = new Home();

        if ($home->load(Yii::$app->request->post())) {
            if ($home->validate() && $home->change_home($id)) {
                return $this->refresh();
            }
        }

        return $this->render('add', compact('home',  'id'));
    }

    public function actionEdit(){
        $this->view->title = 'Редактирование дома';
        $this->view->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width,initial-scale=1.0,  shrink-to-fit=no']);
        $this->layout = 'edit';

        $id = Yii::$app->request->get('id');
        $home = Home::findOne($id);

        if ($home->load(Yii::$app->request->post())) {
            if ($home->validate() && $home->change_home($id)) {
                return $this->refresh();
            }
        }

        return $this->render('edit', compact('home',  'id'));
    }

    public function actionIndex(){
        $this->view->title = 'Дом';
        $this->view->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width,initial-scale=1.0,  shrink-to-fit=no']);


        $id = Yii::$app->request->get('id');
        $home = Home::findOne($id);
        $object = Objects::findOne($home->object_id);
        $entrances = Entrance::find()->where(['home_id' => $home->id, 'object_id' => $home->object_id])->all();

        return $this->render('index', compact('home', 'object', 'entrances', 'id'));
    }

}