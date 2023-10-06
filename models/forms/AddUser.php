<?php
namespace app\models\forms;

use Yii;
use app\models\File;
use app\models\User;
use yii\base\Model;
use yii\helpers\FileHelper;

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

    private function get_full_path(){
        $uploadPath = 'uploads/' . date('Y') . '/' . date('m');
        $fullPath = $uploadPath . '/' . $this->user_img->baseName . '.' . $this->user_img->extension;
        return ['uploadPath' => $uploadPath, 'fullPath' => $fullPath];
    }

    public function add_file(){
        $file = new File();
        $path = $this->get_full_path();

        $file->name = $this->user_img->baseName . '.' . $this->user_img->extension;
        $file->path = $path['fullPath'];

        if ($file->save()) {
            $this->upload($path);
        }

        return $file;
    }

    public function upload($path){
        if (!file_exists($path['uploadPath'])) {
            FileHelper::createDirectory($path['uploadPath'], 0775, true);
        }
        $this->user_img->saveAs($path['fullPath']);
    }

    public function precreation_user(){
        if (!$this->validate()) {
            return false;
        }

        $user = new User();
        $user->username = $this->username;
        $user->email = $this->email;
        if(isset($this->user_img) && !empty($this->user_img)){
            $user->user_img = $this->add_file()->id;
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
            $auth = Yii::$app->authManager;
            $role = $auth->getRole($this->role);
            $auth->assign($role, $preload_user->id);
        }
    }

}