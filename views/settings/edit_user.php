<?
use yii\helpers\Html;
use app\models\File;;
use yii\helpers\Url;
use yii\widgets\ActiveForm;


?>
<main>
    <!-- start sCreateObject-->


    <?$form = ActiveForm::begin(['options' => ['class' => 'sCreateObject', 'enctype' => 'multipart/form-data']]); ?>
    <div class="sCreateObject__body">
        <div class="sCreateObject__left-side">
            <h2>Редактирование пользователя</h2>
            <div class="form-wrap">
                <div class="form-wrap__row row">
                    <div class="col-12">
                        <div class="form-wrap__input-wrap form-group">
                            <?= $form->field($user, 'username', ['template' => "{label}\n{input}\n<span class=\"form-wrap__input-title\">ФИО</span>\n{hint}\n{error}"])->textInput(['class' => 'form-wrap__input form-control', 'placeholder' => 'ФИО'])->label(false); ?>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="custom-select-wrap custom-select-wrap--fourth-type">
                            <?php
                                $auth = Yii::$app->authManager;
                                $roles = $auth->getRolesByUser($id);
                                $role = reset($roles);

                                $roleOptions = ['admin' => 'Администратор', 'manager' => 'Менеджер'];
                            ?>
                            <?= $form->field($user, 'role', ['template' => '{input}', 'options' => ['tag' => false]])->dropDownList($roleOptions, ['class' => 'basic-select basic-select--js', 'options' => [$role->name => ['selected' => true]],])->label(false); ?>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-wrap__input-wrap form-group">
                            <?= $form->field($user, 'email', ['template' => "{label}\n{input}\n<span class=\"form-wrap__input-title\">Email</span>\n{hint}\n{error}"])->input('email', ['class' => 'form-wrap__input form-control', 'placeholder' => 'Email'])->label(false); ?>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-wrap__input-wrap form-group">
                            <label>
                                <?= $form->field($user, 'password', ['template' => "{label}\n{input}\n<span class=\"form-wrap__input-title\">Пароль</span>\n{hint}\n{error}"])->passwordInput(['class' => 'form-wrap__input form-control', 'placeholder' => 'Пароль'])->label(false); ?>
                                <span class="form-wrap__pass-eye">
                                        <svg class="icon icon-eye ">
                                            <use xlink:href="/web/img/svg/sprite.svg#eye"></use>
                                        </svg>
                                    </span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sCreateObject__right-side">
            <div class="sCreateObject__row row">
                <div class="col-12">
                    <?
                        $file_id = $user->user_img;
                        $file = File::findOne($file_id);

                        if(isset($file) && !empty($file)){
                            $img_path = '/web/'.$file->path;
                            $img_id = $file->id;
                        }else {
                            $img_path = '/web/img/svg/user.svg';
                            $img_id = '';

                        }
                    ?>
                    <div class="upload-avatar <?= ($img_path != '/web/img/svg/user.svg' ? "active" : "")?>">
                        <label class="upload-avatar__input-wrap">
                            <?= $form->field($user, 'user_img')->fileInput(['class' => 'input-upload', 'accept' => 'image/*'])->label(false); ?>
                            <span class="upload-avatar__stub">
                                    <img id="user_img" src="<?= $img_path ?>" alt="" loading="lazy"/>
                                    <span class="d-none">ИИ</span>
                            </span>
                            <div class="img-wrap-center"><img class="object-fit-js" src="<?= $img_path ?>" alt="" loading="lazy"/></div>
                            <span class="upload-avatar__file-name">Загрузить фото</span>
                        </label>
                        <div class="upload-avatar__delete-photo" data-id="<?= $img_id ?>" >Удалить фото</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sCreateObject__footer">
        <div class="sCreateObject__footer-row">
            <?= Html::submitButton('Сохранить изменения', ['class' => 'sCreateObject__btn btn btn-accent'])?>
            <a class="sCreateObject__btn btn btn-light" href="/web/settings/users">Отмена</a>
        </div>
    </div>
    <? ActiveForm::end(); ?>
    <!-- end sCreateObject-->
    <a href="/web/settings/users" class="close-btn">
        <svg class="icon icon-close ">
            <use xlink:href="/web/img/svg/sprite.svg#close"></use>
        </svg>
    </a>
</main>