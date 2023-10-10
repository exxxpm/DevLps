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
                            <ol class="breadcrumb swiper-wrapper" itemscope="itemscope" itemtype="http://schema.org/BreadcrumbList">
                                <li class="breadcrumb-item active swiper-slide" itemprop="itemListElement" itemscope="itemscope" itemtype="http://schema.org/ListItem"><div itemprop="item"><span style="font-style: italic" itemprop="name">Работы</span><meta itemprop="position" content="1"/></div></li>
                            </ol>
                        </nav>
                    </div>
                    <div class="page-head__col page-head__col--title col-lg order-md-4">
                        <h1>Работы</h1>
                    </div>
                    <div class="col-12 d-none d-md-block m-0 p-0 order-md-3"></div>
                </div>
            </div>
        </div>
        <!-- start sMainInfo-->
        <div class="sMainInfo section" id="sMainInfo">
            <div class="container-fluid">
                <div class="sMainInfo__selects-wrap">
                    <div class="row">
                        <?= Html::beginForm(['index'], 'get', ['enctype' => 'multipart/form-data', 'id' => 'view-surface', 'class' => 'sMainInfo__col col-md col-xl-3']) ?>
                        <div class="custom-select-wrap custom-select-wrap--third-type">
                            <?= Html::dropDownList('surface', Yii::$app->request->get('surface'), [
                                'all' => 'Все поверхности',
                                'floor' => 'Пол',
                                'wall' => 'Стена',
                                'ceiling' => 'Потолок',
                            ], ['class' => 'basic-select basic-select--js']) ?>
                        </div>
                        <?= Html::endForm() ?>
                        <div class="col-auto">
                            <a class="sMainInfo__reset" href="/web/works/index">Сбросить</a>
                        </div>
                    </div>
                </div>
                <div class="main-table main-table--works">
                    <table>
                            <thead>
                                <tr>
                                    <th>Наименование работы</th>
                                    <th>Поверхность</th>
                                </tr>
                            </thead>
                        <tbody>
                            <tr>
                                <td class="add-more" colspan="2">
                                    <a class="main-table__add-new" href="/web/works/add">
                                        <svg class="icon icon-add ">
                                            <use xlink:href="/web/img/svg/sprite.svg#add"></use>
                                        </svg>Добавить работу
                                    </a>
                                </td>
                            </tr>
                            <?
                                $surface_list = [
                                    'floor' => 'Пол',
                                    'wall' => 'Стена',
                                    'ceiling' => 'Потолок',
                                ];
                                foreach ($works as $work){
                                    ?>
                                        <tr>
                                            <td>
                                                <div class="main-table__title">
                                                    <a class="h3" href="/web/works/edit/<?= $work->id?>"><?= $work->name ?></a>
                                                </div>
                                            </td>
                                            <td><?= $surface_list[$work->surface] ?></td>
                                        </tr>
                                    <?
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- end sMainInfo-->
    </main><img class="page-bg" src="/web/img/svg/page-bg.svg" alt="" loading="lazy"/>
</div>