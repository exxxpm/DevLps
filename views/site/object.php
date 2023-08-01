<?php
/** @var TYPE_NAME $object */
?>

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
                                <a class="main-table__add-new" href="#">
                                    <svg class="icon icon-add ">
                                        <use xlink:href="/web/img/svg/sprite.svg#add"></use>
                                    </svg>
                                    Добавить дом
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="main-table__title">
                                    <a class="main-table__toggle-dropdown" href="#">
                                        <svg class="icon icon-chevron-right ">
                                            <use xlink:href="/web/img/svg/sprite.svg#chevron-right"></use>
                                        </svg>
                                    </a>
                                    <label class="custom-input form-check"><input
                                                class="custom-input__input form-check-input" name="checkbox"
                                                type="checkbox"/>
                                    </label><a class="h3" href="#">1. Дом №1</a>
                                </div>
                            </td>
                            <td>3</td>
                            <td>-</td>
                            <td>130</td>
                            <td>268</td>
                            <td>1300 м²</td>
                            <td>
                                <div class="main-table__goals"><img src="/web/img/svg/fist.svg" alt=""
                                                                    loading="lazy"/><span>321</span>/433
                                </div>
                            </td>
                            <td>
                                <div class="main-table__progress"><img src="/web/img/svg/finish.svg" alt=""
                                                                       loading="lazy"/>67%
                                </div>
                            </td>
                            <td>11 ноя 23 – 11 фев 24</td>
                        <tr class="inner-level">
                            <td colspan="9">
                                <div>
                                    <table>
                                        <tr>
                                            <td class="add-more" colspan="9">
                                                <a class="main-table__add-new" href="#">
                                                    <svg class="icon icon-add ">
                                                        <use xlink:href="/web/img/svg/sprite.svg#add"></use>
                                                    </svg>
                                                    Добавить подъезд
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="main-table__title">
                                                    <a class="main-table__toggle-dropdown" href="#">
                                                        <svg class="icon icon-chevron-right ">
                                                            <use xlink:href="/web/img/svg/sprite.svg#chevron-right">
                                                            </use>
                                                        </svg>
                                                    </a>
                                                    <label class="custom-input form-check"><input
                                                                class="custom-input__input form-check-input"
                                                                name="checkbox" type="checkbox"/>
                                                    </label><a href="#">2.1. Подъезд №1</a>
                                                </div>
                                            </td>
                                            <td>-</td>
                                            <td>12</td>
                                            <td>36</td>
                                            <td>104</td>
                                            <td>696 м²</td>
                                            <td>
                                                <div class="main-table__goals"><img src="/web/img/svg/fist.svg" alt=""
                                                                                    loading="lazy"/><span>321</span>/433
                                                </div>
                                            </td>
                                            <td>
                                                <div class="main-table__progress"><img src="/web/img/svg/finish.svg"
                                                                                       alt="" loading="lazy"/>59%
                                                </div>
                                            </td>
                                            <td>15 ноя 23 – 10 фев 24</td>
                                        <tr class="inner-level">
                                            <td colspan="9">
                                                <div>
                                                    <table>
                                                        <tr>
                                                            <td class="add-more" colspan="9">
                                                                <a class="main-table__add-new" href="#">
                                                                    <svg class="icon icon-add ">
                                                                        <use xlink:href="/web/img/svg/sprite.svg#add">
                                                                        </use>
                                                                    </svg>
                                                                    Добавить этаж
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="main-table__title">
                                                                    <a class="main-table__toggle-dropdown" href="#">
                                                                        <svg class="icon icon-chevron-right ">
                                                                            <use
                                                                                    xlink:href="/web/img/svg/sprite.svg#chevron-right">
                                                                            </use>
                                                                        </svg>
                                                                    </a>
                                                                    <label class="custom-input form-check"><input
                                                                                class="custom-input__input form-check-input"
                                                                                name="checkbox" type="checkbox"/>
                                                                    </label><a href="#">2.2.1. Этаж №1</a>
                                                                </div>
                                                            </td>
                                                            <td>-</td>
                                                            <td>-</td>
                                                            <td>16</td>
                                                            <td>66</td>
                                                            <td>436 м²</td>
                                                            <td>
                                                                <div class="main-table__goals"><img
                                                                            src="/web/img/svg/fist.svg" alt=""
                                                                            loading="lazy"/><span>81</span>/441
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="main-table__progress"><img
                                                                            src="/web/img/svg/finish.svg" alt=""
                                                                            loading="lazy"/>56%
                                                                </div>
                                                            </td>
                                                            <td>15 ноя 23 – 10 фев 24</td>
                                                        <tr class="inner-level">
                                                            <td colspan="9">
                                                                <div>
                                                                    <table>
                                                                        <tr>
                                                                            <td class="add-more" colspan="9">
                                                                                <a class="main-table__add-new"
                                                                                   href="#">
                                                                                    <svg class="icon icon-add ">
                                                                                        <use
                                                                                                xlink:href="/web/img/svg/sprite.svg#add">
                                                                                        </use>
                                                                                    </svg>
                                                                                    Добавить квартиру
                                                                                </a>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="main-table__title">
                                                                                    <a class="main-table__toggle-dropdown"
                                                                                       href="#">
                                                                                        <svg
                                                                                                class="icon icon-chevron-right ">
                                                                                            <use
                                                                                                    xlink:href="/web/img/svg/sprite.svg#chevron-right">
                                                                                            </use>
                                                                                        </svg>
                                                                                    </a>
                                                                                    <label
                                                                                            class="custom-input form-check"><input
                                                                                                class="custom-input__input form-check-input"
                                                                                                name="checkbox"
                                                                                                type="checkbox"/>
                                                                                    </label><a href="#">2.2.2.1.
                                                                                        Квартира №27</a>
                                                                                </div>
                                                                            </td>
                                                                            <td>-</td>
                                                                            <td>-</td>
                                                                            <td>-</td>
                                                                            <td>120</td>
                                                                            <td>426 м²</td>
                                                                            <td>
                                                                                <div class="main-table__goals"><img
                                                                                            src="/web/img/svg/fist.svg"
                                                                                            alt=""
                                                                                            loading="lazy"/><span>15</span>/45
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="main-table__progress">
                                                                                    <img src="/web/img/svg/finish.svg"
                                                                                         alt="" loading="lazy"/>19%
                                                                                </div>
                                                                            </td>
                                                                            <td>15 ноя 23 – 10 фев 24</td>
                                                                        <tr class="inner-level">
                                                                            <td colspan="9">
                                                                                <div>
                                                                                    <table>
                                                                                        <tr>
                                                                                            <td class="add-more"
                                                                                                colspan="9">
                                                                                                <a class="main-table__add-new"
                                                                                                   href="#">
                                                                                                    <svg
                                                                                                            class="icon icon-add ">
                                                                                                        <use
                                                                                                                xlink:href="/web/img/svg/sprite.svg#add">
                                                                                                        </use>
                                                                                                    </svg>
                                                                                                    Добавить
                                                                                                    помещение
                                                                                                </a>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>
                                                                                                <div
                                                                                                        class="main-table__title">
                                                                                                    <label
                                                                                                            class="custom-input form-check"><input
                                                                                                                class="custom-input__input form-check-input"
                                                                                                                name="checkbox"
                                                                                                                type="checkbox"/>
                                                                                                    </label><a
                                                                                                            href="#">2.2.2.2.1.
                                                                                                        Кухня</a>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td>-</td>
                                                                                            <td>-</td>
                                                                                            <td>-</td>
                                                                                            <td>-</td>
                                                                                            <td>546 м²</td>
                                                                                            <td>
                                                                                                <div
                                                                                                        class="main-table__goals">
                                                                                                    <img src="/web/img/svg/fist.svg"
                                                                                                         alt=""
                                                                                                         loading="lazy"/><span>321</span>/433
                                                                                                </div>
                                                                                            </td>
                                                                                            <td>
                                                                                                <div
                                                                                                        class="main-table__progress">
                                                                                                    <img src="/web/img/svg/finish.svg"
                                                                                                         alt=""
                                                                                                         loading="lazy"/>90%
                                                                                                </div>
                                                                                            </td>
                                                                                            <td>15 ноя 23 – 10 фев
                                                                                                24
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>
                                                                                                <div
                                                                                                        class="main-table__title">
                                                                                                    <label
                                                                                                            class="custom-input form-check"><input
                                                                                                                class="custom-input__input form-check-input"
                                                                                                                name="checkbox"
                                                                                                                type="checkbox"/>
                                                                                                    </label><a
                                                                                                            href="#">2.2.2.2.1.
                                                                                                        Санузел</a>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td>-</td>
                                                                                            <td>-</td>
                                                                                            <td>-</td>
                                                                                            <td>-</td>
                                                                                            <td>546 м²</td>
                                                                                            <td>
                                                                                                <div
                                                                                                        class="main-table__goals">
                                                                                                    <img src="/web/img/svg/fist.svg"
                                                                                                         alt=""
                                                                                                         loading="lazy"/><span>321</span>/433
                                                                                                </div>
                                                                                            </td>
                                                                                            <td>
                                                                                                <div
                                                                                                        class="main-table__progress">
                                                                                                    <img src="/web/img/svg/finish.svg"
                                                                                                         alt=""
                                                                                                         loading="lazy"/>90%
                                                                                                </div>
                                                                                            </td>
                                                                                            <td>15 ноя 23 – 10 фев
                                                                                                24
                                                                                            </td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="main-table__title">
                                                                    <a class="main-table__toggle-dropdown" href="#">
                                                                        <svg class="icon icon-chevron-right ">
                                                                            <use
                                                                                    xlink:href="/web/img/svg/sprite.svg#chevron-right">
                                                                            </use>
                                                                        </svg>
                                                                    </a>
                                                                    <label class="custom-input form-check"><input
                                                                                class="custom-input__input form-check-input"
                                                                                name="checkbox" type="checkbox"/>
                                                                    </label><a href="#">2.2.2.1. Квартира №27</a>
                                                                </div>
                                                            </td>
                                                            <td>-</td>
                                                            <td>-</td>
                                                            <td>-</td>
                                                            <td>120</td>
                                                            <td>426 м²</td>
                                                            <td>
                                                                <div class="main-table__goals"><img
                                                                            src="/web/img/svg/fist.svg" alt=""
                                                                            loading="lazy"/><span>15</span>/45
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="main-table__progress"><img
                                                                            src="/web/img/svg/finish.svg" alt=""
                                                                            loading="lazy"/>19%
                                                                </div>
                                                            </td>
                                                            <td>15 ноя 23 – 10 фев 24</td>
                                                        <tr class="inner-level">
                                                            <td colspan="9">
                                                                <div>
                                                                    <table>
                                                                        <tr>
                                                                            <td class="add-more" colspan="9">
                                                                                <a class="main-table__add-new"
                                                                                   href="#">
                                                                                    <svg class="icon icon-add ">
                                                                                        <use
                                                                                                xlink:href="/web/img/svg/sprite.svg#add">
                                                                                        </use>
                                                                                    </svg>
                                                                                    Добавить помещение
                                                                                </a>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="main-table__title">
                                                                                    <label
                                                                                            class="custom-input form-check"><input
                                                                                                class="custom-input__input form-check-input"
                                                                                                name="checkbox"
                                                                                                type="checkbox"/>
                                                                                    </label><a href="#">2.2.2.2.1.
                                                                                        Кухня</a>
                                                                                </div>
                                                                            </td>
                                                                            <td>-</td>
                                                                            <td>-</td>
                                                                            <td>-</td>
                                                                            <td>-</td>
                                                                            <td>546 м²</td>
                                                                            <td>
                                                                                <div class="main-table__goals"><img
                                                                                            src="/web/img/svg/fist.svg"
                                                                                            alt=""
                                                                                            loading="lazy"/><span>321</span>/433
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="main-table__progress">
                                                                                    <img src="/web/img/svg/finish.svg"
                                                                                         alt="" loading="lazy"/>90%
                                                                                </div>
                                                                            </td>
                                                                            <td>15 ноя 23 – 10 фев 24</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="main-table__title">
                                                                                    <label
                                                                                            class="custom-input form-check"><input
                                                                                                class="custom-input__input form-check-input"
                                                                                                name="checkbox"
                                                                                                type="checkbox"/>
                                                                                    </label><a href="#">2.2.2.2.1.
                                                                                        Санузел</a>
                                                                                </div>
                                                                            </td>
                                                                            <td>-</td>
                                                                            <td>-</td>
                                                                            <td>-</td>
                                                                            <td>-</td>
                                                                            <td>546 м²</td>
                                                                            <td>
                                                                                <div class="main-table__goals"><img
                                                                                            src="/web/img/svg/fist.svg"
                                                                                            alt=""
                                                                                            loading="lazy"/><span>321</span>/433
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="main-table__progress">
                                                                                    <img src="/web/img/svg/finish.svg"
                                                                                         alt="" loading="lazy"/>90%
                                                                                </div>
                                                                            </td>
                                                                            <td>15 ноя 23 – 10 фев 24</td>
                                                                        </tr>
                                                                    </table>
                                                                </div>
                                                            </td>
                                                        </tr>
                                        </tr>
                                    </table>
                                </div>
                            </td>
                        </tr>
                        </tr>
                    </table>
                </div>
                </td>
                </tr>
                </tr>
                <tr>
                    <td>
                        <div class="main-table__title">
                            <a class="main-table__toggle-dropdown" href="#">
                                <svg class="icon icon-chevron-right ">
                                    <use xlink:href="/web/img/svg/sprite.svg#chevron-right"></use>
                                </svg>
                            </a>
                            <label class="custom-input form-check"><input class="custom-input__input form-check-input"
                                                                          name="checkbox" type="checkbox"/>
                            </label><a href="#">2.1. Подъезд №2</a>
                        </div>
                    </td>
                    <td>-</td>
                    <td>12</td>
                    <td>36</td>
                    <td>104</td>
                    <td>696 м²</td>
                    <td>
                        <div class="main-table__goals"><img src="/web/img/svg/fist.svg" alt=""
                                                            loading="lazy"/><span>321</span>/433
                        </div>
                    </td>
                    <td>
                        <div class="main-table__progress"><img src="/web/img/svg/finish.svg" alt="" loading="lazy"/>59%
                        </div>
                    </td>
                    <td>15 ноя 23 – 10 фев 24</td>
                <tr class="inner-level">
                    <td colspan="9">
                        <div>
                            <table>
                                <tr>
                                    <td class="add-more" colspan="9">
                                        <a class="main-table__add-new" href="#">
                                            <svg class="icon icon-add ">
                                                <use xlink:href="/web/img/svg/sprite.svg#add"></use>
                                            </svg>
                                            Добавить этаж
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="main-table__title">
                                            <a class="main-table__toggle-dropdown" href="#">
                                                <svg class="icon icon-chevron-right ">
                                                    <use xlink:href="/web/img/svg/sprite.svg#chevron-right"></use>
                                                </svg>
                                            </a>
                                            <label class="custom-input form-check"><input
                                                        class="custom-input__input form-check-input" name="checkbox"
                                                        type="checkbox"/>
                                            </label><a href="#">2.2.1. Этаж №1</a>
                                        </div>
                                    </td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>16</td>
                                    <td>66</td>
                                    <td>436 м²</td>
                                    <td>
                                        <div class="main-table__goals"><img src="/web/img/svg/fist.svg" alt=""
                                                                            loading="lazy"/><span>81</span>/441
                                        </div>
                                    </td>
                                    <td>
                                        <div class="main-table__progress"><img src="/web/img/svg/finish.svg" alt=""
                                                                               loading="lazy"/>56%
                                        </div>
                                    </td>
                                    <td>15 ноя 23 – 10 фев 24</td>
                                <tr class="inner-level">
                                    <td colspan="9">
                                        <div>
                                            <table>
                                                <tr>
                                                    <td class="add-more" colspan="9">
                                                        <a class="main-table__add-new" href="#">
                                                            <svg class="icon icon-add ">
                                                                <use xlink:href="/web/img/svg/sprite.svg#add"></use>
                                                            </svg>
                                                            Добавить квартиру
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="main-table__title">
                                                            <a class="main-table__toggle-dropdown" href="#">
                                                                <svg class="icon icon-chevron-right ">
                                                                    <use xlink:href="/web/img/svg/sprite.svg#chevron-right">
                                                                    </use>
                                                                </svg>
                                                            </a>
                                                            <label class="custom-input form-check"><input
                                                                        class="custom-input__input form-check-input"
                                                                        name="checkbox" type="checkbox"/>
                                                            </label><a href="#">2.2.2.1. Квартира №27</a>
                                                        </div>
                                                    </td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>120</td>
                                                    <td>426 м²</td>
                                                    <td>
                                                        <div class="main-table__goals"><img src="/web/img/svg/fist.svg"
                                                                                            alt=""
                                                                                            loading="lazy"/><span>15</span>/45
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="main-table__progress"><img
                                                                    src="/web/img/svg/finish.svg"
                                                                    alt="" loading="lazy"/>19%
                                                        </div>
                                                    </td>
                                                    <td>15 ноя 23 – 10 фев 24</td>
                                                <tr class="inner-level">
                                                    <td colspan="9">
                                                        <div>
                                                            <table>
                                                                <tr>
                                                                    <td class="add-more" colspan="9">
                                                                        <a class="main-table__add-new" href="#">
                                                                            <svg class="icon icon-add ">
                                                                                <use
                                                                                        xlink:href="/web/img/svg/sprite.svg#add">
                                                                                </use>
                                                                            </svg>
                                                                            Добавить помещение
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="main-table__title">
                                                                            <label
                                                                                    class="custom-input form-check"><input
                                                                                        class="custom-input__input form-check-input"
                                                                                        name="checkbox"
                                                                                        type="checkbox"/>
                                                                            </label><a href="#">2.2.2.2.1. Кухня</a>
                                                                        </div>
                                                                    </td>
                                                                    <td>-</td>
                                                                    <td>-</td>
                                                                    <td>-</td>
                                                                    <td>-</td>
                                                                    <td>546 м²</td>
                                                                    <td>
                                                                        <div class="main-table__goals"><img
                                                                                    src="/web/img/svg/fist.svg" alt=""
                                                                                    loading="lazy"/><span>321</span>/433
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="main-table__progress"><img
                                                                                    src="/web/img/svg/finish.svg" alt=""
                                                                                    loading="lazy"/>90%
                                                                        </div>
                                                                    </td>
                                                                    <td>15 ноя 23 – 10 фев 24</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="main-table__title">
                                                                            <label
                                                                                    class="custom-input form-check"><input
                                                                                        class="custom-input__input form-check-input"
                                                                                        name="checkbox"
                                                                                        type="checkbox"/>
                                                                            </label><a href="#">2.2.2.2.1. Санузел</a>
                                                                        </div>
                                                                    </td>
                                                                    <td>-</td>
                                                                    <td>-</td>
                                                                    <td>-</td>
                                                                    <td>-</td>
                                                                    <td>546 м²</td>
                                                                    <td>
                                                                        <div class="main-table__goals"><img
                                                                                    src="/web/img/svg/fist.svg" alt=""
                                                                                    loading="lazy"/><span>321</span>/433
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="main-table__progress"><img
                                                                                    src="/web/img/svg/finish.svg" alt=""
                                                                                    loading="lazy"/>90%
                                                                        </div>
                                                                    </td>
                                                                    <td>15 ноя 23 – 10 фев 24</td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </td>
                                                </tr>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="main-table__title">
                                            <a class="main-table__toggle-dropdown" href="#">
                                                <svg class="icon icon-chevron-right ">
                                                    <use xlink:href="/web/img/svg/sprite.svg#chevron-right"></use>
                                                </svg>
                                            </a>
                                            <label class="custom-input form-check"><input
                                                        class="custom-input__input form-check-input" name="checkbox"
                                                        type="checkbox"/>
                                            </label><a href="#">2.2.2.1. Квартира №27</a>
                                        </div>
                                    </td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>120</td>
                                    <td>426 м²</td>
                                    <td>
                                        <div class="main-table__goals"><img src="/web/img/svg/fist.svg" alt=""
                                                                            loading="lazy"/><span>15</span>/45
                                        </div>
                                    </td>
                                    <td>
                                        <div class="main-table__progress"><img src="/web/img/svg/finish.svg" alt=""
                                                                               loading="lazy"/>19%
                                        </div>
                                    </td>
                                    <td>15 ноя 23 – 10 фев 24</td>
                                <tr class="inner-level">
                                    <td colspan="9">
                                        <div>
                                            <table>
                                                <tr>
                                                    <td class="add-more" colspan="9">
                                                        <a class="main-table__add-new" href="#">
                                                            <svg class="icon icon-add ">
                                                                <use xlink:href="/web/img/svg/sprite.svg#add"></use>
                                                            </svg>
                                                            Добавить помещение
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="main-table__title">
                                                            <label class="custom-input form-check"><input
                                                                        class="custom-input__input form-check-input"
                                                                        name="checkbox" type="checkbox"/>
                                                            </label><a href="#">2.2.2.2.1. Кухня</a>
                                                        </div>
                                                    </td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>546 м²</td>
                                                    <td>
                                                        <div class="main-table__goals"><img src="/web/img/svg/fist.svg"
                                                                                            alt=""
                                                                                            loading="lazy"/><span>321</span>/433
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="main-table__progress"><img
                                                                    src="/web/img/svg/finish.svg"
                                                                    alt="" loading="lazy"/>90%
                                                        </div>
                                                    </td>
                                                    <td>15 ноя 23 – 10 фев 24</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="main-table__title">
                                                            <label class="custom-input form-check"><input
                                                                        class="custom-input__input form-check-input"
                                                                        name="checkbox" type="checkbox"/>
                                                            </label><a href="#">2.2.2.2.1. Санузел</a>
                                                        </div>
                                                    </td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>546 м²</td>
                                                    <td>
                                                        <div class="main-table__goals"><img src="/web/img/svg/fist.svg"
                                                                                            alt=""
                                                                                            loading="lazy"/><span>321</span>/433
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="main-table__progress"><img
                                                                    src="/web/img/svg/finish.svg"
                                                                    alt="" loading="lazy"/>90%
                                                        </div>
                                                    </td>
                                                    <td>15 ноя 23 – 10 фев 24</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </td>
                                </tr>
                </tr>
                </table>
            </div>
            </td>
            </tr>
            </tr>
            <tr>
                <td>
                    <div class="main-table__title">
                        <a class="main-table__toggle-dropdown" href="#">
                            <svg class="icon icon-chevron-right ">
                                <use xlink:href="/web/img/svg/sprite.svg#chevron-right"></use>
                            </svg>
                        </a>
                        <label class="custom-input form-check"><input class="custom-input__input form-check-input"
                                                                      name="checkbox" type="checkbox"/>
                        </label><a href="#">2.2.1. Этаж №2</a>
                    </div>
                </td>
                <td>-</td>
                <td>-</td>
                <td>16</td>
                <td>66</td>
                <td>436 м²</td>
                <td>
                    <div class="main-table__goals"><img src="/web/img/svg/fist.svg" alt=""
                                                        loading="lazy"/><span>81</span>/441
                    </div>
                </td>
                <td>
                    <div class="main-table__progress"><img src="/web/img/svg/finish.svg" alt="" loading="lazy"/>56%
                    </div>
                </td>
                <td>15 ноя 23 – 10 фев 24</td>
            <tr class="inner-level">
                <td colspan="9">
                    <div>
                        <table>
                            <tr>
                                <td class="add-more" colspan="9">
                                    <a class="main-table__add-new" href="#">
                                        <svg class="icon icon-add ">
                                            <use xlink:href="/web/img/svg/sprite.svg#add"></use>
                                        </svg>
                                        Добавить квартиру
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="main-table__title">
                                        <a class="main-table__toggle-dropdown" href="#">
                                            <svg class="icon icon-chevron-right ">
                                                <use xlink:href="/web/img/svg/sprite.svg#chevron-right"></use>
                                            </svg>
                                        </a>
                                        <label class="custom-input form-check"><input
                                                    class="custom-input__input form-check-input" name="checkbox"
                                                    type="checkbox"/>
                                        </label><a href="#">2.2.2.1. Квартира №27</a>
                                    </div>
                                </td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>120</td>
                                <td>426 м²</td>
                                <td>
                                    <div class="main-table__goals"><img src="/web/img/svg/fist.svg" alt=""
                                                                        loading="lazy"/><span>15</span>/45
                                    </div>
                                </td>
                                <td>
                                    <div class="main-table__progress"><img src="/web/img/svg/finish.svg" alt=""
                                                                           loading="lazy"/>19%
                                    </div>
                                </td>
                                <td>15 ноя 23 – 10 фев 24</td>
                            <tr class="inner-level">
                                <td colspan="9">
                                    <div>
                                        <table>
                                            <tr>
                                                <td class="add-more" colspan="9">
                                                    <a class="main-table__add-new" href="#">
                                                        <svg class="icon icon-add ">
                                                            <use xlink:href="/web/img/svg/sprite.svg#add"></use>
                                                        </svg>
                                                        Добавить помещение
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="main-table__title">
                                                        <label class="custom-input form-check"><input
                                                                    class="custom-input__input form-check-input"
                                                                    name="checkbox" type="checkbox"/>
                                                        </label><a href="#">2.2.2.2.1. Кухня</a>
                                                    </div>
                                                </td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>546 м²</td>
                                                <td>
                                                    <div class="main-table__goals"><img src="/web/img/svg/fist.svg"
                                                                                        alt=""
                                                                                        loading="lazy"/><span>321</span>/433
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="main-table__progress"><img src="/web/img/svg/finish.svg"
                                                                                           alt="" loading="lazy"/>90%
                                                    </div>
                                                </td>
                                                <td>15 ноя 23 – 10 фев 24</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="main-table__title">
                                                        <label class="custom-input form-check"><input
                                                                    class="custom-input__input form-check-input"
                                                                    name="checkbox" type="checkbox"/>
                                                        </label><a href="#">2.2.2.2.1. Санузел</a>
                                                    </div>
                                                </td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>546 м²</td>
                                                <td>
                                                    <div class="main-table__goals"><img src="/web/img/svg/fist.svg"
                                                                                        alt=""
                                                                                        loading="lazy"/><span>321</span>/433
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="main-table__progress"><img src="/web/img/svg/finish.svg"
                                                                                           alt="" loading="lazy"/>90%
                                                    </div>
                                                </td>
                                                <td>15 ноя 23 – 10 фев 24</td>
                                            </tr>
                                        </table>
                                    </div>
                                </td>
                            </tr>
            </tr>
            <tr>
                <td>
                    <div class="main-table__title">
                        <a class="main-table__toggle-dropdown" href="#">
                            <svg class="icon icon-chevron-right ">
                                <use xlink:href="/web/img/svg/sprite.svg#chevron-right"></use>
                            </svg>
                        </a>
                        <label class="custom-input form-check"><input class="custom-input__input form-check-input"
                                                                      name="checkbox" type="checkbox"/>
                        </label><a href="#">2.2.2.1. Квартира №27</a>
                    </div>
                </td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>120</td>
                <td>426 м²</td>
                <td>
                    <div class="main-table__goals"><img src="/web/img/svg/fist.svg" alt=""
                                                        loading="lazy"/><span>15</span>/45
                    </div>
                </td>
                <td>
                    <div class="main-table__progress"><img src="/web/img/svg/finish.svg" alt="" loading="lazy"/>19%
                    </div>
                </td>
                <td>15 ноя 23 – 10 фев 24</td>
            <tr class="inner-level">
                <td colspan="9">
                    <div>
                        <table>
                            <tr>
                                <td class="add-more" colspan="9">
                                    <a class="main-table__add-new" href="#">
                                        <svg class="icon icon-add ">
                                            <use xlink:href="/web/img/svg/sprite.svg#add"></use>
                                        </svg>
                                        Добавить помещение
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="main-table__title">
                                        <label class="custom-input form-check"><input
                                                    class="custom-input__input form-check-input" name="checkbox"
                                                    type="checkbox"/>
                                        </label><a href="#">2.2.2.2.1. Кухня</a>
                                    </div>
                                </td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>546 м²</td>
                                <td>
                                    <div class="main-table__goals"><img src="/web/img/svg/fist.svg" alt=""
                                                                        loading="lazy"/><span>321</span>/433
                                    </div>
                                </td>
                                <td>
                                    <div class="main-table__progress"><img src="/web/img/svg/finish.svg" alt=""
                                                                           loading="lazy"/>90%
                                    </div>
                                </td>
                                <td>15 ноя 23 – 10 фев 24</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="main-table__title">
                                        <label class="custom-input form-check"><input
                                                    class="custom-input__input form-check-input" name="checkbox"
                                                    type="checkbox"/>
                                        </label><a href="#">2.2.2.2.1. Санузел</a>
                                    </div>
                                </td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>546 м²</td>
                                <td>
                                    <div class="main-table__goals"><img src="/web/img/svg/fist.svg" alt=""
                                                                        loading="lazy"/><span>321</span>/433
                                    </div>
                                </td>
                                <td>
                                    <div class="main-table__progress"><img src="/web/img/svg/finish.svg" alt=""
                                                                           loading="lazy"/>90%
                                    </div>
                                </td>
                                <td>15 ноя 23 – 10 фев 24</td>
                            </tr>
                        </table>
                    </div>
                </td>
            </tr>
            </tr>
            </table>
        </div>
        </td>
        </tr>
        </tr>
        </table>
