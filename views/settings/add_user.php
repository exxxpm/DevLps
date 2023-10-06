<?
    use yii\helpers\Html;
    use yii\helpers\Url;
    use yii\widgets\ActiveForm;
?>
<main>
    <!-- start sCreateObject-->


    <?php $form = ActiveForm::begin([
        'options' => ['class' => 'sCreateObject'],
        'fieldConfig' => [
            'template' => "{label}\n{input}\n{hint}\n{error}",
        ],
    ]); ?>
        <div class="sCreateObject__body">
            <div class="sCreateObject__left-side">
                <h2>Создание пользователя</h2>
                <div class="form-wrap">
                    <div class="form-wrap__row row">
                        <div class="col-12">
                            <div class="form-wrap__input-wrap form-group">
                                <?= $form->field($add_user, 'username', ['template' => "{label}\n{input}\n<span class=\"form-wrap__input-title\">ФИО</span>\n{hint}\n{error}"])->textInput(['class' => 'form-wrap__input form-control', 'placeholder' => 'ФИО'])->label(false); ?>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="custom-select-wrap custom-select-wrap--fourth-type">
                                <?= $form->field($add_user, 'role', ['template' => '{input}', 'options' => ['tag' => false]])->dropDownList(['admin' => 'Администратор', 'manager' => 'Менеджер',], ['class' => 'basic-select basic-select--js',],)->label('false'); ?>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-wrap__input-wrap form-group">
                                <?= $form->field($add_user, 'email', ['template' => "{label}\n{input}\n<span class=\"form-wrap__input-title\">Email</span>\n{hint}\n{error}"])->input('email', ['class' => 'form-wrap__input form-control', 'placeholder' => 'Email'])->label(false); ?>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-wrap__input-wrap form-group">
                                <label>
                                    <?= $form->field($add_user, 'password', ['template' => "{label}\n{input}\n<span class=\"form-wrap__input-title\">Пароль</span>\n{hint}\n{error}"])->passwordInput(['class' => 'form-wrap__input form-control', 'placeholder' => 'Пароль'])->label(false); ?>
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
                        <div class="upload-avatar">
                            <label class="upload-avatar__input-wrap">
                                <?= $form->field($add_user, 'user_img')->fileInput(['class' => 'input-upload', 'accept' => 'image/*'])->label(false); ?>
                                <span class="upload-avatar__stub">
                                    <img src="/web/img/svg/user.svg" alt="" loading="lazy"/>
                                    <span class="d-none">ИИ</span>
                                </span>
                                <div class="img-wrap-center"><img class="object-fit-js" src="" alt="" loading="lazy"/></div>
                                <span class="upload-avatar__file-name">Загрузить фото</span>
                            </label>
                            <div class="upload-avatar__delete-photo">Удалить фото</div>
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