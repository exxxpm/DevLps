<?php
/** @var TYPE_NAME $object */
use \yii\widgets\ActiveForm;
?>

<div class="main-center-wrap">
    <main>
        <?= $this->render('_header', compact('object')); ?>
        <!-- start sMainInfo-->
        <div class="sMainInfo section" id="sMainInfo">
            <div class="container-fluid">
                <div class="sMainInfo__wrap">
                    <div class="toggle-block swiper freeMode-slider freeMode-slider--js">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a class="toggle-block__btn btn btn-outline-light <? if (Yii::$app->controller->action->id == 'object') {
                                    echo "active";
                                } else {
                                    echo "";
                                } ?>" href="/web/site/object/<?= $id ?>">
                                    <svg class="icon icon-list ">
                                        <use xlink:href="/web/img/svg/sprite.svg#list"></use>
                                    </svg>
                                    <span>Список</span>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a class="toggle-block__btn btn btn-outline-light <? if (Yii::$app->controller->action->id == 'task') {
                                    echo "active";
                                } else {
                                    echo "";
                                } ?>" href="/web/site/task/<?= $id ?>">
                                    <svg class="icon icon-tasks ">
                                        <use xlink:href="/web/img/svg/sprite.svg#tasks"></use>
                                    </svg>
                                    <span>Задачи</span>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a class="toggle-block__btn btn btn-outline-light <? if (Yii::$app->controller->action->id == 'work-schedule') {
                                    echo "active";
                                } else {
                                    echo "";
                                } ?>" href="/web/site/work-schedule/<?= $id ?>">
                                    <svg class="icon icon-gantt ">
                                        <use xlink:href="/web/img/svg/sprite.svg#gantt"></use>
                                    </svg>
                                    <span>График работ</span>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a class="toggle-block__btn btn btn-outline-light <? if (Yii::$app->controller->action->id == 'info') {
                                    echo "active";
                                } else {
                                    echo "";
                                } ?>" href="/web/site/info/<?= $id ?>">
                                    <svg class="icon icon-info ">
                                        <use xlink:href="/web/img/svg/sprite.svg#info"></use>
                                    </svg>
                                    <span>Информация</span>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a class="toggle-block__btn btn btn-outline-light <? if (Yii::$app->controller->action->id == 'notes') {
                                    echo "active";
                                } else {
                                    echo "";
                                } ?>" href="/web/site/notes/<?= $id ?>">
                                    <svg class="icon icon-pen ">
                                        <use xlink:href="/web/img/svg/sprite.svg#pen"></use>
                                    </svg>
                                    <span>Заметки</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <h4 class="mb-4">Заметки</h4>
                    <div class="note-block">
                        <div class="note-block__head">
                            <?
                                $form = ActiveForm::begin([
                                    'options' => [
                                        'class' => 'row',
                                        'style' => '--bs-gutter-x:12px',
                                        'enctype' => 'multipart/form-data'
                                    ],
                                ]);
                                ?>
                                    <div class="col-auto">
                                        <div class="avatar-block avatar-block--sm" style="background: #467CF4; color: #fff">
                                            <span>МИ</span>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="note-block__input-wrap">
                                            <?= $form->field($add_form, 'message')->textarea(['class' => 'form-control', 'placeholder' => 'Написать заметку'])->label(false); ?>
                                            <button>
                                                <svg class="icon icon-submit ">
                                                    <use xlink:href="/web/img/svg/sprite.svg#submit"></use>
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="upload-field text-primary">
                                            <label>
                                                <span class="upload-field__btn"> <svg class="icon icon-attach "> <use xlink:href="/web/img/svg/sprite.svg#attach"></use> </svg></span>
                                                <?= $form->field($add_file, 'file')->fileInput(['class' => 'upload-field__input input-upload invisible'])->label(false); ?>
                                                <span class="upload-field__file-name"> Прикрепить файл</span>
                                            </label>
                                        </div>
                                    </div>
                                <?
                                ActiveForm::end();
                            ?>
                        </div>
                        <div class="note-block__body">
                            <?
                            if (!empty($notes)) {
                                foreach ($notes as $note) {
                                    echo $this->render('_loop_notes', compact('note'));
                                }
                            };
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end sMainInfo-->
    </main>
    <div class="bottom-control-bar">
        <div class="row">
            <div class="col me-auto">
                <p>Выбрано: <span></span> элемент(–ов)</p>
            </div>
            <div class="col-auto">
                <a class="bottom-control-bar__btn btn btn-dark" href="#">
                    <svg class="icon icon-edit ">
                        <use xlink:href="/web/img/svg/sprite.svg#edit"></use>
                    </svg>
                    <span>Изменить</span>
                </a>
            </div>
            <div class="col-auto">
                <a class="bottom-control-bar__btn btn btn-dark" href="#">
                    <svg class="icon icon-copy ">
                        <use xlink:href="/web/img/svg/sprite.svg#copy"></use>
                    </svg>
                    <span>Дублировать</span>
                </a>
            </div>
            <div class="col-auto">
                <a class="bottom-control-bar__btn bottom-control-bar__btn--delete btn btn-dark" href="#">
                    <svg class="icon icon-delete ">
                        <use xlink:href="/web/img/svg/sprite.svg#delete"></use>
                    </svg>
                    <span>Удалить</span>
                </a>
            </div>
        </div>
    </div>
    <img class="page-bg" src="/web/img/svg/page-bg.svg" alt="" loading="lazy"/>
</div>
