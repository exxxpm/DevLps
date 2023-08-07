<?php
namespace app\models\forms;

use Yii;
use yii\base\Model;
use app\models\User;

class LoginForm extends Model {
    public $email;
    public $password;
    public $rememberMe = true;
    private $_user = false;

    public function rules(){
        return [
            [['email'], 'required'],
            [['password'], 'required', 'message' => 'Необходимо заполнить «Пароль».'],
            [['email'], 'email'],
            ['rememberMe', 'boolean'],
            ['password', 'validatePassword'],
        ];
    }

    public function validatePassword($attribute, $params){
        if (!$this->hasErrors()) {
            $user = $this->getUser();

            if (!$user || !$user->validatePassword($this->password)) {
                $this->addError($attribute, 'Не коректный пароль.');
            }

        }
    }

    public function login(){
        if ($this->validate()) {
            return Yii::$app->user->login($this->getUser(), $this->rememberMe ? 3600*24*30 : 0);
        }
        return false;
    }

    public function getUser(){
        if ($this->_user === false) {
            $this->_user = User::findByEmail($this->email);
        }
        return $this->_user;
    }

}