</div>
</td>
</tr>
</tr>
</table>
</div>
</td>
</tr>
</tr>
<tr>
    <td>
        <div class="main-table__title">
            <a class="main-table__toggle-dropdown" href="#">
                <svg class="icon icon-chevron-right ">
                    <use xlink:href="/web/img/svg/sprite.svg#chevron-right"></use>
                </svg>
            </a>
            <label class="custom-input form-check"><input class="custom-input__input form-check-input" name="checkbox"
                                                          type="checkbox"/>
            </label><a class="h3" href="#">2. Дом №2</a>
        </div>
    </td>
    <td>4</td>
    <td>-</td>
    <td>126</td>
    <td>280</td>
    <td>1291 м²</td>
    <td>
        <div class="main-table__goals"><img src="/web/img/svg/fist.svg" alt="" loading="lazy"/><span>81</span>/441
        </div>
    </td>
    <td>
        <div class="main-table__progress"><img src="/web/img/svg/finish.svg" alt="" loading="lazy"/>67%
        </div>
    </td>
    <td>15 ноя 23 – 10 фев 24</td>
<tr class="inner-level">
    <td colspan="9">
        <div>
            <table>
                <tr>
                    <td class="add-more" colspan="9">
                        <a class="main-table__add-new" href="#">
                            <svg class="icon icon-add ">
                                <use xlink:href="/web/img/svg/sprite.svg#add"></use>
                            </svg>
                            Добавить подъезд
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="main-table__title">
                            <a class="main-table__toggle-dropdown" href="#">
                                <svg class="icon icon-chevron-right ">
                                    <use xlink:href="/web/img/svg/sprite.svg#chevron-right"></use>
                                </svg>
                            </a>
                            <label class="custom-input form-check"><input class="custom-input__input form-check-input"
                                                                          name="checkbox" type="checkbox"/>
                            </label><a href="#">2.1. Подъезд №1</a>
                        </div>
                    </td>
                    <td>-</td>
                    <td>12</td>
                    <td>36</td>
                    <td>104</td>
                    <td>696 м²</td>
                    <td>
                        <div class="main-table__goals"><img src="/web/img/svg/fist.svg" alt=""
                                                            loading="lazy"/><span>321</span>/433
                        </div>
                    </td>
                    <td>
                        <div class="main-table__progress"><img src="/web/img/svg/finish.svg" alt="" loading="lazy"/>59%
                        </div>
                    </td>
                    <td>15 ноя 23 – 10 фев 24</td>
                <tr class="inner-level">
                    <td colspan="9">
                        <div>
                            <table>
                                <tr>
                                    <td class="add-more" colspan="9">
                                        <a class="main-table__add-new" href="#">
                                            <svg class="icon icon-add ">
                                                <use xlink:href="/web/img/svg/sprite.svg#add"></use>
                                            </svg>
                                            Добавить этаж
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="main-table__title">
                                            <a class="main-table__toggle-dropdown" href="#">
                                                <svg class="icon icon-chevron-right ">
                                                    <use xlink:href="/web/img/svg/sprite.svg#chevron-right"></use>
                                                </svg>
                                            </a>
                                            <label class="custom-input form-check"><input
                                                        class="custom-input__input form-check-input" name="checkbox"
                                                        type="checkbox"/>
                                            </label><a href="#">2.2.1. Этаж №1</a>
                                        </div>
                                    </td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>16</td>
                                    <td>66</td>
                                    <td>436 м²</td>
                                    <td>
                                        <div class="main-table__goals"><img src="/web/img/svg/fist.svg" alt=""
                                                                            loading="lazy"/><span>81</span>/441
                                        </div>
                                    </td>
                                    <td>
                                        <div class="main-table__progress"><img src="/web/img/svg/finish.svg" alt=""
                                                                               loading="lazy"/>56%
                                        </div>
                                    </td>
                                    <td>15 ноя 23 – 10 фев 24</td>
                                <tr class="inner-level">
                                    <td colspan="9">
                                        <div>
                                            <table>
                                                <tr>
                                                    <td class="add-more" colspan="9">
                                                        <a class="main-table__add-new" href="#">
                                                            <svg class="icon icon-add ">
                                                                <use xlink:href="/web/img/svg/sprite.svg#add"></use>
                                                            </svg>
                                                            Добавить квартиру
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="main-table__title">
                                                            <a class="main-table__toggle-dropdown" href="#">
                                                                <svg class="icon icon-chevron-right ">
                                                                    <use xlink:href="/web/img/svg/sprite.svg#chevron-right">
                                                                    </use>
                                                                </svg>
                                                            </a>
                                                            <label class="custom-input form-check"><input
                                                                        class="custom-input__input form-check-input"
                                                                        name="checkbox" type="checkbox"/>
                                                            </label><a href="#">2.2.2.1. Квартира №27</a>
                                                        </div>
                                                    </td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>120</td>
                                                    <td>426 м²</td>
                                                    <td>
                                                        <div class="main-table__goals"><img src="/web/img/svg/fist.svg"
                                                                                            alt=""
                                                                                            loading="lazy"/><span>15</span>/45
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="main-table__progress"><img
                                                                    src="/web/img/svg/finish.svg"
                                                                    alt="" loading="lazy"/>19%
                                                        </div>
                                                    </td>
                                                    <td>15 ноя 23 – 10 фев 24</td>
                                                <tr class="inner-level">
                                                    <td colspan="9">
                                                        <div>
                                                            <table>
                                                                <tr>
                                                                    <td class="add-more" colspan="9">
                                                                        <a class="main-table__add-new" href="#">
                                                                            <svg class="icon icon-add ">
                                                                                <use
                                                                                        xlink:href="/web/img/svg/sprite.svg#add">
                                                                                </use>
                                                                            </svg>
                                                                            Добавить помещение
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="main-table__title">
                                                                            <label
                                                                                    class="custom-input form-check"><input
                                                                                        class="custom-input__input form-check-input"
                                                                                        name="checkbox"
                                                                                        type="checkbox"/>
                                                                            </label><a href="#">2.2.2.2.1. Кухня</a>
                                                                        </div>
                                                                    </td>
                                                                    <td>-</td>
                                                                    <td>-</td>
                                                                    <td>-</td>
                                                                    <td>-</td>
                                                                    <td>546 м²</td>
                                                                    <td>
                                                                        <div class="main-table__goals"><img
                                                                                    src="/web/img/svg/fist.svg" alt=""
                                                                                    loading="lazy"/><span>321</span>/433
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="main-table__progress"><img
                                                                                    src="/web/img/svg/finish.svg" alt=""
                                                                                    loading="lazy"/>90%
                                                                        </div>
                                                                    </td>
                                                                    <td>15 ноя 23 – 10 фев 24</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="main-table__title">
                                                                            <label
                                                                                    class="custom-input form-check"><input
                                                                                        class="custom-input__input form-check-input"
                                                                                        name="checkbox"
                                                                                        type="checkbox"/>
                                                                            </label><a href="#">2.2.2.2.1. Санузел</a>
                                                                        </div>
                                                                    </td>
                                                                    <td>-</td>
                                                                    <td>-</td>
                                                                    <td>-</td>
                                                                    <td>-</td>
                                                                    <td>546 м²</td>
                                                                    <td>
                                                                        <div class="main-table__goals"><img
                                                                                    src="/web/img/svg/fist.svg" alt=""
                                                                                    loading="lazy"/><span>321</span>/433
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="main-table__progress"><img
                                                                                    src="/web/img/svg/finish.svg" alt=""
                                                                                    loading="lazy"/>90%
                                                                        </div>
                                                                    </td>
                                                                    <td>15 ноя 23 – 10 фев 24</td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </td>
                                                </tr>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="main-table__title">
                                            <a class="main-table__toggle-dropdown" href="#">
                                                <svg class="icon icon-chevron-right ">
                                                    <use xlink:href="/web/img/svg/sprite.svg#chevron-right"></use>
                                                </svg>
                                            </a>
                                            <label class="custom-input form-check"><input
                                                        class="custom-input__input form-check-input" name="checkbox"
                                                        type="checkbox"/>
                                            </label><a href="#">2.2.2.1. Квартира №27</a>
                                        </div>
                                    </td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>120</td>
                                    <td>426 м²</td>
                                    <td>
                                        <div class="main-table__goals"><img src="/web/img/svg/fist.svg" alt=""
                                                                            loading="lazy"/><span>15</span>/45
                                        </div>
                                    </td>
                                    <td>
                                        <div class="main-table__progress"><img src="/web/img/svg/finish.svg" alt=""
                                                                               loading="lazy"/>19%
                                        </div>
                                    </td>
                                    <td>15 ноя 23 – 10 фев 24</td>
                                <tr class="inner-level">
                                    <td colspan="9">
                                        <div>
                                            <table>
                                                <tr>
                                                    <td class="add-more" colspan="9">
                                                        <a class="main-table__add-new" href="#">
                                                            <svg class="icon icon-add ">
                                                                <use xlink:href="/web/img/svg/sprite.svg#add"></use>
                                                            </svg>
                                                            Добавить помещение
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="main-table__title">
                                                            <label class="custom-input form-check"><input
                                                                        class="custom-input__input form-check-input"
                                                                        name="checkbox" type="checkbox"/>
                                                            </label><a href="#">2.2.2.2.1. Кухня</a>
                                                        </div>
                                                    </td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>546 м²</td>
                                                    <td>
                                                        <div class="main-table__goals"><img src="/web/img/svg/fist.svg"
                                                                                            alt=""
                                                                                            loading="lazy"/><span>321</span>/433
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="main-table__progress"><img
                                                                    src="/web/img/svg/finish.svg"
                                                                    alt="" loading="lazy"/>90%
                                                        </div>
                                                    </td>
                                                    <td>15 ноя 23 – 10 фев 24</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="main-table__title">
                                                            <label class="custom-input form-check"><input
                                                                        class="custom-input__input form-check-input"
                                                                        name="checkbox" type="checkbox"/>
                                                            </label><a href="#">2.2.2.2.1. Санузел</a>
                                                        </div>
                                                    </td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>546 м²</td>
                                                    <td>
                                                        <div class="main-table__goals"><img src="/web/img/svg/fist.svg"
                                                                                            alt=""
                                                                                            loading="lazy"/><span>321</span>/433
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="main-table__progress"><img
                                                                    src="/web/img/svg/finish.svg"
                                                                    alt="" loading="lazy"/>90%
                                                        </div>
                                                    </td>
                                                    <td>15 ноя 23 – 10 фев 24</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </td>
                                </tr>
                </tr>
            </table>
        </div>
    </td>
