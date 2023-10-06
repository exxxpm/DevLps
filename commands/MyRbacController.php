<?php
namespace app\commands;

use Yii;
use yii\console\Controller;

class MyRbacController extends Controller {

    public function actionInit() {
        $auth = Yii::$app->authManager;

        $auth->removeAll(); //На всякий случай удаляем старые данные из БД...

        $admin = $auth->createRole('admin');
        $manager= $auth->createRole('manager');

        $auth->add($admin);
        $auth->add($manager);

        // Создаем разрешения. Например, просмотр админки viewAdminPage и редактирование новости updateNews
        $modificationUsersPage = $auth->createPermission('modificationUsersPage');
        $modificationUsersPage->description = 'Модификация пользователей';

        $addSubjects = $auth->createPermission('addSubjects');
        $addSubjects->description = 'Редактирование иерархии объектов';

        // Запишем эти разрешения в БД
        $auth->add($modificationUsersPage);
        $auth->add($addSubjects);

        // Теперь добавим наследования. Для роли editor мы добавим разрешение updateNews,
        // а для админа добавим наследование от роли editor и еще добавим собственное разрешение viewAdminPage

        // Роли «Редактор новостей» присваиваем разрешение «Редактирование новости»
        $auth->addChild($manager,$addSubjects);

        // админ наследует роль редактора новостей. Он же админ, должен уметь всё! :D
        $auth->addChild($admin, $manager);

        // Еще админ имеет собственное разрешение - «Просмотр админки»
        $auth->addChild($admin, $modificationUsersPage);

        // Назначаем роль admin пользователю с ID 1
        $auth->assign($admin, 1);

        // Назначаем роль editor пользователю с ID 2
        $auth->assign($manager, 2);
    }
}