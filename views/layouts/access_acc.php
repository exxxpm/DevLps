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
    <?= Html::csrfMetaTags() ?>
    <?php $this->head() ?>
</head>

<body class="main-page" data-bg="01-3-house.jpg">
<?php $this->beginBody() ?>
<div class="vh-100 d-flex justify-content-center align-items-center">
    <?= $content ?>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