</tr>
</tr>
</table>
</div>
</td>
</tr>
</tr>
<tr>
    <td>
        <div class="main-table__title">
            <a class="main-table__toggle-dropdown" href="#">
                <svg class="icon icon-chevron-right ">
                    <use xlink:href="/web/img/svg/sprite.svg#chevron-right"></use>
                </svg>
            </a>
            <label class="custom-input form-check"><input class="custom-input__input form-check-input" name="checkbox"
                                                          type="checkbox"/>
            </label><a href="#">2.1. Подъезд №2</a>
        </div>
    </td>
    <td>-</td>
    <td>12</td>
    <td>36</td>
    <td>104</td>
    <td>696 м²</td>
    <td>
        <div class="main-table__goals"><img src="/web/img/svg/fist.svg" alt="" loading="lazy"/><span>321</span>/433
        </div>
    </td>
    <td>
        <div class="main-table__progress"><img src="/web/img/svg/finish.svg" alt="" loading="lazy"/>59%
        </div>
    </td>
    <td>15 ноя 23 – 10 фев 24</td>
<tr class="inner-level">
    <td colspan="9">
        <div>
            <table>
                <tr>
                    <td class="add-more" colspan="9">
                        <a class="main-table__add-new" href="#">
                            <svg class="icon icon-add ">
                                <use xlink:href="/web/img/svg/sprite.svg#add"></use>
                            </svg>
                            Добавить этаж
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="main-table__title">
                            <a class="main-table__toggle-dropdown" href="#">
                                <svg class="icon icon-chevron-right ">
                                    <use xlink:href="/web/img/svg/sprite.svg#chevron-right"></use>
                                </svg>
                            </a>
                            <label class="custom-input form-check"><input class="custom-input__input form-check-input"
                                                                          name="checkbox" type="checkbox"/>
                            </label><a href="#">2.2.1. Этаж №1</a>
                        </div>
                    </td>
                    <td>-</td>
                    <td>-</td>
                    <td>16</td>
                    <td>66</td>
                    <td>436 м²</td>
                    <td>
                        <div class="main-table__goals"><img src="/web/img/svg/fist.svg" alt=""
                                                            loading="lazy"/><span>81</span>/441
                        </div>
                    </td>
                    <td>
                        <div class="main-table__progress"><img src="/web/img/svg/finish.svg" alt="" loading="lazy"/>56%
                        </div>
                    </td>
                    <td>15 ноя 23 – 10 фев 24</td>
                <tr class="inner-level">
                    <td colspan="9">
                        <div>
                            <table>
                                <tr>
                                    <td class="add-more" colspan="9">
                                        <a class="main-table__add-new" href="#">
                                            <svg class="icon icon-add ">
                                                <use xlink:href="/web/img/svg/sprite.svg#add"></use>
                                            </svg>
                                            Добавить квартиру
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="main-table__title">
                                            <a class="main-table__toggle-dropdown" href="#">
                                                <svg class="icon icon-chevron-right ">
                                                    <use xlink:href="/web/img/svg/sprite.svg#chevron-right"></use>
                                                </svg>
                                            </a>
                                            <label class="custom-input form-check"><input
                                                        class="custom-input__input form-check-input" name="checkbox"
                                                        type="checkbox"/>
                                            </label><a href="#">2.2.2.1. Квартира №27</a>
                                        </div>
                                    </td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>120</td>
                                    <td>426 м²</td>
                                    <td>
                                        <div class="main-table__goals"><img src="/web/img/svg/fist.svg" alt=""
                                                                            loading="lazy"/><span>15</span>/45
                                        </div>
                                    </td>
                                    <td>
                                        <div class="main-table__progress"><img src="/web/img/svg/finish.svg" alt=""
                                                                               loading="lazy"/>19%
                                        </div>
                                    </td>
                                    <td>15 ноя 23 – 10 фев 24</td>
                                <tr class="inner-level">
                                    <td colspan="9">
                                        <div>
                                            <table>
                                                <tr>
                                                    <td class="add-more" colspan="9">
                                                        <a class="main-table__add-new" href="#">
                                                            <svg class="icon icon-add ">
                                                                <use xlink:href="/web/img/svg/sprite.svg#add"></use>
                                                            </svg>
                                                            Добавить помещение
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="main-table__title">
                                                            <label class="custom-input form-check"><input
                                                                        class="custom-input__input form-check-input"
                                                                        name="checkbox" type="checkbox"/>
                                                            </label><a href="#">2.2.2.2.1. Кухня</a>
                                                        </div>
                                                    </td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>546 м²</td>
                                                    <td>
                                                        <div class="main-table__goals"><img src="/web/img/svg/fist.svg"
                                                                                            alt=""
                                                                                            loading="lazy"/><span>321</span>/433
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="main-table__progress"><img
                                                                    src="/web/img/svg/finish.svg"
                                                                    alt="" loading="lazy"/>90%
                                                        </div>
                                                    </td>
                                                    <td>15 ноя 23 – 10 фев 24</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="main-table__title">
                                                            <label class="custom-input form-check"><input
                                                                        class="custom-input__input form-check-input"
                                                                        name="checkbox" type="checkbox"/>
                                                            </label><a href="#">2.2.2.2.1. Санузел</a>
                                                        </div>
                                                    </td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>546 м²</td>
                                                    <td>
                                                        <div class="main-table__goals"><img src="/web/img/svg/fist.svg"
                                                                                            alt=""
                                                                                            loading="lazy"/><span>321</span>/433
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="main-table__progress"><img
                                                                    src="/web/img/svg/finish.svg"
                                                                    alt="" loading="lazy"/>90%
                                                        </div>
                                                    </td>
                                                    <td>15 ноя 23 – 10 фев 24</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </td>
                                </tr>
                </tr>
                <tr>
                    <td>
                        <div class="main-table__title">
                            <a class="main-table__toggle-dropdown" href="#">
                                <svg class="icon icon-chevron-right ">
                                    <use xlink:href="/web/img/svg/sprite.svg#chevron-right"></use>
                                </svg>
                            </a>
                            <label class="custom-input form-check"><input class="custom-input__input form-check-input"
                                                                          name="checkbox" type="checkbox"/>
                            </label><a href="#">2.2.2.1. Квартира №27</a>
                        </div>
                    </td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>120</td>
                    <td>426 м²</td>
                    <td>
                        <div class="main-table__goals"><img src="/web/img/svg/fist.svg" alt=""
                                                            loading="lazy"/><span>15</span>/45
                        </div>
                    </td>
                    <td>
                        <div class="main-table__progress"><img src="/web/img/svg/finish.svg" alt="" loading="lazy"/>19%
                        </div>
                    </td>
                    <td>15 ноя 23 – 10 фев 24</td>
                <tr class="inner-level">
                    <td colspan="9">
                        <div>
                            <table>
                                <tr>
                                    <td class="add-more" colspan="9">
                                        <a class="main-table__add-new" href="#">
                                            <svg class="icon icon-add ">
                                                <use xlink:href="/web/img/svg/sprite.svg#add"></use>
                                            </svg>
                                            Добавить помещение
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="main-table__title">
                                            <label class="custom-input form-check"><input
                                                        class="custom-input__input form-check-input" name="checkbox"
                                                        type="checkbox"/>
                                            </label><a href="#">2.2.2.2.1. Кухня</a>
                                        </div>
                                    </td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>546 м²</td>
                                    <td>
                                        <div class="main-table__goals"><img src="/web/img/svg/fist.svg" alt=""
                                                                            loading="lazy"/><span>321</span>/433
                                        </div>
                                    </td>
                                    <td>
                                        <div class="main-table__progress"><img src="/web/img/svg/finish.svg" alt=""
                                                                               loading="lazy"/>90%
                                        </div>
                                    </td>
                                    <td>15 ноя 23 – 10 фев 24</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="main-table__title">
                                            <label class="custom-input form-check"><input
                                                        class="custom-input__input form-check-input" name="checkbox"
                                                        type="checkbox"/>
                                            </label><a href="#">2.2.2.2.1. Санузел</a>
                                        </div>
                                    </td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>546 м²</td>
                                    <td>
                                        <div class="main-table__goals"><img src="/web/img/svg/fist.svg" alt=""
                                                                            loading="lazy"/><span>321</span>/433
                                        </div>
                                    </td>
                                    <td>
                                        <div class="main-table__progress"><img src="/web/img/svg/finish.svg" alt=""
                                                                               loading="lazy"/>90%
                                        </div>
                                    </td>
                                    <td>15 ноя 23 – 10 фев 24</td>
                                </tr>
                            </table>
                        </div>
                    </td>
                </tr>
