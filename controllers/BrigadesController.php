<?php

namespace app\controllers;

use app\models\Brigades;
use yii;
use app\models\forms\AddBrigades;
use app\models\forms\AddWorks;
use app\models\forms\EditBrigades;
use app\models\Surface;
use app\models\Works;
use yii\data\ActiveDataProvider;
use yii\filters\AccessControl;
use yii\web\Controller;

class BrigadesController extends Controller{

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
        $this->view->title = 'Бригады';
        $this->view->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width,initial-scale=1.0,  shrink-to-fit=no']);
        $this->layout = 'main';

        $query = Brigades::find();

        if (Yii::$app->request->get('surface') && Yii::$app->request->get('surface') != 'all') {
            $query = Brigades::find()->joinWith('slink')->where(['surface_id' => Yii::$app->request->get('surface')]);
        }

        $provider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 10,
            ],
            'sort' => [],
        ]);

        $brigades = $provider->getModels();

        return $this->render('index', compact('brigades'));
    }

    public function actionAdd(){
        $this->view->title = 'Создание бригад';
        $this->view->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width,initial-scale=1.0,  shrink-to-fit=no']);
        $this->layout = 'edit';

        $add_brigades = new AddBrigades();
        $surfaces = Surface::find()->all();
        $works = Works::find()->all();

        if ($add_brigades->load(Yii::$app->request->post())) {
            if ($add_brigades->validate()  && $add_brigades->add()) {
                return $this->refresh();
            }
        }

        return $this->render('add', compact('add_brigades', 'surfaces', 'works'));
    }

    public function actionEdit(){
        $this->view->title = 'Редактирование бригад';
        $this->view->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width,initial-scale=1.0,  shrink-to-fit=no']);
        $this->layout = 'edit';

        $id = Yii::$app->request->get('id');
        $edit_brigades = new EditBrigades($id);
        $surfaces = Surface::find()->all();
        $works = Works::find()->all();

        if ($edit_brigades->load(Yii::$app->request->post())) {
            if ($edit_brigades->validate() && $edit_brigades->edit()) {
                return $this->refresh();
            }
        }

        return $this->render('edit', compact('edit_brigades', 'surfaces', 'works'));
    }
}