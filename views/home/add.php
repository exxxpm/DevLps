<?php
/** @var TYPE_NAME $home */

use yii\helpers\Html;
use yii\helpers\Url;
use app\models\File;
use yii\widgets\ActiveForm;

?>
    <main>
        <!-- start sCreateObject-->
        <?php $form = ActiveForm::begin(['options' => ['class' => 'sCreateObject', 'id' => 'sCreateObject', 'enctype' => 'multipart/form-data']]); ?>
        <div class="sCreateObject__body">
            <div class="sCreateObject__left-side">
                <h2>Создание дома</h2>
                <div class="form-wrap">
                    <div class="form-wrap__main-row row">
                        <div class="col-12">
                            <div class="custom-input-wrap form-group">
                                <?= $form->field($home, 'name')->textInput(['class' => 'custom-input-wrap__input form-control', 'placeholder' => 'Введите название'])->label(false); ?>
                                <div class="custom-input-wrap__line"></div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-wrap__input-wrap form-group">
                                <?= $form->field($home, 'description')->textarea(['class' => 'form-wrap__input form-control', 'placeholder' => 'Введите описание объекта'])->label(false); ?>
                            </div>
                            <!-- +e.input-wrap-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="sCreateObject__right-side">
                <div class="sCreateObject__row row">
                    <div class="col-12">
                        <div class="sCreateObject__item">
                            <p>Дата начала</p>
                            <div class="sCreateObject__date dateSingle-js">
                                <svg class="icon icon-calendar ">
                                    <use xlink:href="/web/img/svg/sprite.svg#calendar"></use>
                                </svg>
                                <span class="date-create">Указать дату начала</span>
                                <?= $form->field($home, 'date_start', ['errorOptions' => ['style' => 'display:none;']])->hiddenInput(['class' => 'hidden_date-create'])->label(false); ?>
                            </div>
                            <?php foreach ($home->getErrors('date_start') as $error): ?>
                                <div class="custom-error-create"><?= $error ?></div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="sCreateObject__item">
                            <p>Дата завершения</p>
                            <div class="sCreateObject__date dateSingle-js">
                                <svg class="icon icon-calendar ">
                                    <use xlink:href="/web/img/svg/sprite.svg#calendar"></use>
                                </svg>
                                <span class="date-finish">Указать дату завершения</span>
                                <?= $form->field($home, 'date_finish', ['errorOptions' => ['style' => 'display:none;']])->hiddenInput(['class' => 'hidden_date-finish'])->label(false); ?>
                            </div>
                            <?php foreach ($home->getErrors('date_finish') as $error): ?>
                                <div class="custom-error-finish"><?= $error ?></div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="sCreateObject__item">
                            <p>Автор</p>
                            <div class="avatar-wrap">
                                <div class="avatar">
                                    <?
                                    $file_id = $user->user_img;
                                    $file = File::findOne($file_id);

                                    if(isset($file) && !empty($file)){
                                        $img_path = '/web/'.$file->path;
                                        ?><img src="<?= $img_path ?>" alt="" loading="lazy"/><?
                                    }else {
                                        ?>
                                        <span><? $user->username[0] ?></span>
                                        <img src="/web/img/avatar.jpg" alt="" loading="lazy"/>
                                        <?
                                    }
                                    ?>
                                </div>
                                </div><span><?= $user->username ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sCreateObject__footer">
            <div class="sCreateObject__footer-row">
                <?= Html::submitButton('Сохранить изменения', ['class' => 'sCreateObject__btn btn btn-accent'])?>
                <a class="sCreateObject__btn btn btn-light" href="/web/site/object/<?= $id ?>">Отмена</a>
            </div>
        </div>
        <?php ActiveForm::end(); ?>
        <!-- end sCreateObject-->
        <a href="/web/site/object/<?= $id ?>" class="close-btn">
            <svg class="icon icon-close ">
                <use xlink:href="/web/img/svg/sprite.svg#close"></use>
            </svg>
        </a>
    </main>
<?php
$script = <<< JS
        $(document).ready(function() {
            $('.btn-accent').on('click', function (){
                $('.hidden_date-create').val($('.date-create').text());
                $('.hidden_date-finish').val($('.date-finish').text());
            });
        });
    JS;
$this->registerJs($script);
?>