</tr>
</table>
</div>
</td>
</tr>
</tr>
<tr>
    <td>
        <div class="main-table__title">
            <a class="main-table__toggle-dropdown" href="#">
                <svg class="icon icon-chevron-right ">
                    <use xlink:href="/web/img/svg/sprite.svg#chevron-right"></use>
                </svg>
            </a>
            <label class="custom-input form-check"><input class="custom-input__input form-check-input" name="checkbox"
                                                          type="checkbox"/>
            </label><a href="#">2.2.1. Этаж №2</a>
        </div>
    </td>
    <td>-</td>
    <td>-</td>
    <td>16</td>
    <td>66</td>
    <td>436 м²</td>
    <td>
        <div class="main-table__goals"><img src="/web/img/svg/fist.svg" alt="" loading="lazy"/><span>81</span>/441
        </div>
    </td>
    <td>
        <div class="main-table__progress"><img src="/web/img/svg/finish.svg" alt="" loading="lazy"/>56%
        </div>
    </td>
    <td>15 ноя 23 – 10 фев 24</td>
<tr class="inner-level">
    <td colspan="9">
        <div>
            <table>
                <tr>
                    <td class="add-more" colspan="9">
                        <a class="main-table__add-new" href="#">
                            <svg class="icon icon-add ">
                                <use xlink:href="/web/img/svg/sprite.svg#add"></use>
                            </svg>
                            Добавить квартиру
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="main-table__title">
                            <a class="main-table__toggle-dropdown" href="#">
                                <svg class="icon icon-chevron-right ">
                                    <use xlink:href="/web/img/svg/sprite.svg#chevron-right"></use>
                                </svg>
                            </a>
                            <label class="custom-input form-check"><input class="custom-input__input form-check-input"
                                                                          name="checkbox" type="checkbox"/>
                            </label><a href="#">2.2.2.1. Квартира №27</a>
                        </div>
                    </td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>120</td>
                    <td>426 м²</td>
                    <td>
                        <div class="main-table__goals"><img src="/web/img/svg/fist.svg" alt=""
                                                            loading="lazy"/><span>15</span>/45
                        </div>
                    </td>
                    <td>
                        <div class="main-table__progress"><img src="/web/img/svg/finish.svg" alt="" loading="lazy"/>19%
                        </div>
                    </td>
                    <td>15 ноя 23 – 10 фев 24</td>
                <tr class="inner-level">
                    <td colspan="9">
                        <div>
                            <table>
                                <tr>
                                    <td class="add-more" colspan="9">
                                        <a class="main-table__add-new" href="#">
                                            <svg class="icon icon-add ">
                                                <use xlink:href="/web/img/svg/sprite.svg#add"></use>
                                            </svg>
                                            Добавить помещение
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="main-table__title">
                                            <label class="custom-input form-check"><input
                                                        class="custom-input__input form-check-input" name="checkbox"
                                                        type="checkbox"/>
                                            </label><a href="#">2.2.2.2.1. Кухня</a>
                                        </div>
                                    </td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>546 м²</td>
                                    <td>
                                        <div class="main-table__goals"><img src="/web/img/svg/fist.svg" alt=""
                                                                            loading="lazy"/><span>321</span>/433
                                        </div>
                                    </td>
                                    <td>
                                        <div class="main-table__progress"><img src="/web/img/svg/finish.svg" alt=""
                                                                               loading="lazy"/>90%
                                        </div>
                                    </td>
                                    <td>15 ноя 23 – 10 фев 24</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="main-table__title">
                                            <label class="custom-input form-check"><input
                                                        class="custom-input__input form-check-input" name="checkbox"
                                                        type="checkbox"/>
                                            </label><a href="#">2.2.2.2.1. Санузел</a>
                                        </div>
                                    </td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>546 м²</td>
                                    <td>
                                        <div class="main-table__goals"><img src="/web/img/svg/fist.svg" alt=""
                                                                            loading="lazy"/><span>321</span>/433
                                        </div>
                                    </td>
                                    <td>
                                        <div class="main-table__progress"><img src="/web/img/svg/finish.svg" alt=""
                                                                               loading="lazy"/>90%
                                        </div>
                                    </td>
                                    <td>15 ноя 23 – 10 фев 24</td>
                                </tr>
                            </table>
                        </div>
                    </td>
                </tr>
</tr>
<tr>
    <td>
        <div class="main-table__title">
            <a class="main-table__toggle-dropdown" href="#">
                <svg class="icon icon-chevron-right ">
                    <use xlink:href="/web/img/svg/sprite.svg#chevron-right"></use>
                </svg>
            </a>
            <label class="custom-input form-check"><input class="custom-input__input form-check-input" name="checkbox"
                                                          type="checkbox"/>
            </label><a href="#">2.2.2.1. Квартира №27</a>
        </div>
    </td>
    <td>-</td>
    <td>-</td>
    <td>-</td>
    <td>120</td>
    <td>426 м²</td>
    <td>
        <div class="main-table__goals"><img src="/web/img/svg/fist.svg" alt="" loading="lazy"/><span>15</span>/45
        </div>
    </td>
    <td>
        <div class="main-table__progress"><img src="/web/img/svg/finish.svg" alt="" loading="lazy"/>19%
        </div>
    </td>
    <td>15 ноя 23 – 10 фев 24</td>
