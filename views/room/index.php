<?php
/** @var TYPE_NAME $room */
/** @var TYPE_NAME $flat */
/** @var TYPE_NAME $floor */
/** @var TYPE_NAME $entrance */
/** @var TYPE_NAME $home */
/** @var TYPE_NAME $object */
/** @var TYPE_NAME $flats */
use app\widgets\SwiperBreadcrumbs;
?>

<div class="main-center-wrap">
    <main>
        <div class="page-head">
            <div class="container-fluid">
                <div class="page-head__row row align-items-center">
                    <div class="col">
                        <?
                            $breadcrumbsLinks = [['label' => $object->name, 'url' => '/web/site/object/' . $object->id], ['label' => $home->name, 'url' => '/web/home/index/' . $home->id], ['label' => $entrance->name, 'url' => '/web/entrance/index/' . $entrance->id], ['label' => $floor->name, 'url' => '/web/floor/index/' . $floor->id],  ['label' => $flat->name, 'url' => '/web/flat/index/' . $flat->id], ['label' => $room->name]];
                            echo SwiperBreadcrumbs::widget(['links' => $breadcrumbsLinks]);
                        ?>
                    </div>
                    <div class="page-head__col col-lg order-md-4">
                        <h1><?= $room->name ?>
                            <div class="badge badge-primary">33%</div>
                        </h1>
                        <div class="page-head__sample">
                            <svg class="icon icon-check2 ">
                                <use xlink:href="/web/img/svg/sprite.svg#check2"></use>
                            </svg>Замеры
                        </div>
                    </div>
                    <div class="col-12 d-none d-md-block m-0 p-0 order-md-3"></div>
                    <div class="page-head__col col-md-auto order-md-2">
                        <a class="page-head__edit" href="/web/room/edit/<?= $id ?>">Редактировать
                            <svg class="icon icon-edit ">
                                <use xlink:href="/web/img/svg/sprite.svg#edit"></use>
                            </svg>
                        </a>
                    </div>
                    <div class="page-head__col col-md-auto order-md-last">
                        <div class="startDate">
                            <svg class="icon icon-calendar ">
                                <use xlink:href="/web/img/svg/sprite.svg#calendar"></use>
                            </svg><?= Yii::$app->formatter->asDate($room->date_start); ?> – <?= Yii::$app->formatter->asDate($room->date_finish); ?>
                        </div>
                    </div>
                    <div class="page-head__col col-md-auto order-md-5">
                        <div class="task-stat">
                            <svg class="icon icon-fist ">
                                <use xlink:href="/web/img/svg/sprite.svg#fist"></use>
                            </svg>321/433
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- start sObjectDetails-->
        <div class="sObjectDetails section" id="sObjectDetails">
            <div class="container-fluid">
                <div class="sObjectDetails__header">
                    <div class="details-with-toggle details-with-toggle--js">
                        <div class="details-with-toggle__wrap">
                            <div class="details-with-toggle__stats-row details-with-toggle__stats-row--without-span row">
                                <div class="details-with-toggle__col col-md-auto">
                                    <div class="details-with-toggle__item"><span>Этаж</span>
                                        <p>7 эт
                                        </p>
                                    </div>
                                </div>
                                <div class="details-with-toggle__col col-md-auto">
                                    <div class="details-with-toggle__item"><span>Квартиры</span>
                                        <p>728 кв
                                        </p>
                                    </div>
                                </div>
                                <div class="details-with-toggle__col col-md-auto">
                                    <div class="details-with-toggle__item"><span>Помещения</span>
                                        <p>1350 пом
                                        </p>
                                    </div>
                                </div>
                                <div class="details-with-toggle__col col-md-auto">
                                    <div class="details-with-toggle__item"><span>Площадь</span>
                                        <p>S 3440 м²
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="details-with-toggle__btn-more btn d-md-none">
                            <div class="show">Подробнее</div>
                            <div class="hide">Свернуть</div>
                            <svg class="icon icon-chevron-down ">
                                <use xlink:href="/web/img/svg/sprite.svg#chevron-down"></use>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- end sObjectDetails-->
        <!-- start sMainInfo-->
        <div class="sMainInfo section" id="sMainInfo">
            <div class="container-fluid">
                <div class="sMainInfo__wrap">
                    <div class="toggle-block swiper freeMode-slider freeMode-slider--js">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a class="toggle-block__btn btn btn-outline-light active" href="#">
                                    <svg class="icon icon-list ">
                                        <use xlink:href="/web/img/svg/sprite.svg#list"></use>
                                    </svg><span>Список</span>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a class="toggle-block__btn btn btn-outline-light" href="#">
                                    <svg class="icon icon-tasks ">
                                        <use xlink:href="/web/img/svg/sprite.svg#tasks"></use>
                                    </svg><span>Задачи</span>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a class="toggle-block__btn btn btn-outline-light" href="#">
                                    <svg class="icon icon-gantt ">
                                        <use xlink:href="/web/img/svg/sprite.svg#gantt"></use>
                                    </svg><span>График работ</span>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a class="toggle-block__btn btn btn-outline-light" href="#">
                                    <svg class="icon icon-info ">
                                        <use xlink:href="/web/img/svg/sprite.svg#info"></use>
                                    </svg><span>Информация</span>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a class="toggle-block__btn btn btn-outline-light" href="#">
                                    <svg class="icon icon-pen ">
                                        <use xlink:href="/web/img/svg/sprite.svg#pen"></use>
                                    </svg><span>Заметки</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sMainInfo__selects-wrap">
                    <div class="row">
                        <div class="sMainInfo__col col-md col-xl-3">
                            <div class="custom-select-wrap custom-select-wrap--third-type">
                                <select class="basic-select basic-select--js">
                                    <option>Все бригады</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                </select>
                            </div>
                        </div>
                        <div class="sMainInfo__col col-md col-xl-3">
                            <div class="custom-select-wrap custom-select-wrap--third-type">
                                <select class="basic-select basic-select--js">
                                    <option>Все поверхности</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                </select>
                            </div>
                        </div>
                        <div class="sMainInfo__col col-md col-xl-3">
                            <div class="custom-select-wrap custom-select-wrap--third-type">
                                <select class="basic-select basic-select--js">
                                    <option>Все работы</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                </select>
                            </div>
                        </div>
                        <div class="col col-md-12 order-md-last me-auto">
                            <div class="custom-select-wrap custom-select-wrap--second-type">
                                <div class="custom-select-wrap__label text-secondary">Сортировать по
                                </div>
                                <select class="basic-select basic-select--js">
                                    <option>Все статусы</option>
                                    <option>Планирование</option>
                                    <option>В работе</option>
                                    <option>Все статусы</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-auto ms-md-auto">
                            <a class="sMainInfo__reset" href="#">Сбросить
                            </a>
                        </div>
                    </div>
                </div>
                <div class="main-table main-table--2">
                    <table>
                        <thead>
                        <tr>
                            <th>Задача</th>
                            <th>Поверхность</th>
                            <th>Бригада</th>
                            <th>Площадь</th>
                            <th>Сроки</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="add-more" colspan="5">
                                <a class="main-table__add-new" href="#">
                                    <svg class="icon icon-add ">
                                        <use xlink:href="/web/img/svg/sprite.svg#add"></use>
                                    </svg>Добавить дом
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="main-table__title">
                                    <label class="custom-input form-check">
                                        <input class="custom-input__input form-check-input" name="checkbox" type="checkbox" />
                                    </label>
                                    <div class="badge badge-primary">В работе </div><a href="#">1. Натяжка потолка</a>
                                </div>
                            </td>
                            <td>Потолок</td>
                            <td>Бригада №3</td>
                            <td>1300 м²</td>
                            <td>30 ноя 23 – 30 фев 24</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="main-table__title">
                                    <label class="custom-input form-check">
                                        <input class="custom-input__input form-check-input" name="checkbox" type="checkbox" />
                                    </label>
                                    <div class="badge badge-success">Завершен</div><a href="#">2. Шпаклевка стен</a>
                                </div>
                            </td>
                            <td>Пол</td>
                            <td>Бригада №3</td>
                            <td>1300 м²</td>
                            <td>30 ноя 23 – 30 фев 24</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="main-table__title">
                                    <label class="custom-input form-check">
                                        <input class="custom-input__input form-check-input" name="checkbox" type="checkbox" />
                                    </label>
                                    <div class="badge badge-primary">В работе </div><a href="#">3. Заливка полов</a>
                                </div>
                            </td>
                            <td>Стены</td>
                            <td>Бригада №3</td>
                            <td>1300 м²</td>
                            <td>30 ноя 23 – 30 фев 24</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="main-table__title">
                                    <label class="custom-input form-check">
                                        <input class="custom-input__input form-check-input" name="checkbox" type="checkbox" />
                                    </label>
                                    <div class="badge badge-primary">В работе </div><a href="#">4. Штукатурка стен</a>
                                </div>
                            </td>
                            <td>Стены</td>
                            <td>Бригада №3</td>
                            <td>1300 м²</td>
                            <td class="text-danger">
                                <svg class="icon icon-warning ">
                                    <use xlink:href="/web/img/svg/sprite.svg#warning"></use>
                                </svg>30 ноя 23 – 30 фев 24
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="main-table__title">
                                    <label class="custom-input form-check">
                                        <input class="custom-input__input form-check-input" name="checkbox" type="checkbox" />
                                    </label>
                                    <div class="badge badge-primary">В работе </div><a href="#">5. Заливка</a>
                                </div>
                            </td>
                            <td>Потолок</td>
                            <td>Бригада №3</td>
                            <td>1300 м²</td>
                            <td>30 ноя 23 – 30 фев 24</td>
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