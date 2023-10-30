<?php
namespace app\models;

use Yii;
use yii\base\NotSupportedException;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\helpers\FileHelper;
use yii\web\IdentityInterface;

class User extends ActiveRecord implements IdentityInterface{
    const STATUS_DELETED = 0;
    const STATUS_ACTIVE = 10;

    public static function tableName(){
        return '{{%user}}';
    }

    public function behaviors(){
        return [
            TimestampBehavior::className(),
        ];
    }

    public function rules(){
        return [
            ['status', 'default', 'value' => self::STATUS_ACTIVE],
            ['status', 'in', 'range' => [self::STATUS_ACTIVE, self::STATUS_DELETED]],
        ];
    }

    public static function findIdentity($id){
        return static::findOne(['id' => $id, 'status' => self::STATUS_ACTIVE]);
    }

    public static function findByEmail($email){
        return static::findOne(['email' => $email, 'status' => self::STATUS_ACTIVE]);
    }

    public static function findIdentityByAccessToken($token, $type = null){
        throw new NotSupportedException('"findIdentityByAccessToken" is not implemented.');
    }

    public static function findByUsername($username){
        return static::findOne(['username' => $username, 'status' => self::STATUS_ACTIVE]);
    }

    public static function findByPasswordResetToken($token){

        if (!static::isPasswordResetTokenValid($token)) {
            return null;
        }

        return static::findOne([
            'password_reset_token' => $token,
            'status' => self::STATUS_ACTIVE,
        ]);
    }

    public static function isPasswordResetTokenValid($token){

        if (empty($token)) {
            return false;
        }

        $timestamp = (int) substr($token, strrpos($token, '_') + 1);
        $expire = Yii::$app->params['user.passwordResetTokenExpire'];
        return $timestamp + $expire >= time();
    }

    public function getId(){
        return $this->getPrimaryKey();
    }

    public function getUserRole(){
        $auth = Yii::$app->authManager;
        $id = $this->getId();
        $old_role = $auth->getRolesByUser($id);
        $role =  reset($old_role);
        return $role;
    }

    public function getRusUserRole(){
        $role_list = [
            'admin' => 'Администратор',
            'manager' => 'Менеджер',
        ];
        $role = $this->getUserRole()->name;
        return $role_list[$role];
    }

    public function setUserRole($temp_role){
        $auth = Yii::$app->authManager;
        if ($this->getUserRole()){
            $auth->revoke($this->getUserRole(), $this->getId());
            $new_role = $auth->getRole($temp_role);
            $auth->assign($new_role, $this->getId());
        }else{
            $role = $auth->getRole($temp_role);
            $auth->assign($role, $this->getId());
        }
    }

    public function getUsername(){
        $words = explode(" ", $this->username);
        if (count($words) >= 3) {
            $shortened_first_name = mb_substr($words[1], 0, 1, 'UTF-8') . ".";
            $shortened_middle_name = mb_substr($words[2], 0, 1, 'UTF-8') . ".";
            return $words[0] . " " . $shortened_first_name . " " . $shortened_middle_name;
        } else {
            return $this->username;
        }
    }

    public function getAuthKey(){
        return $this->auth_key;
    }

    public function validateAuthKey($authKey){
        return $this->getAuthKey() === $authKey;
    }

    public function validatePassword($password){
        return Yii::$app->security->validatePassword($password, $this->password_hash);
    }

    public function setPassword($password){
        $this->password_hash = Yii::$app->security->generatePasswordHash($password);
    }

    public function generateAuthKey(){
        $this->auth_key = Yii::$app->security->generateRandomString();
    }

    public function generatePasswordResetToken(){
        $this->password_reset_token = Yii::$app->security->generateRandomString() . '_' . time();
    }

    public function removePasswordResetToken(){
        $this->password_reset_token = null;
    }
}