<tr class="inner-level">
    <td colspan="9">
        <div>
            <table>
                <tr>
                    <td class="add-more" colspan="9">
                        <a class="main-table__add-new" href="#">
                            <svg class="icon icon-add ">
                                <use xlink:href="/web/img/svg/sprite.svg#add"></use>
                            </svg>
                            Добавить помещение
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="main-table__title">
                            <label class="custom-input form-check"><input class="custom-input__input form-check-input"
                                                                          name="checkbox" type="checkbox"/>
                            </label><a href="#">2.2.2.2.1. Кухня</a>
                        </div>
                    </td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>546 м²</td>
                    <td>
                        <div class="main-table__goals"><img src="/web/img/svg/fist.svg" alt=""
                                                            loading="lazy"/><span>321</span>/433
                        </div>
                    </td>
                    <td>
                        <div class="main-table__progress"><img src="/web/img/svg/finish.svg" alt="" loading="lazy"/>90%
                        </div>
                    </td>
                    <td>15 ноя 23 – 10 фев 24</td>
                </tr>
                <tr>
                    <td>
                        <div class="main-table__title">
                            <label class="custom-input form-check"><input class="custom-input__input form-check-input"
                                                                          name="checkbox" type="checkbox"/>
                            </label><a href="#">2.2.2.2.1. Санузел</a>
                        </div>
                    </td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>546 м²</td>
                    <td>
                        <div class="main-table__goals"><img src="/web/img/svg/fist.svg" alt=""
                                                            loading="lazy"/><span>321</span>/433
                        </div>
                    </td>
                    <td>
                        <div class="main-table__progress"><img src="/web/img/svg/finish.svg" alt="" loading="lazy"/>90%
                        </div>
                    </td>
                    <td>15 ноя 23 – 10 фев 24</td>
                </tr>
            </table>
        </div>
    </td>
</tr>
</tr>
</table>
</div>
</td>
</tr>
</tr>
</table>
</div>
</td>
</tr>
</tr>
</table>
</div>
</td>
</tr>
</tr>
<tr>
    <td>
        <div class="main-table__title">
            <a class="main-table__toggle-dropdown" href="#">
                <svg class="icon icon-chevron-right ">
                    <use xlink:href="/web/img/svg/sprite.svg#chevron-right"></use>
                </svg>
            </a>
            <label class="custom-input form-check"><input class="custom-input__input form-check-input" name="checkbox"
                                                          type="checkbox"/>
            </label><a class="h3" href="#">3. Дом №3</a>
        </div>
    </td>
    <td>4</td>
    <td>-</td>
    <td>126</td>
    <td>280</td>
    <td>1291 м²</td>
    <td>
        <div class="main-table__goals"><img src="/web/img/svg/fist.svg" alt="" loading="lazy"/><span>81</span>/441
        </div>
    </td>
    <td>
        <div class="main-table__progress"><img src="/web/img/svg/finish.svg" alt="" loading="lazy"/>67%
        </div>
    </td>
    <td>15 ноя 23 – 10 фев 24</td>
<tr class="inner-level">
    <td colspan="9">
        <div>
            <table>
                <tr>
                    <td class="add-more" colspan="9">
                        <a class="main-table__add-new" href="#">
                            <svg class="icon icon-add ">
                                <use xlink:href="/web/img/svg/sprite.svg#add"></use>
                            </svg>
                            Добавить подъезд
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="main-table__title">
                            <a class="main-table__toggle-dropdown" href="#">
                                <svg class="icon icon-chevron-right ">
                                    <use xlink:href="/web/img/svg/sprite.svg#chevron-right"></use>
                                </svg>
                            </a>
                            <label class="custom-input form-check"><input class="custom-input__input form-check-input"
                                                                          name="checkbox" type="checkbox"/>
                            </label><a href="#">2.1. Подъезд №1</a>
                        </div>
                    </td>
                    <td>-</td>
                    <td>12</td>
                    <td>36</td>
                    <td>104</td>
                    <td>696 м²</td>
                    <td>
                        <div class="main-table__goals"><img src="/web/img/svg/fist.svg" alt=""
                                                            loading="lazy"/><span>321</span>/433
                        </div>
                    </td>
                    <td>
                        <div class="main-table__progress"><img src="/web/img/svg/finish.svg" alt="" loading="lazy"/>59%
                        </div>
                    </td>
                    <td>15 ноя 23 – 10 фев 24</td>
                <tr class="inner-level">
                    <td colspan="9">
                        <div>
                            <table>
                                <tr>
                                    <td class="add-more" colspan="9">
                                        <a class="main-table__add-new" href="#">
                                            <svg class="icon icon-add ">
                                                <use xlink:href="/web/img/svg/sprite.svg#add"></use>
                                            </svg>
                                            Добавить этаж
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="main-table__title">
                                            <a class="main-table__toggle-dropdown" href="#">
                                                <svg class="icon icon-chevron-right ">
                                                    <use xlink:href="/web/img/svg/sprite.svg#chevron-right"></use>
                                                </svg>
                                            </a>
                                            <label class="custom-input form-check"><input
                                                        class="custom-input__input form-check-input" name="checkbox"
                                                        type="checkbox"/>
                                            </label><a href="#">2.2.1. Этаж №1</a>
                                        </div>
                                    </td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>16</td>
                                    <td>66</td>
                                    <td>436 м²</td>
                                    <td>
                                        <div class="main-table__goals"><img src="/web/img/svg/fist.svg" alt=""
                                                                            loading="lazy"/><span>81</span>/441
                                        </div>
                                    </td>
                                    <td>
                                        <div class="main-table__progress"><img src="/web/img/svg/finish.svg" alt=""
                                                                               loading="lazy"/>56%
                                        </div>
                                    </td>
                                    <td>15 ноя 23 – 10 фев 24</td>
                                <tr class="inner-level">
                                    <td colspan="9">
                                        <div>
                                            <table>
                                                <tr>
                                                    <td class="add-more" colspan="9">
                                                        <a class="main-table__add-new" href="#">
                                                            <svg class="icon icon-add ">
                                                                <use xlink:href="/web/img/svg/sprite.svg#add"></use>
                                                            </svg>
                                                            Добавить квартиру
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="main-table__title">
                                                            <a class="main-table__toggle-dropdown" href="#">
                                                                <svg class="icon icon-chevron-right ">
                                                                    <use xlink:href="/web/img/svg/sprite.svg#chevron-right">
                                                                    </use>
                                                                </svg>
                                                            </a>
                                                            <label class="custom-input form-check"><input
                                                                        class="custom-input__input form-check-input"
                                                                        name="checkbox" type="checkbox"/>
                                                            </label><a href="#">2.2.2.1. Квартира №27</a>
                                                        </div>
                                                    </td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>120</td>
                                                    <td>426 м²</td>
                                                    <td>
                                                        <div class="main-table__goals"><img src="/web/img/svg/fist.svg"
                                                                                            alt=""
                                                                                            loading="lazy"/><span>15</span>/45
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="main-table__progress"><img
                                                                    src="/web/img/svg/finish.svg"
                                                                    alt="" loading="lazy"/>19%
                                                        </div>
                                                    </td>
                                                    <td>15 ноя 23 – 10 фев 24</td>
                                                <tr class="inner-level">
                                                    <td colspan="9">
                                                        <div>
                                                            <table>
                                                                <tr>
                                                                    <td class="add-more" colspan="9">
                                                                        <a class="main-table__add-new" href="#">
                                                                            <svg class="icon icon-add ">
                                                                                <use
                                                                                        xlink:href="/web/img/svg/sprite.svg#add">
                                                                                </use>
                                                                            </svg>
                                                                            Добавить помещение
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="main-table__title">
                                                                            <label
                                                                                    class="custom-input form-check"><input
                                                                                        class="custom-input__input form-check-input"
                                                                                        name="checkbox"
                                                                                        type="checkbox"/>
                                                                            </label><a href="#">2.2.2.2.1. Кухня</a>
                                                                        </div>
                                                                    </td>
                                                                    <td>-</td>
                                                                    <td>-</td>
                                                                    <td>-</td>
                                                                    <td>-</td>
                                                                    <td>546 м²</td>
                                                                    <td>
                                                                        <div class="main-table__goals"><img
                                                                                    src="/web/img/svg/fist.svg" alt=""
                                                                                    loading="lazy"/><span>321</span>/433
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="main-table__progress"><img
                                                                                    src="/web/img/svg/finish.svg" alt=""
                                                                                    loading="lazy"/>90%
                                                                        </div>
                                                                    </td>
                                                                    <td>15 ноя 23 – 10 фев 24</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="main-table__title">
                                                                            <label
                                                                                    class="custom-input form-check"><input
                                                                                        class="custom-input__input form-check-input"
                                                                                        name="checkbox"
                                                                                        type="checkbox"/>
                                                                            </label><a href="#">2.2.2.2.1. Санузел</a>
                                                                        </div>
                                                                    </td>
                                                                    <td>-</td>
                                                                    <td>-</td>
                                                                    <td>-</td>
                                                                    <td>-</td>
                                                                    <td>546 м²</td>
                                                                    <td>
                                                                        <div class="main-table__goals"><img
                                                                                    src="/web/img/svg/fist.svg" alt=""
                                                                                    loading="lazy"/><span>321</span>/433
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="main-table__progress"><img
                                                                                    src="/web/img/svg/finish.svg" alt=""
                                                                                    loading="lazy"/>90%
                                                                        </div>
                                                                    </td>
                                                                    <td>15 ноя 23 – 10 фев 24</td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </td>
                                                </tr>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="main-table__title">
                                            <a class="main-table__toggle-dropdown" href="#">
                                                <svg class="icon icon-chevron-right ">
                                                    <use xlink:href="/web/img/svg/sprite.svg#chevron-right"></use>
                                                </svg>
                                            </a>
                                            <label class="custom-input form-check"><input
                                                        class="custom-input__input form-check-input" name="checkbox"
                                                        type="checkbox"/>
                                            </label><a href="#">2.2.2.1. Квартира №27</a>
                                        </div>
                                    </td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>120</td>
                                    <td>426 м²</td>
                                    <td>
                                        <div class="main-table__goals"><img src="/web/img/svg/fist.svg" alt=""
                                                                            loading="lazy"/><span>15</span>/45
                                        </div>
                                    </td>
                                    <td>
                                        <div class="main-table__progress"><img src="/web/img/svg/finish.svg" alt=""
                                                                               loading="lazy"/>19%
                                        </div>
                                    </td>
                                    <td>15 ноя 23 – 10 фев 24</td>
                                <tr class="inner-level">
                                    <td colspan="9">
                                        <div>
                                            <table>
                                                <tr>
                                                    <td class="add-more" colspan="9">
                                                        <a class="main-table__add-new" href="#">
                                                            <svg class="icon icon-add ">
                                                                <use xlink:href="/web/img/svg/sprite.svg#add"></use>
                                                            </svg>
                                                            Добавить помещение
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="main-table__title">
                                                            <label class="custom-input form-check"><input
                                                                        class="custom-input__input form-check-input"
                                                                        name="checkbox" type="checkbox"/>
                                                            </label><a href="#">2.2.2.2.1. Кухня</a>
                                                        </div>
                                                    </td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>546 м²</td>
                                                    <td>
                                                        <div class="main-table__goals"><img src="/web/img/svg/fist.svg"
                                                                                            alt=""
                                                                                            loading="lazy"/><span>321</span>/433
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="main-table__progress"><img
                                                                    src="/web/img/svg/finish.svg"
                                                                    alt="" loading="lazy"/>90%
                                                        </div>
                                                    </td>
                                                    <td>15 ноя 23 – 10 фев 24</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="main-table__title">
                                                            <label class="custom-input form-check"><input
                                                                        class="custom-input__input form-check-input"
                                                                        name="checkbox" type="checkbox"/>
                                                            </label><a href="#">2.2.2.2.1. Санузел</a>
                                                        </div>
                                                    </td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>546 м²</td>
                                                    <td>
                                                        <div class="main-table__goals"><img src="/web/img/svg/fist.svg"
                                                                                            alt=""
                                                                                            loading="lazy"/><span>321</span>/433
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="main-table__progress"><img
                                                                    src="/web/img/svg/finish.svg"
                                                                    alt="" loading="lazy"/>90%
                                                        </div>
                                                    </td>
                                                    <td>15 ноя 23 – 10 фев 24</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </td>
                                </tr>
                </tr>
            </table>
        </div>
    </td>
</tr>
</tr>
</table>
</div>
</td>
</tr>
</tr>
<tr>
    <td>
        <div class="main-table__title">
            <a class="main-table__toggle-dropdown" href="#">
                <svg class="icon icon-chevron-right ">
                    <use xlink:href="/web/img/svg/sprite.svg#chevron-right"></use>
                </svg>
            </a>
            <label class="custom-input form-check"><input class="custom-input__input form-check-input" name="checkbox"
                                                          type="checkbox"/>
            </label><a href="#">2.1. Подъезд №2</a>
        </div>
    </td>
    <td>-</td>
    <td>12</td>
    <td>36</td>
    <td>104</td>
    <td>696 м²</td>
    <td>
        <div class="main-table__goals"><img src="/web/img/svg/fist.svg" alt="" loading="lazy"/><span>321</span>/433
        </div>
    </td>
    <td>
        <div class="main-table__progress"><img src="/web/img/svg/finish.svg" alt="" loading="lazy"/>59%
        </div>
    </td>
    <td>15 ноя 23 – 10 фев 24</td>
