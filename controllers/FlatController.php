<?php
namespace app\controllers;

use Yii;
use app\models\Entrance;
use app\models\Flat;
use app\models\Floor;
use app\models\Home;
use app\models\Room;
use app\models\Objects;
use yii\filters\VerbFilter;
use yii\web\Controller;
use yii\filters\AccessControl;

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
        $flat = new Flat();
        $floor = Floor::findOne($id);

        if ($flat->load(Yii::$app->request->post())) {
            if ($flat->validate() && $flat->add_flat($id, $floor)) {
                return $this->refresh();
            }
        }

        return $this->render('add', compact('flat',  'id'));
    }
    public function actionEdit(){

        $this->view->title = 'Редактирование квартиры';
        $this->view->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width,initial-scale=1.0,  shrink-to-fit=no']);
        $this->layout = 'edit';

        $id = Yii::$app->request->get('id');
        $flat = Flat::findOne($id);

        if ($flat->load(Yii::$app->request->post())) {
            if ($flat->validate() && $flat->edit_flat()) {
                return $this->refresh();
            }
        }

        return $this->render('edit', compact('flat',  'id'));
    }
    public function actionIndex(){
        $this->view->title = 'Квартира';
        $this->view->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width,initial-scale=1.0,  shrink-to-fit=no']);

        $id = Yii::$app->request->get('id');
        $flat = Flat::findOne($id);
        $floor = Floor::findOne($flat->floor_id);
        $entrance = Entrance::findOne($flat->entrance_id);
        $home = Home::findOne($flat->home_id);
        $object = Objects::findOne($flat->object_id);
        $rooms = Room::find()->where(['home_id' => $flat->home_id, 'object_id' => $flat->object_id, 'entrance_id' => $flat->entrance_id, 'floor_id' => $flat->floor_id, 'flat_id' => $id])->all();

        return $this->render('index', compact('floor','entrance', 'home', 'object', 'flat', 'rooms', 'id'));
    }

}