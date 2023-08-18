<?php use yii\widgets\ActiveForm; ?>

<div class="main-center-wrap">
    <main>
        <?= $this->render('_header', compact('flat', 'id')); ?>
        <!-- start sMainInfo-->
        <div class="sMainInfo section" id="sMainInfo">
            <div class="container-fluid">
                <div class="sMainInfo__wrap">
                    <div class="toggle-block swiper freeMode-slider freeMode-slider--js">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a class="toggle-block__btn btn btn-outline-light <? if (Yii::$app->controller->action->id == 'index') {echo "active";} else {echo "";} ?>" href="/web/flat/index/<?= $id ?>">
                                    <svg class="icon icon-list ">
                                        <use xlink:href="/web/img/svg/sprite.svg#list"></use>
                                    </svg>
                                    <span>Список</span>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a class="toggle-block__btn btn btn-outline-light <? if (Yii::$app->controller->action->id == 'task') {echo "active";} else {echo "";} ?>" href="/web/flat/task/<?= $id ?>">
                                    <svg class="icon icon-tasks ">
                                        <use xlink:href="/web/img/svg/sprite.svg#tasks"></use>
                                    </svg>
                                    <span>Задачи</span>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a class="toggle-block__btn btn btn-outline-light <? if (Yii::$app->controller->action->id == 'work-schedule') {echo "active";} else {echo "";} ?>" href="/web/flat/work-schedule/<?= $id ?>">
                                    <svg class="icon icon-gantt ">
                                        <use xlink:href="/web/img/svg/sprite.svg#gantt"></use>
                                    </svg>
                                    <span>График работ</span>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a class="toggle-block__btn btn btn-outline-light <? if (Yii::$app->controller->action->id == 'info') {echo "active";} else {echo "";} ?>" href="/web/flat/info/<?= $id ?>">
                                    <svg class="icon icon-info ">
                                        <use xlink:href="/web/img/svg/sprite.svg#info"></use>
                                    </svg>
                                    <span>Информация</span>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a class="toggle-block__btn btn btn-outline-light <? if (Yii::$app->controller->action->id == 'notes') {echo "active";} else {echo "";} ?>" href="/web/flat/notes/<?= $id ?>">
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
                    <div class="row row--xxl" style="--bs-gutter-y: 18px">
                        <div class="col-md">
                            <h4>Инфо</h4>
                            <table class="table">
                                <tr>
                                    <td>Дата создания</td>
                                    <td class="text-end"><?= Yii::$app->formatter->asDate($flat->date_start); ?></td>
                                </tr>
                                <tr>
                                    <td>Дата окончания</td>
                                    <td class="text-end"><?= Yii::$app->formatter->asDate($flat->date_finish); ?></td>
                                </tr>
                                <tr>
                                    <td>Автор</td>
                                    <td class="text-end">
                                        <div class="row g-2 align-items-center justify-content-end">
                                            <div class="col-auto">
                                                <div class="avatar-block avatar-block--sm" style="background: #467CF4; color: #fff">МИ</div>
                                            </div>
                                            <div class="col-auto"><?= $user->username ?></div>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md">
                            <h4>Описание</h4>
                            <p><?= $flat->description ?></p>
                        </div>
                        <div class="col-xl-4">
                            <h4>Файлы</h4>
                            <?
                                if (!empty($files)) {
                                    foreach ($files as $file) {
                                        echo $this->render('/all_loop/_loop_files', compact('file'));
                                    }
                                };
                            ?>
                            <? $form = ActiveForm::begin(['id' => 'upload-form', 'options' => ['class' => 'upload-field text-primary', 'enctype' => 'multipart/form-data'],]); ?>
                                <label>
                                    <span class="upload-field__btn">
                                        <svg class="icon icon-attach ">
                                            <use xlink:href="/web/img/svg/sprite.svg#attach"></use>
                                        </svg>
                                    </span>
                                    <?= $form->field($add_file, 'file[]')->fileInput(['class' => 'upload-field__input input-upload invisible', 'multiple' => true, 'accept' => 'image/*'])->label(false); ?>
                                    <span class="upload-field__file-name"> Прикрепить файл</span>
                                </label>
                            <? ActiveForm::end(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end sMainInfo-->
    </main>
    <img class="page-bg" src="/web/img/svg/page-bg.svg" alt="" loading="lazy"/>
</div>