<tr class="inner-level">
    <td colspan="9">
        <div>
            <table>
                <tr>
                    <td class="add-more" colspan="9">
                        <a class="main-table__add-new" href="#">
                            <svg class="icon icon-add ">
                                <use xlink:href="/web/img/svg/sprite.svg#add"></use>
                            </svg>
                            Добавить этаж
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="main-table__title">
                            <a class="main-table__toggle-dropdown" href="#">
                                <svg class="icon icon-chevron-right ">
                                    <use xlink:href="/web/img/svg/sprite.svg#chevron-right"></use>
                                </svg>
                            </a>
                            <label class="custom-input form-check"><input class="custom-input__input form-check-input"
                                                                          name="checkbox" type="checkbox"/>
                            </label><a href="#">2.2.1. Этаж №1</a>
                        </div>
                    </td>
                    <td>-</td>
                    <td>-</td>
                    <td>16</td>
                    <td>66</td>
                    <td>436 м²</td>
                    <td>
                        <div class="main-table__goals"><img src="/web/img/svg/fist.svg" alt=""
                                                            loading="lazy"/><span>81</span>/441
                        </div>
                    </td>
                    <td>
                        <div class="main-table__progress"><img src="/web/img/svg/finish.svg" alt="" loading="lazy"/>56%
                        </div>
                    </td>
                    <td>15 ноя 23 – 10 фев 24</td>
                <tr class="inner-level">
                    <td colspan="9">
                        <div>
                            <table>
                                <tr>
                                    <td class="add-more" colspan="9">
                                        <a class="main-table__add-new" href="#">
                                            <svg class="icon icon-add ">
                                                <use xlink:href="/web/img/svg/sprite.svg#add"></use>
                                            </svg>
                                            Добавить квартиру
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="main-table__title">
                                            <a class="main-table__toggle-dropdown" href="#">
                                                <svg class="icon icon-chevron-right ">
                                                    <use xlink:href="/web/img/svg/sprite.svg#chevron-right"></use>
                                                </svg>
                                            </a>
                                            <label class="custom-input form-check"><input
                                                        class="custom-input__input form-check-input" name="checkbox"
                                                        type="checkbox"/>
                                            </label><a href="#">2.2.2.1. Квартира №27</a>
                                        </div>
                                    </td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>120</td>
                                    <td>426 м²</td>
                                    <td>
                                        <div class="main-table__goals"><img src="/web/img/svg/fist.svg" alt=""
                                                                            loading="lazy"/><span>15</span>/45
                                        </div>
                                    </td>
                                    <td>
                                        <div class="main-table__progress"><img src="/web/img/svg/finish.svg" alt=""
                                                                               loading="lazy"/>19%
                                        </div>
                                    </td>
                                    <td>15 ноя 23 – 10 фев 24</td>
                                <tr class="inner-level">
                                    <td colspan="9">
                                        <div>
                                            <table>
                                                <tr>
                                                    <td class="add-more" colspan="9">
                                                        <a class="main-table__add-new" href="#">
                                                            <svg class="icon icon-add ">
                                                                <use xlink:href="/web/img/svg/sprite.svg#add"></use>
                                                            </svg>
                                                            Добавить помещение
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="main-table__title">
                                                            <label class="custom-input form-check"><input
                                                                        class="custom-input__input form-check-input"
                                                                        name="checkbox" type="checkbox"/>
                                                            </label><a href="#">2.2.2.2.1. Кухня</a>
                                                        </div>
                                                    </td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>546 м²</td>
                                                    <td>
                                                        <div class="main-table__goals"><img src="/web/img/svg/fist.svg"
                                                                                            alt=""
                                                                                            loading="lazy"/><span>321</span>/433
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="main-table__progress"><img
                                                                    src="/web/img/svg/finish.svg"
                                                                    alt="" loading="lazy"/>90%
                                                        </div>
                                                    </td>
                                                    <td>15 ноя 23 – 10 фев 24</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="main-table__title">
                                                            <label class="custom-input form-check"><input
                                                                        class="custom-input__input form-check-input"
                                                                        name="checkbox" type="checkbox"/>
                                                            </label><a href="#">2.2.2.2.1. Санузел</a>
                                                        </div>
                                                    </td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>546 м²</td>
                                                    <td>
                                                        <div class="main-table__goals"><img src="/web/img/svg/fist.svg"
                                                                                            alt=""
                                                                                            loading="lazy"/><span>321</span>/433
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="main-table__progress"><img
                                                                    src="/web/img/svg/finish.svg"
                                                                    alt="" loading="lazy"/>90%
                                                        </div>
                                                    </td>
                                                    <td>15 ноя 23 – 10 фев 24</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </td>
                                </tr>
                </tr>
                <tr>
                    <td>
                        <div class="main-table__title">
                            <a class="main-table__toggle-dropdown" href="#">
                                <svg class="icon icon-chevron-right ">
                                    <use xlink:href="/web/img/svg/sprite.svg#chevron-right"></use>
                                </svg>
                            </a>
                            <label class="custom-input form-check"><input class="custom-input__input form-check-input"
                                                                          name="checkbox" type="checkbox"/>
                            </label><a href="#">2.2.2.1. Квартира №27</a>
                        </div>
                    </td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>120</td>
                    <td>426 м²</td>
                    <td>
                        <div class="main-table__goals"><img src="/web/img/svg/fist.svg" alt=""
                                                            loading="lazy"/><span>15</span>/45
                        </div>
                    </td>
                    <td>
                        <div class="main-table__progress"><img src="/web/img/svg/finish.svg" alt="" loading="lazy"/>19%
                        </div>
                    </td>
                    <td>15 ноя 23 – 10 фев 24</td>
                <tr class="inner-level">
                    <td colspan="9">
                        <div>
                            <table>
                                <tr>
                                    <td class="add-more" colspan="9">
                                        <a class="main-table__add-new" href="#">
                                            <svg class="icon icon-add ">
                                                <use xlink:href="/web/img/svg/sprite.svg#add"></use>
                                            </svg>
                                            Добавить помещение
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="main-table__title">
                                            <label class="custom-input form-check"><input
                                                        class="custom-input__input form-check-input" name="checkbox"
                                                        type="checkbox"/>
                                            </label><a href="#">2.2.2.2.1. Кухня</a>
                                        </div>
                                    </td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>546 м²</td>
                                    <td>
                                        <div class="main-table__goals"><img src="/web/img/svg/fist.svg" alt=""
                                                                            loading="lazy"/><span>321</span>/433
                                        </div>
                                    </td>
                                    <td>
                                        <div class="main-table__progress"><img src="/web/img/svg/finish.svg" alt=""
                                                                               loading="lazy"/>90%
                                        </div>
                                    </td>
                                    <td>15 ноя 23 – 10 фев 24</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="main-table__title">
                                            <label class="custom-input form-check"><input
                                                        class="custom-input__input form-check-input" name="checkbox"
                                                        type="checkbox"/>
                                            </label><a href="#">2.2.2.2.1. Санузел</a>
                                        </div>
                                    </td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>546 м²</td>
                                    <td>
                                        <div class="main-table__goals"><img src="/web/img/svg/fist.svg" alt=""
                                                                            loading="lazy"/><span>321</span>/433
                                        </div>
                                    </td>
                                    <td>
                                        <div class="main-table__progress"><img src="/web/img/svg/finish.svg" alt=""
                                                                               loading="lazy"/>90%
                                        </div>
                                    </td>
                                    <td>15 ноя 23 – 10 фев 24</td>
                                </tr>
                            </table>
                        </div>
                    </td>
                </tr>
</tr>
</table>
</div>
</td>
</tr>
</tr>
<tr>
    <td>
        <div class="main-table__title">
            <a class="main-table__toggle-dropdown" href="#">
                <svg class="icon icon-chevron-right ">
                    <use xlink:href="/web/img/svg/sprite.svg#chevron-right"></use>
                </svg>
            </a>
            <label class="custom-input form-check"><input class="custom-input__input form-check-input" name="checkbox"
                                                          type="checkbox"/>
            </label><a href="#">2.2.1. Этаж №2</a>
        </div>
    </td>
    <td>-</td>
    <td>-</td>
    <td>16</td>
    <td>66</td>
    <td>436 м²</td>
    <td>
        <div class="main-table__goals"><img src="/web/img/svg/fist.svg" alt="" loading="lazy"/><span>81</span>/441
        </div>
    </td>
    <td>
        <div class="main-table__progress"><img src="/web/img/svg/finish.svg" alt="" loading="lazy"/>56%
        </div>
    </td>
    <td>15 ноя 23 – 10 фев 24</td>
<tr class="inner-level">
    <td colspan="9">
        <div>
            <table>
                <tr>
                    <td class="add-more" colspan="9">
                        <a class="main-table__add-new" href="#">
                            <svg class="icon icon-add ">
                                <use xlink:href="/web/img/svg/sprite.svg#add"></use>
                            </svg>
                            Добавить квартиру
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="main-table__title">
                            <a class="main-table__toggle-dropdown" href="#">
                                <svg class="icon icon-chevron-right ">
                                    <use xlink:href="/web/img/svg/sprite.svg#chevron-right"></use>
                                </svg>
                            </a>
                            <label class="custom-input form-check"><input class="custom-input__input form-check-input"
                                                                          name="checkbox" type="checkbox"/>
                            </label><a href="#">2.2.2.1. Квартира №27</a>
                        </div>
                    </td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>120</td>
                    <td>426 м²</td>
                    <td>
                        <div class="main-table__goals"><img src="/web/img/svg/fist.svg" alt=""
                                                            loading="lazy"/><span>15</span>/45
                        </div>
                    </td>
                    <td>
                        <div class="main-table__progress"><img src="/web/img/svg/finish.svg" alt="" loading="lazy"/>19%
                        </div>
                    </td>
                    <td>15 ноя 23 – 10 фев 24</td>
                <tr class="inner-level">
                    <td colspan="9">
                        <div>
                            <table>
                                <tr>
                                    <td class="add-more" colspan="9">
                                        <a class="main-table__add-new" href="#">
                                            <svg class="icon icon-add ">
                                                <use xlink:href="/web/img/svg/sprite.svg#add"></use>
                                            </svg>
                                            Добавить помещение
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="main-table__title">
                                            <label class="custom-input form-check"><input
                                                        class="custom-input__input form-check-input" name="checkbox"
                                                        type="checkbox"/>
                                            </label><a href="#">2.2.2.2.1. Кухня</a>
                                        </div>
                                    </td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>546 м²</td>
                                    <td>
                                        <div class="main-table__goals"><img src="/web/img/svg/fist.svg" alt=""
                                                                            loading="lazy"/><span>321</span>/433
                                        </div>
                                    </td>
                                    <td>
                                        <div class="main-table__progress"><img src="/web/img/svg/finish.svg" alt=""
                                                                               loading="lazy"/>90%
                                        </div>
                                    </td>
                                    <td>15 ноя 23 – 10 фев 24</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="main-table__title">
                                            <label class="custom-input form-check"><input
                                                        class="custom-input__input form-check-input" name="checkbox"
                                                        type="checkbox"/>
                                            </label><a href="#">2.2.2.2.1. Санузел</a>
                                        </div>
                                    </td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>546 м²</td>
                                    <td>
                                        <div class="main-table__goals"><img src="/web/img/svg/fist.svg" alt=""
                                                                            loading="lazy"/><span>321</span>/433
                                        </div>
                                    </td>
                                    <td>
                                        <div class="main-table__progress"><img src="/web/img/svg/finish.svg" alt=""
                                                                               loading="lazy"/>90%
                                        </div>
                                    </td>
                                    <td>15 ноя 23 – 10 фев 24</td>
                                </tr>
                            </table>
                        </div>
                    </td>
                </tr>
</tr>
<tr>
    <td>
        <div class="main-table__title">
            <a class="main-table__toggle-dropdown" href="#">
                <svg class="icon icon-chevron-right ">
                    <use xlink:href="/web/img/svg/sprite.svg#chevron-right"></use>
                </svg>
            </a>
            <label class="custom-input form-check"><input class="custom-input__input form-check-input" name="checkbox"
                                                          type="checkbox"/>
            </label><a href="#">2.2.2.1. Квартира №27</a>
        </div>
    </td>
    <td>-</td>
    <td>-</td>
    <td>-</td>
    <td>120</td>
    <td>426 м²</td>
    <td>
        <div class="main-table__goals"><img src="/web/img/svg/fist.svg" alt="" loading="lazy"/><span>15</span>/45
        </div>
    </td>
    <td>
        <div class="main-table__progress"><img src="/web/img/svg/finish.svg" alt="" loading="lazy"/>19%
        </div>
    </td>
    <td>15 ноя 23 – 10 фев 24</td>
<tr class="inner-level">
    <td colspan="9">
        <div>
            <table>
                <tr>
                    <td class="add-more" colspan="9">
                        <a class="main-table__add-new" href="#">
                            <svg class="icon icon-add ">
                                <use xlink:href="/web/img/svg/sprite.svg#add"></use>
                            </svg>
                            Добавить помещение
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="main-table__title">
                            <label class="custom-input form-check"><input class="custom-input__input form-check-input"
                                                                          name="checkbox" type="checkbox"/>
                            </label><a href="#">2.2.2.2.1. Кухня</a>
                        </div>
                    </td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>546 м²</td>
                    <td>
                        <div class="main-table__goals"><img src="/web/img/svg/fist.svg" alt=""
                                                            loading="lazy"/><span>321</span>/433
                        </div>
                    </td>
                    <td>
                        <div class="main-table__progress"><img src="/web/img/svg/finish.svg" alt="" loading="lazy"/>90%
                        </div>
                    </td>
                    <td>15 ноя 23 – 10 фев 24</td>
                </tr>
                <tr>
                    <td>
                        <div class="main-table__title">
                            <label class="custom-input form-check"><input class="custom-input__input form-check-input"
                                                                          name="checkbox" type="checkbox"/>
                            </label><a href="#">2.2.2.2.1. Санузел</a>
                        </div>
                    </td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>546 м²</td>
                    <td>
                        <div class="main-table__goals"><img src="/web/img/svg/fist.svg" alt=""
                                                            loading="lazy"/><span>321</span>/433
                        </div>
                    </td>
                    <td>
                        <div class="main-table__progress"><img src="/web/img/svg/finish.svg" alt="" loading="lazy"/>90%
                        </div>
                    </td>
                    <td>15 ноя 23 – 10 фев 24</td>
                </tr>
            </table>
        </div>
    </td>
