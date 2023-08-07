<?php
namespace app\controllers;

use Yii;
use app\models\Entrance;
use app\models\Flat;
use app\models\Floor;
use app\models\Home;
use app\models\Objects;
use yii\filters\VerbFilter;
use yii\web\Controller;
use yii\filters\AccessControl;

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
        $floor = new Floor();
        $entrance = Entrance::findOne($id);

        if ($floor->load(Yii::$app->request->post())) {
            if ($floor->validate() && $floor->add_floor($id, $entrance)) {
                return $this->refresh();
            }
        }

        return $this->render('add', compact('floor',  'id'));
    }
    public function actionEdit(){

        $this->view->title = 'Редактирование этажа';
        $this->view->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width,initial-scale=1.0,  shrink-to-fit=no']);
        $this->layout = 'edit';

        $id = Yii::$app->request->get('id');
        $floor = Floor::findOne($id);

        if ($floor->load(Yii::$app->request->post())) {
            if ($floor->validate() && $floor->edit_floor()) {
                return $this->refresh();
            }
        }

        return $this->render('edit', compact('floor',  'id'));
    }
    public function actionIndex(){
        $this->view->title = 'Этаж';
        $this->view->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width,initial-scale=1.0,  shrink-to-fit=no']);

        $id = Yii::$app->request->get('id');
        $floor = Floor::findOne($id);
        $entrance = Entrance::findOne($floor->entrance_id);
        $home = Home::findOne($floor->home_id);
        $object = Objects::findOne($floor->object_id);
        $flats = Flat::find()->where(['home_id' => $floor->home_id, 'object_id' => $floor->object_id, 'entrance_id' => $floor->entrance_id])->all();

        return $this->render('index', compact('floor','entrance', 'home', 'object', 'flats', 'id'));
    }
}