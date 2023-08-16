<?php
namespace app\controllers;

use Yii;
use app\models\User;
use app\models\Floor;
use app\models\Home;
use app\models\Objects;
use app\models\Entrance;
use yii\filters\VerbFilter;
use yii\web\Controller;
use yii\filters\AccessControl;

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
        $home = Home::findOne($entrance->home_id);
        $object = Objects::findOne($entrance->object_id);
        $floors = Floor::find()->where(['home_id' => $entrance->home_id, 'object_id' => $entrance->object_id, 'entrance_id' => $id])->all();

        return $this->render('index', compact('entrance','home', 'object', 'floors', 'id'));
    }
}