</tr>
</tr>
</table>
</div>
</td>
</tr>
</tr>
</table>
</div>
</td>
</tr>
</tr>
</table>
</div>
</td>
</tr>
</tr>
<tr>
    <td>
        <div class="main-table__title">
            <a class="main-table__toggle-dropdown" href="#">
                <svg class="icon icon-chevron-right ">
                    <use xlink:href="/web/img/svg/sprite.svg#chevron-right"></use>
                </svg>
            </a>
            <label class="custom-input form-check"><input class="custom-input__input form-check-input" name="checkbox"
                                                          type="checkbox"/>
            </label><a class="h3" href="#">4. Дом №4</a>
        </div>
    </td>
    <td>4</td>
    <td>-</td>
    <td>126</td>
    <td>280</td>
    <td>1291 м²</td>
    <td>
        <div class="main-table__goals"><img src="/web/img/svg/fist.svg" alt="" loading="lazy"/><span>81</span>/441
        </div>
    </td>
    <td>
        <div class="main-table__progress"><img src="/web/img/svg/finish.svg" alt="" loading="lazy"/>67%
        </div>
    </td>
    <td>15 ноя 23 – 10 фев 24</td>
<tr class="inner-level">
    <td colspan="9">
        <div>
            <table>
                <tr>
                    <td class="add-more" colspan="9">
                        <a class="main-table__add-new" href="#">
                            <svg class="icon icon-add ">
                                <use xlink:href="/web/img/svg/sprite.svg#add"></use>
                            </svg>
                            Добавить подъезд
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="main-table__title">
                            <a class="main-table__toggle-dropdown" href="#">
                                <svg class="icon icon-chevron-right ">
                                    <use xlink:href="/web/img/svg/sprite.svg#chevron-right"></use>
                                </svg>
                            </a>
                            <label class="custom-input form-check"><input class="custom-input__input form-check-input"
                                                                          name="checkbox" type="checkbox"/>
                            </label><a href="#">2.1. Подъезд №1</a>
                        </div>
                    </td>
                    <td>-</td>
                    <td>12</td>
                    <td>36</td>
                    <td>104</td>
                    <td>696 м²</td>
                    <td>
                        <div class="main-table__goals"><img src="/web/img/svg/fist.svg" alt=""
                                                            loading="lazy"/><span>321</span>/433
                        </div>
                    </td>
                    <td>
                        <div class="main-table__progress"><img src="/web/img/svg/finish.svg" alt="" loading="lazy"/>59%
                        </div>
                    </td>
                    <td>15 ноя 23 – 10 фев 24</td>
                <tr class="inner-level">
                    <td colspan="9">
                        <div>
                            <table>
                                <tr>
                                    <td class="add-more" colspan="9">
                                        <a class="main-table__add-new" href="#">
                                            <svg class="icon icon-add ">
                                                <use xlink:href="/web/img/svg/sprite.svg#add"></use>
                                            </svg>
                                            Добавить этаж
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="main-table__title">
                                            <a class="main-table__toggle-dropdown" href="#">
                                                <svg class="icon icon-chevron-right ">
                                                    <use xlink:href="/web/img/svg/sprite.svg#chevron-right"></use>
                                                </svg>
                                            </a>
                                            <label class="custom-input form-check"><input
                                                        class="custom-input__input form-check-input" name="checkbox"
                                                        type="checkbox"/>
                                            </label><a href="#">2.2.1. Этаж №1</a>
                                        </div>
                                    </td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>16</td>
                                    <td>66</td>
                                    <td>436 м²</td>
                                    <td>
                                        <div class="main-table__goals"><img src="/web/img/svg/fist.svg" alt=""
                                                                            loading="lazy"/><span>81</span>/441
                                        </div>
                                    </td>
                                    <td>
                                        <div class="main-table__progress"><img src="/web/img/svg/finish.svg" alt=""
                                                                               loading="lazy"/>56%
                                        </div>
                                    </td>
                                    <td>15 ноя 23 – 10 фев 24</td>
                                <tr class="inner-level">
                                    <td colspan="9">
                                        <div>
                                            <table>
                                                <tr>
                                                    <td class="add-more" colspan="9">
                                                        <a class="main-table__add-new" href="#">
                                                            <svg class="icon icon-add ">
                                                                <use xlink:href="/web/img/svg/sprite.svg#add"></use>
                                                            </svg>
                                                            Добавить квартиру
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="main-table__title">
                                                            <a class="main-table__toggle-dropdown" href="#">
                                                                <svg class="icon icon-chevron-right ">
                                                                    <use xlink:href="/web/img/svg/sprite.svg#chevron-right">
                                                                    </use>
                                                                </svg>
                                                            </a>
                                                            <label class="custom-input form-check"><input
                                                                        class="custom-input__input form-check-input"
                                                                        name="checkbox" type="checkbox"/>
                                                            </label><a href="#">2.2.2.1. Квартира №27</a>
                                                        </div>
                                                    </td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>120</td>
                                                    <td>426 м²</td>
                                                    <td>
                                                        <div class="main-table__goals"><img src="/web/img/svg/fist.svg"
                                                                                            alt=""
                                                                                            loading="lazy"/><span>15</span>/45
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="main-table__progress"><img
                                                                    src="/web/img/svg/finish.svg"
                                                                    alt="" loading="lazy"/>19%
                                                        </div>
                                                    </td>
                                                    <td>15 ноя 23 – 10 фев 24</td>
                                                <tr class="inner-level">
                                                    <td colspan="9">
                                                        <div>
                                                            <table>
                                                                <tr>
                                                                    <td class="add-more" colspan="9">
                                                                        <a class="main-table__add-new" href="#">
                                                                            <svg class="icon icon-add ">
                                                                                <use
                                                                                        xlink:href="/web/img/svg/sprite.svg#add">
                                                                                </use>
                                                                            </svg>
                                                                            Добавить помещение
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="main-table__title">
                                                                            <label
                                                                                    class="custom-input form-check"><input
                                                                                        class="custom-input__input form-check-input"
                                                                                        name="checkbox"
                                                                                        type="checkbox"/>
                                                                            </label><a href="#">2.2.2.2.1. Кухня</a>
                                                                        </div>
                                                                    </td>
                                                                    <td>-</td>
                                                                    <td>-</td>
                                                                    <td>-</td>
                                                                    <td>-</td>
                                                                    <td>546 м²</td>
                                                                    <td>
                                                                        <div class="main-table__goals"><img
                                                                                    src="/web/img/svg/fist.svg" alt=""
                                                                                    loading="lazy"/><span>321</span>/433
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="main-table__progress"><img
                                                                                    src="/web/img/svg/finish.svg" alt=""
                                                                                    loading="lazy"/>90%
                                                                        </div>
                                                                    </td>
                                                                    <td>15 ноя 23 – 10 фев 24</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="main-table__title">
                                                                            <label
                                                                                    class="custom-input form-check"><input
                                                                                        class="custom-input__input form-check-input"
                                                                                        name="checkbox"
                                                                                        type="checkbox"/>
                                                                            </label><a href="#">2.2.2.2.1. Санузел</a>
                                                                        </div>
                                                                    </td>
                                                                    <td>-</td>
                                                                    <td>-</td>
                                                                    <td>-</td>
                                                                    <td>-</td>
                                                                    <td>546 м²</td>
                                                                    <td>
                                                                        <div class="main-table__goals"><img
                                                                                    src="/web/img/svg/fist.svg" alt=""
                                                                                    loading="lazy"/><span>321</span>/433
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="main-table__progress"><img
                                                                                    src="/web/img/svg/finish.svg" alt=""
                                                                                    loading="lazy"/>90%
                                                                        </div>
                                                                    </td>
                                                                    <td>15 ноя 23 – 10 фев 24</td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </td>
                                                </tr>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="main-table__title">
                                            <a class="main-table__toggle-dropdown" href="#">
                                                <svg class="icon icon-chevron-right ">
                                                    <use xlink:href="/web/img/svg/sprite.svg#chevron-right"></use>
                                                </svg>
                                            </a>
                                            <label class="custom-input form-check"><input
                                                        class="custom-input__input form-check-input" name="checkbox"
                                                        type="checkbox"/>
                                            </label><a href="#">2.2.2.1. Квартира №27</a>
                                        </div>
                                    </td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>120</td>
                                    <td>426 м²</td>
                                    <td>
                                        <div class="main-table__goals"><img src="/web/img/svg/fist.svg" alt=""
                                                                            loading="lazy"/><span>15</span>/45
                                        </div>
                                    </td>
                                    <td>
                                        <div class="main-table__progress"><img src="/web/img/svg/finish.svg" alt=""
                                                                               loading="lazy"/>19%
                                        </div>
                                    </td>
                                    <td>15 ноя 23 – 10 фев 24</td>
                                <tr class="inner-level">
                                    <td colspan="9">
                                        <div>
                                            <table>
                                                <tr>
                                                    <td class="add-more" colspan="9">
                                                        <a class="main-table__add-new" href="#">
                                                            <svg class="icon icon-add ">
                                                                <use xlink:href="/web/img/svg/sprite.svg#add"></use>
                                                            </svg>
                                                            Добавить помещение
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="main-table__title">
                                                            <label class="custom-input form-check"><input
                                                                        class="custom-input__input form-check-input"
                                                                        name="checkbox" type="checkbox"/>
                                                            </label><a href="#">2.2.2.2.1. Кухня</a>
                                                        </div>
                                                    </td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>546 м²</td>
                                                    <td>
                                                        <div class="main-table__goals"><img src="/web/img/svg/fist.svg"
                                                                                            alt=""
                                                                                            loading="lazy"/><span>321</span>/433
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="main-table__progress"><img
                                                                    src="/web/img/svg/finish.svg"
                                                                    alt="" loading="lazy"/>90%
                                                        </div>
                                                    </td>
                                                    <td>15 ноя 23 – 10 фев 24</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="main-table__title">
                                                            <label class="custom-input form-check"><input
                                                                        class="custom-input__input form-check-input"
                                                                        name="checkbox" type="checkbox"/>
                                                            </label><a href="#">2.2.2.2.1. Санузел</a>
                                                        </div>
                                                    </td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>546 м²</td>
                                                    <td>
                                                        <div class="main-table__goals"><img src="/web/img/svg/fist.svg"
                                                                                            alt=""
                                                                                            loading="lazy"/><span>321</span>/433
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="main-table__progress"><img
                                                                    src="/web/img/svg/finish.svg"
                                                                    alt="" loading="lazy"/>90%
                                                        </div>
                                                    </td>
                                                    <td>15 ноя 23 – 10 фев 24</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </td>
                                </tr>
                </tr>
            </table>
        </div>
    </td>
</tr>
</tr>
</table>
</div>
</td>
</tr>
</tr>
<tr>
    <td>
        <div class="main-table__title">
            <a class="main-table__toggle-dropdown" href="#">
                <svg class="icon icon-chevron-right ">
                    <use xlink:href="/web/img/svg/sprite.svg#chevron-right"></use>
                </svg>
            </a>
            <label class="custom-input form-check"><input class="custom-input__input form-check-input" name="checkbox"
                                                          type="checkbox"/>
            </label><a href="#">2.1. Подъезд №2</a>
        </div>
    </td>
    <td>-</td>
    <td>12</td>
    <td>36</td>
    <td>104</td>
    <td>696 м²</td>
    <td>
        <div class="main-table__goals"><img src="/web/img/svg/fist.svg" alt="" loading="lazy"/><span>321</span>/433
        </div>
    </td>
    <td>
        <div class="main-table__progress"><img src="/web/img/svg/finish.svg" alt="" loading="lazy"/>59%
        </div>
    </td>
    <td>15 ноя 23 – 10 фев 24</td>
