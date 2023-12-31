<?php

namespace app\controllers;


use Yii;
use app\models\Works;
use app\models\forms\AddWorks;
use app\models\forms\EditWorks;
use app\models\SurfaceLink;
use yii\data\ActiveDataProvider;
use yii\filters\AccessControl;
use yii\web\Controller;

class WorksController extends Controller {

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
        $this->view->title = 'Работы';
        $this->view->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width,initial-scale=1.0,  shrink-to-fit=no']);
        $this->layout = 'main';

        $query = Works::find();

        if (Yii::$app->request->get('surface') && Yii::$app->request->get('surface') != 'all') {
            $query->andWhere(['surface_id' => Yii::$app->request->get('surface')]);
        }
       
        $provider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 10,
            ],
            'sort' => [],
        ]);

        $works = $provider->getModels();

        return $this->render('index', compact('works'));
    }

    public function actionAdd(){
        $this->view->title = 'Создание работы';
        $this->view->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width,initial-scale=1.0,  shrink-to-fit=no']);
        $this->layout = 'edit';

        $add_work = new AddWorks();

        if ($add_work->load(Yii::$app->request->post())) {
            if ($add_work->validate() && $add_work->add()) {
                return $this->refresh();
            }
        }

        return $this->render('add', compact('add_work'));
    }

    public function actionEdit(){
        $this->view->title = 'Редактирование работы';
        $this->view->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width,initial-scale=1.0,  shrink-to-fit=no']);
        $this->layout = 'edit';

        $id = Yii::$app->request->get('id');
        $edit_work = new EditWorks($id);

        if ($edit_work->load(Yii::$app->request->post())) {
            if ($edit_work->validate() && $edit_work->edit()) {
               return $this->refresh();
            }
        }

        return $this->render('edit', compact('edit_work', 'id'));
    }
}