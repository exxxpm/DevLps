<?php
namespace app\models\forms;

use Yii;
use app\models\File;
use yii\base\Model;
use app\models\User;
use yii\base\InvalidParamException;
use yii\helpers\FileHelper;

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

    public function edit(){
        if (!$this->validate()) {
            return false;
        }

        $user = $this->_user;
        $user->username = $this->username;
        $user->email = $this->email;
        $user_img = "";
        $temp_role = "";

        $auth = Yii::$app->authManager;
        $roles = $auth->getRolesByUser($user->id);
        $old_role = reset($roles);

        if(isset($this->user_img) && !empty($this->user_img)){
            $user_img = $this->add_file()->id;
        }else{
            $user_img = $this->_user->user_img;
        }

        if(isset($this->role) && !empty($this->role)){
            $temp_role = $this->role;
        }else{
            $temp_role = $old_role;
        }

        $user->user_img = $user_img;
        $auth->revoke($old_role, $user->id);
        $new_role = $auth->getRole($temp_role);
        $auth->assign($new_role, $user->id);

        if (!empty($this->password)) {
            $user->setPassword($this->password);
            $user->removePasswordResetToken();
        }

        return $user->save() ? $user : false;
    }

}