<tr class="inner-level">
    <td colspan="9">
        <div>
            <table>
                <tr>
                    <td class="add-more" colspan="9">
                        <a class="main-table__add-new" href="#">
                            <svg class="icon icon-add ">
                                <use xlink:href="/web/img/svg/sprite.svg#add"></use>
                            </svg>
                            Добавить этаж
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="main-table__title">
                            <a class="main-table__toggle-dropdown" href="#">
                                <svg class="icon icon-chevron-right ">
                                    <use xlink:href="/web/img/svg/sprite.svg#chevron-right"></use>
                                </svg>
                            </a>
                            <label class="custom-input form-check"><input class="custom-input__input form-check-input"
                                                                          name="checkbox" type="checkbox"/>
                            </label><a href="#">2.2.1. Этаж №1</a>
                        </div>
                    </td>
                    <td>-</td>
                    <td>-</td>
                    <td>16</td>
                    <td>66</td>
                    <td>436 м²</td>
                    <td>
                        <div class="main-table__goals"><img src="/web/img/svg/fist.svg" alt=""
                                                            loading="lazy"/><span>81</span>/441
                        </div>
                    </td>
                    <td>
                        <div class="main-table__progress"><img src="/web/img/svg/finish.svg" alt="" loading="lazy"/>56%
                        </div>
                    </td>
                    <td>15 ноя 23 – 10 фев 24</td>
                <tr class="inner-level">
                    <td colspan="9">
                        <div>
                            <table>
                                <tr>
                                    <td class="add-more" colspan="9">
                                        <a class="main-table__add-new" href="#">
                                            <svg class="icon icon-add ">
                                                <use xlink:href="/web/img/svg/sprite.svg#add"></use>
                                            </svg>
                                            Добавить квартиру
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="main-table__title">
                                            <a class="main-table__toggle-dropdown" href="#">
                                                <svg class="icon icon-chevron-right ">
                                                    <use xlink:href="/web/img/svg/sprite.svg#chevron-right"></use>
                                                </svg>
                                            </a>
                                            <label class="custom-input form-check"><input
                                                        class="custom-input__input form-check-input" name="checkbox"
                                                        type="checkbox"/>
                                            </label><a href="#">2.2.2.1. Квартира №27</a>
                                        </div>
                                    </td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>120</td>
                                    <td>426 м²</td>
                                    <td>
                                        <div class="main-table__goals"><img src="/web/img/svg/fist.svg" alt=""
                                                                            loading="lazy"/><span>15</span>/45
                                        </div>
                                    </td>
                                    <td>
                                        <div class="main-table__progress"><img src="/web/img/svg/finish.svg" alt=""
                                                                               loading="lazy"/>19%
                                        </div>
                                    </td>
                                    <td>15 ноя 23 – 10 фев 24</td>
                                <tr class="inner-level">
                                    <td colspan="9">
                                        <div>
                                            <table>
                                                <tr>
                                                    <td class="add-more" colspan="9">
                                                        <a class="main-table__add-new" href="#">
                                                            <svg class="icon icon-add ">
                                                                <use xlink:href="/web/img/svg/sprite.svg#add"></use>
                                                            </svg>
                                                            Добавить помещение
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="main-table__title">
                                                            <label class="custom-input form-check"><input
                                                                        class="custom-input__input form-check-input"
                                                                        name="checkbox" type="checkbox"/>
                                                            </label><a href="#">2.2.2.2.1. Кухня</a>
                                                        </div>
                                                    </td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>546 м²</td>
                                                    <td>
                                                        <div class="main-table__goals"><img src="/web/img/svg/fist.svg"
                                                                                            alt=""
                                                                                            loading="lazy"/><span>321</span>/433
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="main-table__progress"><img
                                                                    src="/web/img/svg/finish.svg"
                                                                    alt="" loading="lazy"/>90%
                                                        </div>
                                                    </td>
                                                    <td>15 ноя 23 – 10 фев 24</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="main-table__title">
                                                            <label class="custom-input form-check"><input
                                                                        class="custom-input__input form-check-input"
                                                                        name="checkbox" type="checkbox"/>
                                                            </label><a href="#">2.2.2.2.1. Санузел</a>
                                                        </div>
                                                    </td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>546 м²</td>
                                                    <td>
                                                        <div class="main-table__goals"><img src="/web/img/svg/fist.svg"
                                                                                            alt=""
                                                                                            loading="lazy"/><span>321</span>/433
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="main-table__progress"><img
                                                                    src="/web/img/svg/finish.svg"
                                                                    alt="" loading="lazy"/>90%
                                                        </div>
                                                    </td>
                                                    <td>15 ноя 23 – 10 фев 24</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </td>
                                </tr>
                </tr>
                <tr>
                    <td>
                        <div class="main-table__title">
                            <a class="main-table__toggle-dropdown" href="#">
                                <svg class="icon icon-chevron-right ">
                                    <use xlink:href="/web/img/svg/sprite.svg#chevron-right"></use>
                                </svg>
                            </a>
                            <label class="custom-input form-check"><input class="custom-input__input form-check-input"
                                                                          name="checkbox" type="checkbox"/>
                            </label><a href="#">2.2.2.1. Квартира №27</a>
                        </div>
                    </td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>120</td>
                    <td>426 м²</td>
                    <td>
                        <div class="main-table__goals"><img src="/web/img/svg/fist.svg" alt=""
                                                            loading="lazy"/><span>15</span>/45
                        </div>
                    </td>
                    <td>
                        <div class="main-table__progress"><img src="/web/img/svg/finish.svg" alt="" loading="lazy"/>19%
                        </div>
                    </td>
                    <td>15 ноя 23 – 10 фев 24</td>
                <tr class="inner-level">
                    <td colspan="9">
                        <div>
                            <table>
                                <tr>
                                    <td class="add-more" colspan="9">
                                        <a class="main-table__add-new" href="#">
                                            <svg class="icon icon-add ">
                                                <use xlink:href="/web/img/svg/sprite.svg#add"></use>
                                            </svg>
                                            Добавить помещение
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="main-table__title">
                                            <label class="custom-input form-check"><input
                                                        class="custom-input__input form-check-input" name="checkbox"
                                                        type="checkbox"/>
                                            </label><a href="#">2.2.2.2.1. Кухня</a>
                                        </div>
                                    </td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>546 м²</td>
                                    <td>
                                        <div class="main-table__goals"><img src="/web/img/svg/fist.svg" alt=""
                                                                            loading="lazy"/><span>321</span>/433
                                        </div>
                                    </td>
                                    <td>
                                        <div class="main-table__progress"><img src="/web/img/svg/finish.svg" alt=""
                                                                               loading="lazy"/>90%
                                        </div>
                                    </td>
                                    <td>15 ноя 23 – 10 фев 24</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="main-table__title">
                                            <label class="custom-input form-check"><input
                                                        class="custom-input__input form-check-input" name="checkbox"
                                                        type="checkbox"/>
                                            </label><a href="#">2.2.2.2.1. Санузел</a>
                                        </div>
                                    </td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>546 м²</td>
                                    <td>
                                        <div class="main-table__goals"><img src="/web/img/svg/fist.svg" alt=""
                                                                            loading="lazy"/><span>321</span>/433
                                        </div>
                                    </td>
                                    <td>
                                        <div class="main-table__progress"><img src="/web/img/svg/finish.svg" alt=""
                                                                               loading="lazy"/>90%
                                        </div>
                                    </td>
                                    <td>15 ноя 23 – 10 фев 24</td>
                                </tr>
                            </table>
                        </div>
                    </td>
                </tr>
</tr>
</table>
</div>
</td>
</tr>
</tr>
<tr>
    <td>
        <div class="main-table__title">
            <a class="main-table__toggle-dropdown" href="#">
                <svg class="icon icon-chevron-right ">
                    <use xlink:href="/web/img/svg/sprite.svg#chevron-right"></use>
                </svg>
            </a>
            <label class="custom-input form-check"><input class="custom-input__input form-check-input" name="checkbox"
                                                          type="checkbox"/>
            </label><a href="#">2.2.1. Этаж №2</a>
        </div>
    </td>
    <td>-</td>
    <td>-</td>
    <td>16</td>
    <td>66</td>
    <td>436 м²</td>
    <td>
        <div class="main-table__goals"><img src="/web/img/svg/fist.svg" alt="" loading="lazy"/><span>81</span>/441
        </div>
    </td>
    <td>
        <div class="main-table__progress"><img src="/web/img/svg/finish.svg" alt="" loading="lazy"/>56%
        </div>
    </td>
    <td>15 ноя 23 – 10 фев 24</td>
<tr class="inner-level">
    <td colspan="9">
        <div>
            <table>
                <tr>
                    <td class="add-more" colspan="9">
                        <a class="main-table__add-new" href="#">
                            <svg class="icon icon-add ">
                                <use xlink:href="/web/img/svg/sprite.svg#add"></use>
                            </svg>
                            Добавить квартиру
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="main-table__title">
                            <a class="main-table__toggle-dropdown" href="#">
                                <svg class="icon icon-chevron-right ">
                                    <use xlink:href="/web/img/svg/sprite.svg#chevron-right"></use>
                                </svg>
                            </a>
                            <label class="custom-input form-check"><input class="custom-input__input form-check-input"
                                                                          name="checkbox" type="checkbox"/>
                            </label><a href="#">2.2.2.1. Квартира №27</a>
                        </div>
                    </td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>120</td>
                    <td>426 м²</td>
                    <td>
                        <div class="main-table__goals"><img src="/web/img/svg/fist.svg" alt=""
                                                            loading="lazy"/><span>15</span>/45
                        </div>
                    </td>
                    <td>
                        <div class="main-table__progress"><img src="/web/img/svg/finish.svg" alt="" loading="lazy"/>19%
                        </div>
                    </td>
                    <td>15 ноя 23 – 10 фев 24</td>
                <tr class="inner-level">
                    <td colspan="9">
                        <div>
                            <table>
                                <tr>
                                    <td class="add-more" colspan="9">
                                        <a class="main-table__add-new" href="#">
                                            <svg class="icon icon-add ">
                                                <use xlink:href="/web/img/svg/sprite.svg#add"></use>
                                            </svg>
                                            Добавить помещение
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="main-table__title">
                                            <label class="custom-input form-check"><input
                                                        class="custom-input__input form-check-input" name="checkbox"
                                                        type="checkbox"/>
                                            </label><a href="#">2.2.2.2.1. Кухня</a>
                                        </div>
                                    </td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>546 м²</td>
                                    <td>
                                        <div class="main-table__goals"><img src="/web/img/svg/fist.svg" alt=""
                                                                            loading="lazy"/><span>321</span>/433
                                        </div>
                                    </td>
                                    <td>
                                        <div class="main-table__progress"><img src="/web/img/svg/finish.svg" alt=""
                                                                               loading="lazy"/>90%
                                        </div>
                                    </td>
                                    <td>15 ноя 23 – 10 фев 24</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="main-table__title">
                                            <label class="custom-input form-check"><input
                                                        class="custom-input__input form-check-input" name="checkbox"
                                                        type="checkbox"/>
                                            </label><a href="#">2.2.2.2.1. Санузел</a>
                                        </div>
                                    </td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>546 м²</td>
                                    <td>
                                        <div class="main-table__goals"><img src="/web/img/svg/fist.svg" alt=""
                                                                            loading="lazy"/><span>321</span>/433
                                        </div>
                                    </td>
                                    <td>
                                        <div class="main-table__progress"><img src="/web/img/svg/finish.svg" alt=""
                                                                               loading="lazy"/>90%
                                        </div>
                                    </td>
                                    <td>15 ноя 23 – 10 фев 24</td>
                                </tr>
                            </table>
                        </div>
                    </td>
                </tr>
</tr>
<tr>
    <td>
        <div class="main-table__title">
            <a class="main-table__toggle-dropdown" href="#">
                <svg class="icon icon-chevron-right ">
                    <use xlink:href="/web/img/svg/sprite.svg#chevron-right"></use>
                </svg>
            </a>
            <label class="custom-input form-check"><input class="custom-input__input form-check-input" name="checkbox"
                                                          type="checkbox"/>
            </label><a href="#">2.2.2.1. Квартира №27</a>
        </div>
    </td>
    <td>-</td>
    <td>-</td>
    <td>-</td>
    <td>120</td>
    <td>426 м²</td>
    <td>
        <div class="main-table__goals"><img src="/web/img/svg/fist.svg" alt="" loading="lazy"/><span>15</span>/45
        </div>
    </td>
    <td>
        <div class="main-table__progress"><img src="/web/img/svg/finish.svg" alt="" loading="lazy"/>19%
        </div>
    </td>
    <td>15 ноя 23 – 10 фев 24</td>
<tr class="inner-level">
    <td colspan="9">
        <div>
            <table>
                <tr>
                    <td class="add-more" colspan="9">
                        <a class="main-table__add-new" href="#">
                            <svg class="icon icon-add ">
                                <use xlink:href="/web/img/svg/sprite.svg#add"></use>
                            </svg>
                            Добавить помещение
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="main-table__title">
                            <label class="custom-input form-check"><input class="custom-input__input form-check-input"
                                                                          name="checkbox" type="checkbox"/>
                            </label><a href="#">2.2.2.2.1. Кухня</a>
                        </div>
                    </td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>546 м²</td>
                    <td>
                        <div class="main-table__goals"><img src="/web/img/svg/fist.svg" alt=""
                                                            loading="lazy"/><span>321</span>/433
                        </div>
                    </td>
                    <td>
                        <div class="main-table__progress"><img src="/web/img/svg/finish.svg" alt="" loading="lazy"/>90%
                        </div>
                    </td>
                    <td>15 ноя 23 – 10 фев 24</td>
                </tr>
                <tr>
                    <td>
                        <div class="main-table__title">
                            <label class="custom-input form-check"><input class="custom-input__input form-check-input"
                                                                          name="checkbox" type="checkbox"/>
                            </label><a href="#">2.2.2.2.1. Санузел</a>
                        </div>
                    </td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>546 м²</td>
                    <td>
                        <div class="main-table__goals"><img src="/web/img/svg/fist.svg" alt=""
                                                            loading="lazy"/><span>321</span>/433
                        </div>
                    </td>
                    <td>
                        <div class="main-table__progress"><img src="/web/img/svg/finish.svg" alt="" loading="lazy"/>90%
                        </div>
                    </td>
                    <td>15 ноя 23 – 10 фев 24</td>
                </tr>
            </table>
        </div>
    </td>
</tr>
</tr>
</table>
</div>
</td>
</tr>
</tr>
</table>
</div>
</td>
</tr>
</tr>
</table>
</div>
</td>
</tr>
</tr>
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
</div><img class="page-bg" src="/web/img/svg/page-bg.svg" alt="" loading="lazy"/>
</div>