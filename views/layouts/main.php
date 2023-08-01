<?php

/** @var yii\web\View $this */
/** @var string $content */
use app\assets\AppAsset;
use yii\helpers\Html;

AppAsset::register($this);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/ico', 'href' => Yii::getAlias('@web/img/favicon.ico')]);
?>

<?php $this->beginPage() ?>
<!doctype html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>

    <body class="main-page" data-bg="main.jpg">
        <?php $this->beginBody() ?>
        <div class="main-wrapper">
            <aside>
                <div class="aside-wrap">
                    <a class="aside-wrap__logo" href="#">
                        <?= Html::img('@web/img/svg/logo.svg', ['class' => 'd-none d-md-block', 'alt' => '', 'loading' => 'lazy']) ?>
                        <?= Html::img('@web/img/svg/logo-sm.svg', ['class' => 'd-md-none', 'alt' => '', 'loading' => 'lazy']) ?>
                    </a>
                    <div class="aside-wrap__nav">
                        <ul>
                            <li>
                                <a class="active" href="#" data-bs-toggle="tooltip" data-bs-placement="right" title="Объекты">
                                    <svg class="icon icon-objects ">
                                        <use xlink:href="/web/img/svg/sprite.svg#objects"></use>
                                    </svg>
                                    <span>Объекты</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="right" title="Задачи">
                                    <svg class="icon icon-tasks ">
                                        <use xlink:href="/web/img/svg/sprite.svg#tasks"></use>
                                    </svg>
                                    <span>Задачи</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="right" title="Бригады">
                                    <svg class="icon icon-workers ">
                                        <use xlink:href="/web/img/svg/sprite.svg#workers"></use>
                                    </svg>
                                    <span>Бригады</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="right" title="Документы">
                                    <svg class="icon icon-file ">
                                        <use xlink:href="/web/img/svg/sprite.svg#file"></use>
                                    </svg><span>Документы</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="avatar-wrap">
                        <a class="avatar" href="#">
                            <span>МИ</span>
                            <?= Html::img('@web/img/avatar.jpg', ['alt' => '', 'loading' => 'lazy']) ?>
                        </a>
                    </div>
                    <a class="aside-wrap__settings" href="#">
                        <svg class="icon icon-settings ">
                            <use xlink:href="/web/img/svg/sprite.svg#settings"></use>
                        </svg>
                    </a>
                </div>
            </aside>
            <?= $content ?>
        </div>
        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
