<?php use app\widgets\SwiperBreadcrumbs;?>

<div class="page-head">
    <div class="container-fluid">
        <div class="page-head__row row align-items-center">
            <div class="col">
                <? echo SwiperBreadcrumbs::widget(['model_name' => 'Entrance', 'model_id' => $id]); ?>

            </div>
            <div class="page-head__col col-lg order-md-4">
                <h1><?= $entrance->name ?>
                    <div class="badge badge-primary">33%</div>
                </h1>
            </div>
            <div class="col-12 d-none d-md-block m-0 p-0 order-md-3"></div>
            <div class="page-head__col col-md-auto order-md-2">
                <a class="page-head__edit" href="/web/entrance/edit/<?= $id ?>">Редактировать
                    <svg class="icon icon-edit ">
                        <use xlink:href="/web/img/svg/sprite.svg#edit"></use>
                    </svg>
                </a>
            </div>
            <div class="page-head__col col-md-auto order-md-last">
                <div class="startDate">
                    <svg class="icon icon-calendar ">
                        <use xlink:href="/web/img/svg/sprite.svg#calendar"></use>
                    </svg><?= Yii::$app->formatter->asDate($entrance->date_start); ?> – <?= Yii::$app->formatter->asDate($entrance->date_start); ?>
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
                                <p><?= $entrance->floors ?> эт</p>
                            </div>
                        </div>
                        <div class="details-with-toggle__col col-md-auto">
                            <div class="details-with-toggle__item"><span>Квартиры</span>
                                <p><?= $entrance->flats ?> кв</p>
                            </div>
                        </div>
                        <div class="details-with-toggle__col col-md-auto">
                            <div class="details-with-toggle__item"><span>Помещения</span>
                                <p><?= $entrance->rooms ?> пом</p>
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