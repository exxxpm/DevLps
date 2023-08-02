<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Html;

?>
    <div class="main-center-wrap">
        <main>
            <div class="page-head">
                <div class="container-fluid">
                    <div class="page-head__row row align-items-center">
                        <div class="col">
                            <nav class="swiper freeMode-slider--js" aria-label="breadcrumb">
                                <ol class="breadcrumb swiper-wrapper" itemscope="itemscope"
                                    itemtype="http://schema.org/BreadcrumbList">
                                    <li class="breadcrumb-item active swiper-slide" itemprop="itemListElement"
                                        itemscope="itemscope" itemtype="http://schema.org/ListItem">
                                        <a href="/" itemprop="item">
                                            <span itemprop="name">Объекты</span>
                                            <meta itemprop="position" content="1"/>
                                        </a>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                        <div class="page-head__col col-lg order-md-4"><h1>Объекты</h1></div>
                        <div class="col-12 d-none d-md-block m-0 p-0 order-md-3"></div>
                    </div>
                </div>
            </div>
            <!-- start sObject-->
            <div class="sObject section" id="sObject">
                <div class="container-fluid">
                    <?= Html::beginForm(['index'], 'get', ['enctype' => 'multipart/form-data', 'id' => 'view-object', 'class' => 'sObject__head-row row']) ?>
                    <div class="col-auto ms-auto ms-md-0 me-auto me-md-0">
                        <div class="custom-select-wrap custom-select-wrap--first-type"  data-number="<?= (isset($total_count) ? $total_count : count($objects)); ?>">
                            <?= Html::dropDownList('status', Yii::$app->request->get('status'), ArrayHelper::map($status, 'id', 'name'), ['class' => 'basic-select basic-select--js']) ?>
                            <div class="custom-select-wrap__label">1</div>
                        </div>
                    </div>
                    <div class="col-auto ms-auto me-auto me-md-0">
                        <div class="custom-select-wrap custom-select-wrap--second-type">
                            <div class="custom-select-wrap__label text-secondary">Сортировать по</div>
                            <?= Html::dropDownList('sort', Yii::$app->request->get('sort'), [
                                'status_id' => 'статусу',
                                'date_start' => 'дате создания',
                                'date_finish' => 'дате завершения',
                                'name' => 'названию',
                            ], ['class' => 'basic-select basic-select--js']) ?>
                        </div>
                    </div>
                    <?= Html::endForm() ?>
                    <div class="sObject__row row">
                        <?
                        if (!empty($objects)) {
                            foreach ($objects as $object) {
                                echo $this->render('_loop_object', compact('object'));
                            }
                        };
                        ?>
                        <div class="sObject__col col-sm-6 col-lg-4 col-xxl-auto">
                            <div class="sObject-card sObject-card--addNew" style="--bgDefColor: ">
                                <div class="sObject-card__icon">
                                    <svg class="icon icon-plus ">
                                        <use xlink:href="/web/img/svg/sprite.svg#plus"></use>
                                    </svg>
                                </div>
                                <a class="sObject-card__add" href="#">Добавить объект</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <img class="page-bg" src="/web/img/svg/page-bg.svg" alt="" loading="lazy"/>
    </div>

<?php
$script = <<< JS
        $(document).ready(function() {
            var selectElement = $('#view-object select');
            selectElement.on('change', function() {
                $('#view-object').submit();
            });
        });
    JS;
$this->registerJs($script);
?>