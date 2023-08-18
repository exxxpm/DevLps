<?php use app\widgets\SwiperBreadcrumbs;?>
<div class="page-head">
    <div class="container-fluid">
        <div class="page-head__row row align-items-center">
            <div class="col">
                <? echo SwiperBreadcrumbs::widget(['model_name' => 'Room', 'model_id' => $id]); ?>
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