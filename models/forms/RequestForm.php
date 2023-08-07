<?php
namespace app\models\forms;

use Yii;
use yii\base\Model;
use app\models\User;


class RequestForm extends Model
{
    public $email;
    public function rules(){
        return [
            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'exist',
                'targetClass' => '\app\models\User',
                'filter' => ['status' => User::STATUS_ACTIVE],
                'message' => 'There is no user with such email.'
            ],
        ];
    }

    public function sendEmail(){
        $user = User::findOne(['status' => User::STATUS_ACTIVE, 'email' => $this->email,]);

        if (!$user) {
            return false;
        }

        if (!User::isPasswordResetTokenValid($user->password_reset_token)) {
            $user->generatePasswordResetToken();
            if (!$user->save()) {
                return false;
            }
        }

        return Yii::$app->mailer->compose(['html' => 'passwordResetToken-html', 'text' => 'passwordResetToken-text'], ['user' => $user])->setFrom([Yii::$app->params['supportEmail'] => Yii::$app->name . ' robot'])->setTo($this->email)->setSubject('Password reset for ' . Yii::$app->name)->send();
    }

}