<a class="go-back" href="/web/entrance/shahmatka/<?= $flat->entrance_id ?>">
    <svg class="icon icon-chevron-left ">
        <use xlink:href="/web/img/svg/sprite.svg#chevron-left"></use>
    </svg><span>Назад</span>
</a>

<main>
    <div class="page-head">
        <div class="container-fluid">
            <div class="page-head__row row align-items-center">
                <div class="page-head__col col-lg order-md-4">
                    <h1><?= $flat->name ?>
                        <div class="badge badge-primary">33%</div>
                    </h1>
                </div>
                <div class="col-12 d-none d-md-block m-0 p-0 order-md-3"></div>
                <div class="page-head__col col-md-auto order-md-last">
                    <div class="startDate">
                        <svg class="icon icon-calendar ">
                            <use xlink:href="/web/img/svg/sprite.svg#calendar"></use>
                        </svg><?= Yii::$app->formatter->asDate($flat->date_start); ?> – <?= Yii::$app->formatter->asDate($flat->date_finish); ?>
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
                                <div class="details-with-toggle__item"><span>Помещения</span>
                                    <p><?= $flat->rooms ?> пом</p>
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
    <!-- start sMainInfo-->
    <div class="sMainInfo section" id="sMainInfo">
        <div class="container-fluid">
            <h4>Помещения</h4>
            <div class="main-table">
                <table>
                    <thead>
                    <tr>
                        <th>Объект</th>
                        <th>Под</th>
                        <th>Эт</th>
                        <th>Кв</th>
                        <th>Пом</th>
                        <th>Площ</th>
                        <th>Задачи</th>
                        <th>Прогресс</th>
                        <th>Сроки</th>
                    </tr>
                    </thead>
                    <tbody>
                    <? foreach ($rooms as $room) { ?>
                        <tr>
                            <td>
                                <div class="main-table__title"><a class="h3" href="/web/room/index/<?= $room->id ?>"><?= $room->name ?></a></div>
                            </td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>1300 м²</td>
                            <td><div class="main-table__goals"><img src="/web/img/svg/fist.svg" alt="" loading="lazy" /><span>321</span>/433</div></td>
                            <td><div class="main-table__progress"><img src="/web/img/svg/finish.svg" alt="" loading="lazy" />67%</div></td>
                            <td><?= Yii::$app->formatter->asDate($room->date_start); ?> – <?= Yii::$app->formatter->asDate($room->date_finish); ?></td>
                        </tr>
                    <? } ?>
                    </tbody>
                </table>
            </div>
            <h4>Задачи</h4>
            <div class="main-table main-table--2">
                <table>
                    <thead>
                    <tr>
                        <th>Задача</th>
                        <th>Поверхность</th>
                        <th>Бригада</th>
                        <th>Площадь</th>
                        <th>Сроки</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            <div class="main-table__title">
                                <div class="badge badge-primary">В работе </div><a href="#">1. Натяжка потолка</a>
                            </div>
                        </td>
                        <td>Потолок</td>
                        <td>Бригада №3</td>
                        <td>1300 м²</td>
                        <td>30 ноя 23 – 30 фев 24</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="main-table__title">
                                <div class="badge badge-primary">В работе </div><a href="#">2. Шпаклевка стен</a>
                            </div>
                        </td>
                        <td>Пол</td>
                        <td>Бригада №3</td>
                        <td>1300 м²</td>
                        <td>30 ноя 23 – 30 фев 24</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="main-table__title">
                                <div class="badge badge-primary">В работе </div><a href="#">3. Заливка полов</a>
                            </div>
                        </td>
                        <td>Стены</td>
                        <td>Бригада №3</td>
                        <td>1300 м²</td>
                        <td>30 ноя 23 – 30 фев 24</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="main-table__title">
                                <div class="badge badge-primary">В работе </div><a href="#">4. Штукатурка стен</a>
                            </div>
                        </td>
                        <td>Стены</td>
                        <td>Бригада №3</td>
                        <td>1300 м²</td>
                        <td>30 ноя 23 – 30 фев 24</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="main-table__title">
                                <div class="badge badge-primary">В работе </div><a href="#">5. Заливка</a>
                            </div>
                        </td>
                        <td>Потолок</td>
                        <td>Бригада №3</td>
                        <td>1300 м²</td>
                        <td>30 ноя 23 – 30 фев 24</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- end sMainInfo-->
</main>