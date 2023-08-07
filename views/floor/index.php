<?php
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
                        $breadcrumbsLinks = [['label' => $object->name, 'url' => '/web/site/object/' . $object->id], ['label' => $home->name, 'url' => '/web/home/index/' . $home->id], ['label' => $entrance->name, 'url' => '/web/entrance/index/' . $entrance->id], ['label' => $floor->name]];
                        echo SwiperBreadcrumbs::widget(['links' => $breadcrumbsLinks]);
                        ?>
                    </div>
                    <div class="page-head__col col-lg order-md-4">
                        <h1><?= $floor->name ?>
                            <div class="badge badge-primary">33%</div>
                        </h1>
                    </div>
                    <div class="col-12 d-none d-md-block m-0 p-0 order-md-3"></div>
                    <div class="page-head__col col-md-auto order-md-2">
                        <a class="page-head__edit" href="/web/floor/edit/<?= $id ?>">Редактировать
                            <svg class="icon icon-edit ">
                                <use xlink:href="/web/img/svg/sprite.svg#edit"></use>
                            </svg>
                        </a>
                    </div>
                    <div class="page-head__col col-md-auto order-md-last">
                        <div class="startDate">
                            <svg class="icon icon-calendar ">
                                <use xlink:href="/web/img/svg/sprite.svg#calendar"></use>
                            </svg><?= Yii::$app->formatter->asDate($floor->date_start); ?> – <?= Yii::$app->formatter->asDate($floor->date_start); ?>
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
                    <div class="sObjectDetails__row row">
                        <div class="col-sm-6 col-lg-4 col-xl-3">
                            <div class="work-status">
                                <div class="row">
                                    <div class="col">Стяжка пола</div>
                                    <div class="col-auto fw-500">22%</div>
                                </div>
                                <div class="line" style="--w: 22%; --bgColor: #467CF4"></div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 col-xl-3">
                            <div class="work-status">
                                <div class="row">
                                    <div class="col">Натяжка потолка</div>
                                    <div class="col-auto fw-500">22%</div>
                                </div>
                                <div class="line" style="--w: 22%; --bgColor: #1DBA6F"></div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 col-xl-3">
                            <div class="work-status">
                                <div class="row">
                                    <div class="col">Штукатурка стен</div>
                                    <div class="col-auto fw-500">22%</div>
                                </div>
                                <div class="line" style="--w: 22%; --bgColor: #F4B13E"></div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 col-xl-3">
                            <div class="work-status">
                                <div class="row">
                                    <div class="col">Шпаклевка стен</div>
                                    <div class="col-auto fw-500">22%</div>
                                </div>
                                <div class="line" style="--w: 22%; --bgColor: #9A52DF"></div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 col-xl-3">
                            <div class="work-status">
                                <div class="row">
                                    <div class="col">Затирка</div>
                                    <div class="col-auto fw-500">22%</div>
                                </div>
                                <div class="line" style="--w: 22%; --bgColor: #E94410"></div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 col-xl-3">
                            <div class="work-status">
                                <div class="row">
                                    <div class="col">Плинтус</div>
                                    <div class="col-auto fw-500">22%</div>
                                </div>
                                <div class="line" style="--w: 22%; --bgColor: #8B9298"></div>
                            </div>
                        </div>
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
                                <a class="main-table__add-new" href="/web/flat/add/<?= $id ?>">
                                    <svg class="icon icon-add ">
                                        <use xlink:href="/web/img/svg/sprite.svg#add"></use>
                                    </svg>Добавить квартиру
                                </a>
                            </td>
                        </tr>
                        <?
                            if (!empty($flats)) {
                                foreach ($flats as $flat) {
                                   echo $this->render('_loop_flat', compact('flat', 'id'));
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
</div>