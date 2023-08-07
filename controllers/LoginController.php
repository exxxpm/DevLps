<?php
namespace app\controllers;

use Yii;
use app\models\forms\LoginForm;
use app\models\forms\ResetForm;
use app\models\forms\RequestForm;
use yii\web\Controller;
use yii\filters\AccessControl;

class LoginController extends Controller{

    public $layout = 'access_acc';

    public function actionRequest(){
        $model = new RequestForm();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Проверьте свою электронную почту для получения дальнейших инструкций.');
                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Извините, мы не можем сбросить пароль для предоставленной электронной почты.');
            }
        }

        return $this->render('request', ['model' => $model,]);
    }

    public function actionReset($token){
        try {
            $model = new RequestForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'Новый пароль был сохранен.');
            return $this->goHome();
        }

        return $this->render('reset', ['model' => $model,]);
    }

    public function actionLogout(){
        if (Yii::$app->user->isGuest) {
            return $this->goHome();
        }else{
            if(Yii::$app->user->logout()) {
                return $this->redirect('/web/site/');
            }
        }
    }

    public function actionIndex(){
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->login()) {
                return $this->goBack();
            }
        }

        return $this->render('login', ['model' => $model,]);
    }
}