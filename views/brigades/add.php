<?
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
?>

<main>
    <!-- start sCreateObject-->
    <?php $form = ActiveForm::begin([
        'options' => ['class' => 'sCreateObject', 'id' => 'sCreateObject', 'enableClientValidation' => false],
        'fieldConfig' => [
            'template' => "{label}\n{input}\n{hint}\n{error}",
        ],
    ]); ?>
    <div class="sCreateObject__body">
        <div class="sCreateObject__left-side">
            <h2>Создание бригады</h2>
            <div class="form-wrap">
                <div class="form-wrap__edit-row row">
                    <div class="col-12">
                        <?= $form->field($add_brigades, 'name', ['template' => ' <div class="custom-input-wrap form-group">{input}<div class="custom-input-wrap__line"></div>{hint}{error}</div>'])->textInput(['class' => 'custom-input-wrap__input form-control', 'placeholder' => 'Введите название'])->label(false); ?>
                    </div>
                    <div class="col-12">
                        <div class="form-wrap__wrap">
                            <h4>Информация</h4>
                            <div class="row">
                                <div class="form-wrap__title-col col-md-auto">Поверхность</div>
                                <div class="col-md">
                                    <?
                                        $options = [];
                                        foreach ($surfaces as $surface){
                                            $options[$surface->id] = $surface->name;
                                        }
                                    ?>
                                    <?= $form->field($add_brigades, 'surfaces', ['template' => '{input}'])->checkboxList(
                                        $options,
                                        [
                                            'item' => function ($index, $label, $name, $checked, $value) {
                                                return "<label class='custom-input form-check'>" .
                                                    Html::checkbox($name, $checked, [
                                                        'class' => 'custom-input__input form-check-input',
                                                        'value' => $value,
                                                    ]) .
                                                    "<span class='custom-input__text form-check-label'>$label</span></label>";
                                            },
                                            'class' => 'in-one-row',
                                            'tag' => 'ul',
                                        ]
                                    ) ?>

                                </div>
                            </div>
                            <div class="row">
                                <div class="form-wrap__title-col col-md-auto">Наименование работ</div>
                                <div class="col-md">
                                    <?
                                    $options = [];
                                    foreach ($works as $work){
                                        $options[$work->id] = $work->name;
                                    }
                                    ?>
                                    <?= $form->field($add_brigades, 'works', ['template' => '{input}'])->checkboxList(
                                        $options,
                                        [
                                            'item' => function ($index, $label, $name, $checked, $value) {
                                                return "<label class='custom-input form-check'>" .
                                                    Html::checkbox($name, $checked, [
                                                        'class' => 'custom-input__input form-check-input',
                                                        'value' => $value,
                                                    ]) .
                                                    "<span class='custom-input__text form-check-label'>$label</span></label>";
                                            },
                                            'class' => 'in-one-row',
                                            'tag' => 'ul',
                                        ]
                                    ) ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-wrap__wrap" id="workers_container">
                            <h4>Работники</h4>
                            <div class="row" id="workers_card">
                                <div class="form-wrap__title-col col-md-auto">
                                    <span id="worker_title"> Работник 1 </span>
                                </div>
                                <div class="col-md">
                                    <div class="form-wrap__worker-wrap">
                                        <div class="form-wrap__input-wrap form-group">
                                            <?= $form->field($add_brigades, 'names[]', ['template' => "{label}\n{input}\n<span class=\"form-wrap__input-title\">ФИО</span>\n{hint}\n{error}"])->textInput(['class' => 'form-wrap__input form-control', 'placeholder' => 'ФИО'])->label(false); ?>
                                        </div>
                                        <div class="form-wrap__input-wrap form-group">
                                            <?= $form->field($add_brigades, 'phones[]', ['template' => "{label}\n{input}\n<span class=\"form-wrap__input-title\">Телефон</span>\n{hint}\n{error}"])->textInput(['class' => 'form-wrap__input form-control', 'placeholder' => 'Телефон'])->label(false); ?>
                                        </div>
                                    </div>
                                    <a class="form-wrap__add-new" href="#">
                                        <svg class="icon icon-add ">
                                            <use xlink:href="/web/img/svg/sprite.svg#add"></use>
                                        </svg>
                                        Добавить работника
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sCreateObject__footer">
        <div class="sCreateObject__footer-row">
            <?= Html::submitButton('Сохранить изменения', ['class' => 'sCreateObject__btn btn btn-accent'])?>
            <a class="sCreateObject__btn btn btn-light" href="/web/brigades/index">Отмена</a>
        </div>
    </div>
    <? ActiveForm::end(); ?>
    <a href="/web/brigades/index" class="close-btn">
        <svg class="icon icon-close ">
            <use xlink:href="/web/img/svg/sprite.svg#close"></use>
        </svg>
    </a>
</main>