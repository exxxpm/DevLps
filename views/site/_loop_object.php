<?php /** @var TYPE_NAME $object */ ?>

<div class="sObject__col col-sm-6 col-lg-4 col-xxl-auto">
    <div class="sObject-card" style="--bgDefColor: <?= '#'.$object->status->color_bg ?>">
        <a class="h4" href="/web/site/object/<?= $object->id ?>"><?= $object->name ?></a>
        <p><?= Yii::$app->formatter->asDate($object->date_start); ?> - <?= Yii::$app->formatter->asDate($object->date_finish); ?></p>
        <div class="sObject-card__row row">
            <div class="col">
                <div class="badge <?= $object->status->color ?>"> <img class="img-svg-js" src="/web/img/svg/<?= $object->status->img ?>" alt="" loading="lazy"/><?= $object->status->name ?></div>
            </div>
            <div class="col-auto">
                <a class="sObject-card__link" href="#">
                    <svg class="icon icon-edit ">
                        <use xlink:href="/web/img/svg/sprite.svg#edit"></use>
                    </svg>
                </a>
            </div>
        </div>
        <div class="sObject-card__line" style="--width: 50%"></div>
    </div>
</div>