<?php
/** @var TYPE_NAME $object */

?>
<
<div class="main-center-wrap">
    <main>
        <?= $this->render('_header', compact('object', 'id')); ?>
        <!-- start sMainInfo-->
        <div class="sMainInfo section" id="sMainInfo">
            <div class="container-fluid">
                <div class="sMainInfo__wrap">
                    <div class="toggle-block swiper freeMode-slider freeMode-slider--js">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a class="toggle-block__btn btn btn-outline-light <? if (Yii::$app->controller->action->id == 'object') {echo "active";} else {echo "";} ?>" href="/web/site/object/<?= $id ?>">
                                    <svg class="icon icon-list ">
                                        <use xlink:href="/web/img/svg/sprite.svg#list"></use>
                                    </svg>
                                    <span>Список</span>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a class="toggle-block__btn btn btn-outline-light <? if (Yii::$app->controller->action->id == 'task') {echo "active";} else {echo "";} ?>" href="/web/site/task/<?= $id ?>">
                                    <svg class="icon icon-tasks ">
                                        <use xlink:href="/web/img/svg/sprite.svg#tasks"></use>
                                    </svg>
                                    <span>Задачи</span>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a class="toggle-block__btn btn btn-outline-light <? if (Yii::$app->controller->action->id == 'work-schedule') {echo "active";} else {echo "";} ?>" href="/web/site/work-schedule/<?= $id ?>">
                                    <svg class="icon icon-gantt ">
                                        <use xlink:href="/web/img/svg/sprite.svg#gantt"></use>
                                    </svg>
                                    <span>График работ</span>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a class="toggle-block__btn btn btn-outline-light <? if (Yii::$app->controller->action->id == 'info') {echo "active";} else {echo "";} ?>" href="/web/site/info/<?= $id ?>">
                                    <svg class="icon icon-info ">
                                        <use xlink:href="/web/img/svg/sprite.svg#info"></use>
                                    </svg>
                                    <span>Информация</span>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a class="toggle-block__btn btn btn-outline-light <? if (Yii::$app->controller->action->id == 'notes') {echo "active";} else {echo "";} ?>" href="/web/site/notes/<?= $id ?>">
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
                                    <td class="text-end"><?= Yii::$app->formatter->asDate($object->date_start); ?></td>
                                </tr>
                                <tr>
                                    <td>Дата окончания</td>
                                    <td class="text-end"><?= Yii::$app->formatter->asDate($object->date_finish); ?></td>
                                </tr>
                                <tr>
                                    <td>Автор</td>
                                    <td class="text-end">
                                        <div class="row g-2 align-items-center justify-content-end">
                                            <div class="col-auto">
                                                <div class="avatar-block avatar-block--sm"
                                                     style="background: #467CF4; color: #fff">МИ
                                                </div>
                                            </div>
                                            <div class="col-auto">Михаил Иванов</div>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md">
                            <h4>Описание</h4>
                            <p><?= $object->description ?></p>
                        </div>
                        <div class="col-xl-4">
                            <h4>Файлы</h4>
                            <div class="file-item">
                                <a class="file-item__name" href="#">Сметная документация.xlsx
                                </a>
                                <div class="file-item__size">14 мб
                                </div>
                                <div class="file-item__btn-delete">
                                    <svg class="icon icon-delete ">
                                        <use xlink:href="/web/img/svg/sprite.svg#delete"></use>
                                    </svg>
                                </div>
                            </div>
                            <div class="file-item">
                                <a class="file-item__name" href="#">Генплан.pdf
                                </a>
                                <div class="file-item__size">14 мб
                                </div>
                                <div class="file-item__btn-delete">
                                    <svg class="icon icon-delete ">
                                        <use xlink:href="/web/img/svg/sprite.svg#delete"></use>
                                    </svg>
                                </div>
                            </div>
                            <div class="file-item">
                                <a class="file-item__name" href="#">Генплан2.pdf
                                </a>
                                <div class="file-item__size">14 мб
                                </div>
                                <div class="file-item__btn-delete">
                                    <svg class="icon icon-delete ">
                                        <use xlink:href="/web/img/svg/sprite.svg#delete"></use>
                                    </svg>
                                </div>
                            </div>
                            <div class="upload-field text-primary">
                                <label><span class="upload-field__btn">
												<svg class="icon icon-attach ">
													<use xlink:href="/web/img/svg/sprite.svg#attach"></use>
												</svg></span><input class="upload-field__input input-upload invisible"
                                                                    name="file" type="file"/><span
                                            class="upload-field__file-name"> Прикрепить файл</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end sMainInfo-->
    </main>
    <img class="page-bg" src="/web/img/svg/page-bg.svg" alt="" loading="lazy"/>
</div>
