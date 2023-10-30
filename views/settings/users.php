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
                        <div class="col">
                            <nav class="swiper freeMode-slider--js" aria-label="breadcrumb">
                                <ol class="breadcrumb swiper-wrapper" itemscope="itemscope" itemtype="http://schema.org/BreadcrumbList">
                                    <li class="breadcrumb-item active swiper-slide" itemprop="itemListElement" itemscope="itemscope" itemtype="http://schema.org/ListItem"><div itemprop="item"><span style="font-style: italic" itemprop="name">Пользователи</span><meta itemprop="position" content="1"/></div></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="page-head__col page-head__col--title col-lg order-md-4">
                        <h1>Пользователи</h1>
                        <div class="task-stat">
                            <svg class="icon icon-members ">
                                <use xlink:href="/web/img/svg/sprite.svg#members"></use>
                            </svg>
                            <?= $count ?>
                        </div>
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
                        <?= Html::beginForm(['users'], 'get', ['enctype' => 'multipart/form-data', 'id' => 'view-user', 'class' => 'sMainInfo__col col-md col-xl-3']) ?>
                            <div class="custom-select-wrap custom-select-wrap--third-type">
                                <?= Html::dropDownList('user', Yii::$app->request->get('user'), [
                                    'all' => 'Все пользователи',
                                    'admin' => 'Администраторы',
                                    'manager' => 'Менеджеры',
                                ], ['class' => 'basic-select basic-select--js']) ?>
                            </div>
                        <?= Html::endForm() ?>
                        <div class="col-auto">
                            <a class="sMainInfo__reset" href="/web/settings/users">Сбросить</a>
                        </div>
                    </div>
                </div>
                <div class="main-table main-table--users">
                    <table>
                        <thead>
                            <tr>
                                <th>Пользователь</th>
                                <th>Роль</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="add-more" colspan="3">
                                    <a class="main-table__add-new" href="/web/settings/add-user">
                                        <svg class="icon icon-add ">
                                            <use xlink:href="/web/img/svg/sprite.svg#add"></use>
                                        </svg>Добавить пользователя
                                    </a>
                                </td>
                            </tr>
                            <?
                                foreach ($users as $user) {
                                    ?>
                                        <tr>
                                            <td>
                                                <div class="main-table__title">
                                                    <a class="h3" href="/web/settings/edit-user/<?= $user->id ?>"><?= $user->getUsername() ?></a>
                                                </div>
                                            </td>
                                            <td><?= $user->getRusUserRole() ?></td>
                                            <td><a class="main-table__email" href="mailto:<?= $user->email ?>"><?= $user->email ?></a></td>
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