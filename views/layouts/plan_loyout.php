<?php

/** @var yii\web\View $this */
/** @var string $content */
use app\assets\PlanAsset;
use yii\helpers\Html;

PlanAsset::register($this);
?>

<?php $this->beginPage() ?>
<!doctype html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <title><?= Html::encode($this->title) ?></title>
    <?= Html::csrfMetaTags() ?>
    <style>
        *{
            box-sizing: border-box;
        }

        html, body, #app {
            width: 100%;
            height: 100%;
            padding: 0;
            margin: 0;
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            position: absolute;
            left: 0;
            top: 0;
        }
    </style>
    <?php $this->head() ?>
</head>

<body>
<?php $this->beginBody() ?>
<?= $content ?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
