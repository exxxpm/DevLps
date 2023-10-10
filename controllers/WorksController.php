<?php

namespace app\controllers;

use Yii;
use app\models\Works;
use yii\web\Controller;
use yii\data\ActiveDataProvider;

class WorksController extends Controller {
    public function actionIndex(){
        $this->view->title = 'Работы';
        $this->view->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width,initial-scale=1.0,  shrink-to-fit=no']);
        $this->layout = 'main';

        $query = Works::find();

        if (Yii::$app->request->get('surface') && Yii::$app->request->get('surface') != 'all') {
            $query->andWhere(['surface' => Yii::$app->request->get('surface')]);
        }

        $provider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 10,
            ],
            'sort' => [],
        ]);

        $works = $provider->getModels();

        return $this->render('works', compact('works'));
    }

    public function actionAdd(){
        $this->view->title = 'Создание работы';
        $this->view->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width,initial-scale=1.0,  shrink-to-fit=no']);
        $this->layout = 'edit';

        $add_work = new Works();

        if ($add_work->load(Yii::$app->request->post())) {
            if ($add_work->validate() && $add_work->create_modification()) {
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
        $edit_work = Works::findOne($id);

        if ($edit_work->load(Yii::$app->request->post())) {
            if ($edit_work->validate() && $edit_work->create_modification()) {
                return $this->refresh();
            }
        }

        return $this->render('edit', compact('edit_work'));
    }
}