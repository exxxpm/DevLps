<?php
namespace app\controllers;

use Yii;
use app\models\User;
use app\models\forms\AddUser;
use app\models\forms\EditUser;
use yii\data\ActiveDataProvider;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\UploadedFile;

class SettingsController extends Controller{
    public function behaviors(){
        return [
            'access' => [
                'class' => AccessControl::class,
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['modificationUsersPage'],
                    ],
                ],
                'denyCallback' => function () {
                    return Yii::$app->response->redirect(['/login/index']);
                },
            ],
        ];
    }

    public function actionUsers()
    {
        $this->view->title = 'Пользователи';
        $this->view->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width,initial-scale=1.0,  shrink-to-fit=no']);
        $this->layout = 'main';
        $query = User::find();

        if (Yii::$app->request->get('user') && Yii::$app->request->get('user') != 'all') {
            $usersWithRole = Yii::$app->authManager->getUserIdsByRole(Yii::$app->request->get('user'));
            $query->andWhere(['id' => $usersWithRole]);
        }

        $provider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 10,
            ],
            'sort' => [],
        ]);

        $users = $provider->getModels();
        $count = $provider->getTotalCount();

        return $this->render('users', compact('users', 'count'));
    }

    public function actionAddUser(){
        $this->view->title = 'Создание пользователя';
        $this->view->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width,initial-scale=1.0,  shrink-to-fit=no']);
        $this->layout = 'edit';

        $add_user = new AddUser();

        if ($add_user->load(Yii::$app->request->post())) {
            $add_user->user_img = UploadedFile::getInstance($add_user, 'user_img');
            if ($add_user->validate() && $add_user->add()) {
                return $this->refresh();
            }
        }

        return $this->render('add_user', compact('add_user'));
    }

    public function actionEditUser(){
        $this->view->title = 'Редактирование пользователя';
        $this->view->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width,initial-scale=1.0,  shrink-to-fit=no']);
        $this->layout = 'edit';

        $id = Yii::$app->request->get('id');
        $user = new EditUser($id);

        if ($user->load(Yii::$app->request->post())) {
            $user->user_img = UploadedFile::getInstance($user, 'user_img');
            if ($user->validate() && $user->edit()) {
                return $this->refresh();
            }
        }

        return $this->render('edit_user', compact('user', 'id'));
    }
}