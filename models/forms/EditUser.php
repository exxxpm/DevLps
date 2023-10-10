<?php
namespace app\models\forms;

use Yii;
use yii\base\Model;
use app\models\User;
use app\models\SaveFile;

class EditUser extends Model{
    public $username;
    public $email;
    public $password;
    public $user_img;
    public $role;
    private $_user;


    public function __construct($id){
        $this->_user = User::findIdentity($id);
        $this->username = $this->_user->username;
        $this->email = $this->_user->email;
        $this->user_img = $this->_user->user_img;
    }

    public function rules(){
        return [
            ['username', 'trim'],
            ['role', 'trim'],
            ['username', 'string', 'min' => 2, 'max' => 255],
            ['email', 'trim'],
            ['email', 'email'],
            ['user_img', 'file', 'extensions' => ['png', 'jpg', 'gif'], 'skipOnEmpty' => true,],
            [['username', 'email'], 'unique', 'targetClass' => '\app\models\User', 'message' => 'Пользователь с таким Фио или Email уже зарегистрирован.', 'filter' => function ($query) {$query->andWhere(['not', ['id' => $this->_user->id]]);}],
            ['password', 'string', 'min' => 6],
        ];
    }

    public function edit(){
        if (!$this->validate()) {
            return false;
        }

        $user = $this->_user;
        $user->username = $this->username;
        $user->email = $this->email;

        $user_img = "";
        $temp_role = "";

        if(isset($this->user_img) && !empty($this->user_img)){
            $file_helper = new SaveFile($this->user_img);
            $user_img = $file_helper->addFile()->id;
        }else{
            $user_img = $this->_user->user_img;
        }

        if(isset($this->role) && !empty($this->role)){
            $temp_role = $this->role;
        }else{
            $temp_role = $user->getUserRole();
        }

        $user->user_img = $user_img;
        $user->setUserRole($temp_role);

        if (!empty($this->password)) {
            $user->setPassword($this->password);
            $user->removePasswordResetToken();
        }

        return $user->save() ? $user : false;
    }

}