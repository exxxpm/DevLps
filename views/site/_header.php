<?php
/** @var TYPE_NAME $object */

use yii\widgets\Pjax;
use yii\helpers\Html;
use app\widgets\SwiperBreadcrumbs;

?>

<div class="page-head mb-0">
    <div class="container-fluid">
        <div class="page-head__row row align-items-center">
            <div class="col">
                <?
                $breadcrumbsLinks = [['label' => $object->name],];
                echo SwiperBreadcrumbs::widget(['links' => $breadcrumbsLinks]);
                ?>
            </div>
            <div class="col-12 d-none d-md-block m-0 p-0 order-md-3"></div>
            <div class="page-head__col col-md-auto order-md-2 d-none d-md-block">
                <a class="page-head__edit" href="/web/site/edit/<?= $id ?>">Редактировать
                    <svg class="icon icon-edit ">
                        <use xlink:href="/web/img/svg/sprite.svg#edit"></use>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- start sPageInfo-->
<div class="sPageInfo section" id="sPageInfo">
    <div class="sPageInfo__continer container-fluid tabs">
        <div class="sPageInfo__wrap bg-wrap">
            <div class="tabs__wrap">
                <div class="tabs__content active"><img class="object-fit-js picture-bg" src="/web/img/service-1.jpg"
                                                       alt="" loading="lazy"/>
                </div>
                <div class="tabs__content"><img class="object-fit-js picture-bg" src="/web/img/service-1.jpg" alt=""
                                                loading="lazy"/>
                </div>
                <div class="tabs__content"><img class="object-fit-js picture-bg" src="/web/img/service-1.jpg" alt=""
                                                loading="lazy"/>
                </div>
                <div class="tabs__content"><img class="object-fit-js picture-bg" src="/web/img/service-1.jpg" alt=""
                                                loading="lazy"/>
                </div>
                <div class="tabs__content"><img class="object-fit-js picture-bg" src="/web/img/service-1.jpg" alt=""
                                                loading="lazy"/>
                </div>
                <div class="tabs__content"><img class="object-fit-js picture-bg" src="/web/img/service-1.jpg" alt=""
                                                loading="lazy"/>
                </div>
            </div>
            <div class="sPageInfo__row row">
                <div class="sPageInfo__section-title-col col-md">
                    <div class="section-title">
                        <h1><?= $object->name ?></h1>
                        <div class="select-status">
                            <?php
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

                            <?php Pjax::begin(['id' => 'status-dropdown']); ?>

                            <?= Html::dropDownList(
                                'status_id',
                                $object->status_id,
                                $statusOptions,
                                [
                                    'class' => 'custom-select--js',
                                    'encode' => false,
                                    'options' => array_reduce($options, function ($carry, $option) {
                                        $imgSrc = Html::encode($option['img']);
                                        $carry[$option['value']] = ['data-img' => $imgSrc];
                                        return $carry;
                                    }, []),
                                    'data-pjax' => 1,
                                    'data-id' => $object->id
                                ]
                            );
                            ?>

                            <?php Pjax::end(); ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-auto">
                    <div class="sPageInfo__inner-wrap">
                        <div class="task-stat">
                            <svg class="icon icon-fist ">
                                <use xlink:href="/web/img/svg/sprite.svg#fist"></use>
                            </svg>
                            321/433
                        </div>
                        <div class="startDate">
                            <svg class="icon icon-calendar ">
                                <use xlink:href="/web/img/svg/sprite.svg#calendar"></use>
                            </svg>
                            <?= Yii::$app->formatter->asDate($object->date_start); ?>
                            - <?= Yii::$app->formatter->asDate($object->date_finish); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sPageInfo__body-row row">
                <div class="col-md">
                    <div class="circular-progress-bar" style="--percent: 34; --bgColor: #467CF4;">
                        <div class="percent">
                            <svg viewBox="0 0 216 216" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="108" cy="108" r="84"></circle>
                                <circle cx="108" cy="108" r="84"></circle>
                            </svg>
                            <div class="number">
                                <h2>34%</h2>
                                <p>Прогресс</p>
                            </div>
                        </div>
                    </div>
                    <div class="details-with-toggle details-with-toggle--js d-none d-md-block">
                        <div class="details-with-toggle__wrap">
                            <div class="details-with-toggle__stats-row row">
                                <div class="details-with-toggle__col col-md-3 col-xl">
                                    <div class="details-with-toggle__item"><span>Срок</span>
                                        <p>90дней
                                        </p>
                                    </div>
                                </div>
                                <div class="details-with-toggle__col col-md-3 col-xl">
                                    <div class="details-with-toggle__item"><span>До конца</span>
                                        <p>76 дней
                                        </p>
                                    </div>
                                </div>
                                <div class="details-with-toggle__col col-md-3 col-xl">
                                    <div class="details-with-toggle__item"><span>План</span>
                                        <p>11 фев 24
                                        </p>
                                    </div>
                                </div>
                                <div class="details-with-toggle__col col-md-3 col-xl">
                                    <div class="details-with-toggle__item"><span>Факт</span>
                                        <p class="text-danger">
                                            <svg class="icon icon-warning ">
                                                <use xlink:href="/web/img/svg/sprite.svg#warning"></use>
                                            </svg>
                                            14 фев 24
                                        </p>
                                    </div>
                                </div>
                                <div class="details-with-toggle__col col-md-3 col-xl">
                                    <div class="details-with-toggle__item"><span>График</span>
                                        <p class="text-danger">
                                            <svg class="icon icon-warning ">
                                                <use xlink:href="/web/img/svg/sprite.svg#warning"></use>
                                            </svg>
                                            3 дн
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div
                                    class="details-with-toggle__stats-row details-with-toggle__stats-row--without-span row">
                                <div class="details-with-toggle__col col-md-3 col-xl">
                                    <div class="details-with-toggle__item"><span>Дома</span>
                                        <p>3 дом
                                        </p>
                                    </div>
                                </div>
                                <div class="details-with-toggle__col col-md-3 col-xl">
                                    <div class="details-with-toggle__item"><span>Подъезды</span>
                                        <p>12 под
                                        </p>
                                    </div>
                                </div>
                                <div class="details-with-toggle__col col-md-3 col-xl">
                                    <div class="details-with-toggle__item"><span>Квартиры</span>
                                        <p>728 кв
                                        </p>
                                    </div>
                                </div>
                                <div class="details-with-toggle__col col-md-3 col-xl">
                                    <div class="details-with-toggle__item"><span>Помещения</span>
                                        <p>1350 пом
                                        </p>
                                    </div>
                                </div>
                                <div class="details-with-toggle__col col-md-3 col-xl">
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
                <div class="sPageInfo__col col-md-5 col-xxl-auto">
                    <div class="sPageInfo__inner-row row tabs__caption">
                        <div class="col-12 tabs__btn active">
                            <div class="work-status">
                                <div class="row">
                                    <div class="col">Стяжка пола</div>
                                    <div class="col-auto fw-500">22%</div>
                                </div>
                                <div class="line" style="--w: 22%; --bgColor: #467CF4"></div>
                            </div>
                        </div>
                        <div class="col-12 tabs__btn">
                            <div class="work-status">
                                <div class="row">
                                    <div class="col">Натяжка потолка</div>
                                    <div class="col-auto fw-500">63%</div>
                                </div>
                                <div class="line" style="--w: 63%; --bgColor: #1DBA6F"></div>
                            </div>
                        </div>
                        <div class="col-12 tabs__btn">
                            <div class="work-status">
                                <div class="row">
                                    <div class="col">Штукатурка стен</div>
                                    <div class="col-auto fw-500">90%</div>
                                </div>
                                <div class="line" style="--w: 90%; --bgColor: #F4B13E"></div>
                            </div>
                        </div>
                        <div class="col-12 tabs__btn">
                            <div class="work-status">
                                <div class="row">
                                    <div class="col">Шпаклевание стен</div>
                                    <div class="col-auto fw-500">33%</div>
                                </div>
                                <div class="line" style="--w: 33%; --bgColor: #9A52DF"></div>
                            </div>
                        </div>
                        <div class="col-12 tabs__btn">
                            <div class="work-status">
                                <div class="row">
                                    <div class="col">Затирка</div>
                                    <div class="col-auto fw-500">100%</div>
                                </div>
                                <div class="line" style="--w: 100%; --bgColor: #E94410"></div>
                            </div>
                        </div>
                        <div class="col-12 tabs__btn">
                            <div class="work-status">
                                <div class="row">
                                    <div class="col">Плинтус</div>
                                    <div class="col-auto fw-500">3%</div>
                                </div>
                                <div class="line" style="--w: 3%; --bgColor: #8B9298"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="details-with-toggle details-with-toggle--js d-md-none">
            <div class="details-with-toggle__wrap">
                <div class="details-with-toggle__stats-row row">
                    <div class="details-with-toggle__col col-md">
                        <div class="details-with-toggle__item"><span>Срок</span>
                            <p>90дней
                            </p>
                        </div>
                    </div>
                    <div class="details-with-toggle__col col-md">
                        <div class="details-with-toggle__item"><span>До конца</span>
                            <p>76 дней
                            </p>
                        </div>
                    </div>
                    <div class="details-with-toggle__col col-md">
                        <div class="details-with-toggle__item"><span>План</span>
                            <p>11 фев 24
                            </p>
                        </div>
                    </div>
                    <div class="details-with-toggle__col col-md">
                        <div class="details-with-toggle__item"><span>Факт</span>
                            <p class="text-danger">
                                <svg class="icon icon-warning ">
                                    <use xlink:href="/web/img/svg/sprite.svg#warning"></use>
                                </svg>
                                14 фев 24
                            </p>
                        </div>
                    </div>
                    <div class="details-with-toggle__col col-md">
                        <div class="details-with-toggle__item"><span>График</span>
                            <p class="text-danger">
                                <svg class="icon icon-warning ">
                                    <use xlink:href="/web/img/svg/sprite.svg#warning"></use>
                                </svg>
                                3 дн
                            </p>
                        </div>
                    </div>
                </div>
                <div class="details-with-toggle__stats-row details-with-toggle__stats-row--without-span row">
                    <div class="details-with-toggle__col col-md">
                        <div class="details-with-toggle__item"><span>Дома</span>
                            <p>3 дом
                            </p>
                        </div>
                    </div>
                    <div class="details-with-toggle__col col-md">
                        <div class="details-with-toggle__item"><span>Подъезды</span>
                            <p>12 под
                            </p>
                        </div>
                    </div>
                    <div class="details-with-toggle__col col-md">
                        <div class="details-with-toggle__item"><span>Квартиры</span>
                            <p>728 кв
                            </p>
                        </div>
                    </div>
                    <div class="details-with-toggle__col col-md">
                        <div class="details-with-toggle__item"><span>Помещения</span>
                            <p>1350 пом
                            </p>
                        </div>
                    </div>
                    <div class="details-with-toggle__col col-md">
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
<!-- end sPageInfo-->
