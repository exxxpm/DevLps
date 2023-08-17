<div class="main-center-wrap">
    <main>
        <?= $this->render('_header', compact('flat', 'floor', 'entrance', 'home','object', 'id')); ?>
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
                <div class="main-table">
                    <table>
                        <thead>
                        <tr>
                            <th>Объект</th>
                            <th>Под</th>
                            <th>Эт</th>
                            <th>Кв</th>
                            <th>Пом</th>
                            <th>Площ</th>
                            <th>Задачи</th>
                            <th>Прогресс</th>
                            <th>Сроки</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="add-more" colspan="9">
                                <a class="main-table__add-new" href="/web/room/add/<?= $id ?>">
                                    <svg class="icon icon-add ">
                                        <use xlink:href="/web/img/svg/sprite.svg#add"></use>
                                    </svg>Добавить помещение
                                </a>
                            </td>
                        </tr>
                        <?
                            if (!empty($rooms)) {
                                foreach ($rooms as $room) {
                                    echo $this->render('_loop_room', compact('room', 'id'));
                                }
                            };
                        ?>
                        </tbody>
                    </table>
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
                    </svg><span>Изменить</span>
                </a>
            </div>
            <div class="col-auto">
                <a class="bottom-control-bar__btn btn btn-dark" href="#">
                    <svg class="icon icon-copy ">
                        <use xlink:href="/web/img/svg/sprite.svg#copy"></use>
                    </svg><span>Дублировать</span>
                </a>
            </div>
            <div class="col-auto">
                <a class="bottom-control-bar__btn bottom-control-bar__btn--delete btn btn-dark" href="#">
                    <svg class="icon icon-delete ">
                        <use xlink:href="/web/img/svg/sprite.svg#delete"></use>
                    </svg><span>Удалить</span>
                </a>
            </div>
        </div>
    </div><img class="page-bg" src="/web/img/svg/page-bg.svg" alt="" loading="lazy" />
</div>