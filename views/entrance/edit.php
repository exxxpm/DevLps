<?php
/** @var TYPE_NAME $entrance */

use yii\helpers\Html;
use yii\helpers\Url;
use app\models\File;
use yii\widgets\ActiveForm;

$months = ['Янв' => 'Jan', 'Фев' => 'Feb', 'Март' => 'Mar', 'Апр' => 'Apr', 'Май' => 'May', 'Июнь' => 'Jun', 'Июль' => 'Jul', 'Авг' => 'Aug', 'Сен' => 'Sep', 'Окт' => 'Oct', 'Ноя' => 'Nov', 'Дек' => 'Dec'];
?>
    <main>
        <!-- start sCreateObject-->
        <?php $form = ActiveForm::begin(['options' => ['class' => 'sCreateObject', 'id' => 'sCreateObject', 'enctype' => 'multipart/form-data']]); ?>
        <div class="sCreateObject__body">
            <div class="sCreateObject__left-side">
                <h2>Редактирование подъезда</h2>
                <div class="form-wrap">
                    <div class="form-wrap__main-row row">
                        <div class="col-12">
                            <div class="custom-input-wrap form-group">
                                <?= $form->field($entrance, 'name')->textInput(['class' => 'custom-input-wrap__input form-control', 'placeholder' => 'Введите название'])->label(false); ?>
                                <div class="custom-input-wrap__line"></div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-wrap__input-wrap form-group">
                                <?= $form->field($entrance, 'description')->textarea(['class' => 'form-wrap__input form-control', 'placeholder' => 'Введите описание объекта'])->label(false); ?>
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
                                <span class="date-create"><?= date('d', $entrance->date_start) . ' ' . array_search(date('M', $entrance->date_start), $months) . ' ' . date('y', $entrance->date_start);?></span>
                                <?= $form->field($entrance, 'date_start')->hiddenInput(['class' => 'hidden_date-create'])->label(false); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="sCreateObject__item">
                            <p>Дата завершения</p>
                            <div class="sCreateObject__date dateSingle-js">
                                <svg class="icon icon-calendar ">
                                    <use xlink:href="/web/img/svg/sprite.svg#calendar"></use>
                                </svg>
                                <span class="date-finish"><?= date('d', $entrance->date_finish) . ' ' . array_search(date('M', $entrance->date_finish), $months) . ' ' . date('y', $entrance->date_finish);?></span>
                                <?= $form->field($entrance, 'date_finish')->hiddenInput(['class' => 'hidden_date-finish'])->label(false); ?>
                            </div>
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
                                <span><?= $user->username ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="sCreateObject__item">
                            <p>Дата создания</p><span><?= Yii::$app->formatter->asDate($entrance->create, 'd.M.Y H:i'); ?></span>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="sCreateObject__item">
                            <p>Последнее изменение</p><span><?= Yii::$app->formatter->asDate( $entrance->last_update, 'd.M.Y H:i'); ?></span>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="sCreateObject__btn-row row">
                            <div class="col-auto">
                                <a class="sCreateObject__control-btn btn btn-light" href="#" data-bs-toggle="tooltip2"
                                   data-bs-placement="top" title="Дублировать">
                                    <svg class="icon icon-copy ">
                                        <use xlink:href="/web/img/svg/sprite.svg#copy"></use>
                                    </svg>
                                </a>
                            </div>
                            <div class="col-auto">
                                <a class="sCreateObject__control-btn sCreateObject__control-btn--delete btn btn-light"
                                   href="#" data-bs-toggle="tooltip2" data-bs-placement="top" title="Удалить">
                                    <svg class="icon icon-delete ">
                                        <use xlink:href="/web/img/svg/sprite.svg#delete"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sCreateObject__footer">
            <div class="sCreateObject__footer-row">
                <?= Html::submitButton('Сохранить изменения', ['class' => 'sCreateObject__btn btn btn-accent'])?>
                <a class="sCreateObject__btn btn btn-light" href="/web/entrance/index/<?= $id ?>">Отмена</a>
            </div>
        </div>
        <?php ActiveForm::end(); ?>
        <!-- end sCreateObject-->
        <a href="/web/entrance/index/<?= $id ?>" class="close-btn">
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