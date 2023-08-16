<?php
/** @var TYPE_NAME $object */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

?>
    <main>
        <!-- start sCreateObject-->
        <?php $form = ActiveForm::begin(['options' => ['class' => 'sCreateObject', 'id' => 'sCreateObject', 'enctype' => 'multipart/form-data']]); ?>
        <div class="sCreateObject__body">
            <div class="sCreateObject__left-side">
                <h2>Создание объекта</h2>
                <div class="form-wrap">
                    <div class="form-wrap__main-row row">
                        <div class="col-12">
                            <div class="custom-input-wrap form-group">
                                <?= $form->field($object, 'name')->textInput(['class' => 'custom-input-wrap__input form-control', 'placeholder' => 'Введите название'])->label(false); ?>
                                <div class="custom-input-wrap__line"></div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-wrap__input-wrap form-group">
                                <?= $form->field($object, 'description')->textarea(['class' => 'form-wrap__input form-control', 'placeholder' => 'Введите описание объекта'])->label(false); ?>
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
                            <p>Статус проекта</p>
                            <div class="select-status">
                                <?
                                $options = [
                                    ['label' => 'В работе', 'value' => '2', 'img' => '/web/img/svg/play.svg'],
                                    ['label' => 'Планирование', 'value' => '3', 'img' => '/web/img/svg/done.svg'],
                                    ['label' => 'Завершен', 'value' => '4', 'img' => '/web/img/svg/time.svg'],
                                    ['label' => 'Архив', 'value' => '5', 'img' => '/web/img/svg/archive.svg'],
                                ];

                                $statusOptions = [];
                                foreach ($options as $option) {
                                    $label = Html::encode($option['label']);
                                    $imgSrc = Html::encode($option['img']);
                                    $statusOptions[$option['value']] = $label;
                                }
                                ?>

                                <?= $form->field($object, 'status_id')->label(false)->dropDownList($statusOptions,['class' => 'custom-select--js', 'encode' => false, 'options' => array_reduce($options, function ($carry, $option) {$imgSrc = Html::encode($option['img']);$carry[$option['value']] = ['data-img' => $imgSrc];return $carry;}, []),])->label(false);?>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="sCreateObject__item">
                            <p>Дата начала</p>
                            <div class="sCreateObject__date dateSingle-js">
                                <svg class="icon icon-calendar ">
                                    <use xlink:href="/web/img/svg/sprite.svg#calendar"></use>
                                </svg>
                                <span class="date-create">Указать дату начала</span>
                                <?= $form->field($object, 'date_start', ['errorOptions' => ['style' => 'display:none;']])->hiddenInput(['class' => 'hidden_date-create'])->label(false) ?>
                            </div>
                            <?php foreach ($object->getErrors('date_start') as $error): ?>
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
                                <?= $form->field($object, 'date_finish', ['errorOptions' => ['style' => 'display:none;']])->hiddenInput(['class' => 'hidden_date-finish'])->label(false) ?>

                            </div>
                            <?php foreach ($object->getErrors('date_finish') as $error): ?>
                                <div class="custom-error-finish"><?= $error ?></div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="sCreateObject__item">
                            <p>Автор</p>
                            <div class="avatar-wrap">
                                <div class="avatar"><span>МИ</span><img src="/web/img/avatar.jpg" alt="" loading="lazy"/>
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
                <a class="sCreateObject__btn btn btn-light" href="<?= Yii::$app->request->referrer ?: Url::to(['/web/site/'])?>">Отмена</a>
            </div>
        </div>
        <?php ActiveForm::end(); ?>
        <!-- end sCreateObject-->
        <div class="close-btn">
            <svg class="icon icon-close ">
                <use xlink:href="/web/img/svg/sprite.svg#close"></use>
            </svg>
        </div>
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