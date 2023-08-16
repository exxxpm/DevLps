<?php
namespace app\controllers;

use Yii;
use app\models\User;
use app\models\Entrance;
use app\models\Flat;
use app\models\Floor;
use app\models\Home;
use app\models\Objects;
use app\models\Room;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;

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
            if ($room->validate() && $room->add_room($id, $flat)) {
                return $this->refresh();
            }
        }

        return $this->render('add', compact('room',  'id', 'user'));
    }
    public function actionEdit(){

        $this->view->title = 'Редактирование помещения';
        $this->view->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width,initial-scale=1.0,  shrink-to-fit=no']);
        $this->layout = 'edit';

        $id = Yii::$app->request->get('id');
        $user = User::findOne(Yii::$app->user->id);
        $room = Room::findOne($id);

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
        $flat = Flat::findOne($room->flat_id);
        $floor = Floor::findOne($room->floor_id);
        $entrance = Entrance::findOne($room->entrance_id);
        $home = Home::findOne($room->home_id);
        $object = Objects::findOne($room->object_id);
        //$tasks = Room::find()->where(['home_id' => $flat->home_id, 'object_id' => $flat->object_id, 'entrance_id' => $flat->entrance_id, 'floor_id' => $flat->floor_id, 'flat_id' => $flat->floor_id])->all();

        return $this->render('index', compact('floor','entrance', 'home', 'object', 'flat', 'room', 'id'));
    }
}