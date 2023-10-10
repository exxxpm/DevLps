<?php
namespace app\models\forms;

use Yii;
use yii\base\Model;
use app\models\User;
use app\models\SaveFile;
class AddUser extends Model{

    public $username;
    public $email;
    public $password;
    public $user_img;
    public $role;

    public function rules(){
        return [
            ['username', 'trim'],
            ['role', 'trim'],
            ['username', 'required', 'message' => 'Необходимо заполнить поле "ФИО"'],
            ['username', 'unique', 'targetClass' => '\app\models\User', 'message' => 'Пользователь с таким Фио уже зарегестрирован.'],
            ['username', 'string', 'min' => 2, 'max' => 255],
            ['email', 'trim'],
            ['email', 'required', 'message' => 'Необходимо заполнить поле "Email"'],
            ['email', 'email'],
            ['user_img', 'file', 'extensions' => ['png', 'jpg', 'gif'], 'skipOnEmpty' => true,],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\app\models\User', 'message' => 'Пользователь с таким Email уже зарегестрирован.'],
            ['password', 'required', 'message' => 'Необходимо заполнить поле "Пароль"'],
            ['password', 'string', 'min' => 6],
        ];
    }

    public function precreation_user(){
        if (!$this->validate()) {
            return false;
        }

        $user = new User();
        $user->username = $this->username;
        $user->email = $this->email;
        if(isset($this->user_img) && !empty($this->user_img)){
            $file_helper = new SaveFile($this->user_img);
            $user->user_img = $file_helper->addFile()->id;
        }else{
            $user->user_img = "";
        }
        $user->setPassword($this->password);
        $user->generateAuthKey();
        return $user->save() ? $user : false;
    }

    public function add(){
        $preload_user = $this->precreation_user();
        if ($preload_user) {
            $preload_user->setUserRole($this->role);
        }
    }

}