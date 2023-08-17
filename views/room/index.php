<div class="main-center-wrap">
    <main>
        <?= $this->render('_header', compact('room', 'flat', 'floor', 'entrance', 'home','object', 'id')); ?>
        <!-- start sMainInfo-->
        <div class="sMainInfo section" id="sMainInfo">
            <div class="container-fluid">
                <div class="sMainInfo__wrap">
                    <div class="toggle-block swiper freeMode-slider freeMode-slider--js">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a class="toggle-block__btn btn btn-outline-light <? if (Yii::$app->controller->action->id == 'index') {echo "active";} else {echo "";} ?>" href="/web/room/index/<?= $id ?>">
                                    <svg class="icon icon-list ">
                                        <use xlink:href="/web/img/svg/sprite.svg#list"></use>
                                    </svg>
                                    <span>Список</span>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a class="toggle-block__btn btn btn-outline-light <? if (Yii::$app->controller->action->id == 'task') {echo "active";} else {echo "";} ?>" href="/web/room/task/<?= $id ?>">
                                    <svg class="icon icon-tasks ">
                                        <use xlink:href="/web/img/svg/sprite.svg#tasks"></use>
                                    </svg>
                                    <span>Задачи</span>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a class="toggle-block__btn btn btn-outline-light <? if (Yii::$app->controller->action->id == 'work-schedule') {echo "active";} else {echo "";} ?>" href="/web/room/work-schedule/<?= $id ?>">
                                    <svg class="icon icon-gantt ">
                                        <use xlink:href="/web/img/svg/sprite.svg#gantt"></use>
                                    </svg>
                                    <span>График работ</span>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a class="toggle-block__btn btn btn-outline-light <? if (Yii::$app->controller->action->id == 'info') {echo "active";} else {echo "";} ?>" href="/web/room/info/<?= $id ?>">
                                    <svg class="icon icon-info ">
                                        <use xlink:href="/web/img/svg/sprite.svg#info"></use>
                                    </svg>
                                    <span>Информация</span>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a class="toggle-block__btn btn btn-outline-light <? if (Yii::$app->controller->action->id == 'notes') {echo "active";} else {echo "";} ?>" href="/web/room/notes/<?= $id ?>">
                                    <svg class="icon icon-pen ">
                                        <use xlink:href="/web/img/svg/sprite.svg#pen"></use>
                                    </svg>
                                    <span>Заметки</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sMainInfo__selects-wrap">
                    <div class="row">
                        <div class="sMainInfo__col col-md col-xl-3">
                            <div class="custom-select-wrap custom-select-wrap--third-type">
                                <select class="basic-select basic-select--js">
                                    <option>Все бригады</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                </select>
                            </div>
                        </div>
                        <div class="sMainInfo__col col-md col-xl-3">
                            <div class="custom-select-wrap custom-select-wrap--third-type">
                                <select class="basic-select basic-select--js">
                                    <option>Все поверхности</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                </select>
                            </div>
                        </div>
                        <div class="sMainInfo__col col-md col-xl-3">
                            <div class="custom-select-wrap custom-select-wrap--third-type">
                                <select class="basic-select basic-select--js">
                                    <option>Все работы</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                </select>
                            </div>
                        </div>
                        <div class="col col-md-12 order-md-last me-auto">
                            <div class="custom-select-wrap custom-select-wrap--second-type">
                                <div class="custom-select-wrap__label text-secondary">Сортировать по
                                </div>
                                <select class="basic-select basic-select--js">
                                    <option>Все статусы</option>
                                    <option>Планирование</option>
                                    <option>В работе</option>
                                    <option>Все статусы</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-auto ms-md-auto">
                            <a class="sMainInfo__reset" href="#">Сбросить
                            </a>
                        </div>
                    </div>
                </div>
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
                            <td class="add-more" colspan="5">
                                <a class="main-table__add-new" href="#">
                                    <svg class="icon icon-add ">
                                        <use xlink:href="/web/img/svg/sprite.svg#add"></use>
                                    </svg>Добавить дом
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="main-table__title">
                                    <label class="custom-input form-check">
                                        <input class="custom-input__input form-check-input" name="checkbox" type="checkbox" />
                                    </label>
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
                                    <label class="custom-input form-check">
                                        <input class="custom-input__input form-check-input" name="checkbox" type="checkbox" />
                                    </label>
                                    <div class="badge badge-success">Завершен</div><a href="#">2. Шпаклевка стен</a>
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
                                    <label class="custom-input form-check">
                                        <input class="custom-input__input form-check-input" name="checkbox" type="checkbox" />
                                    </label>
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
                                    <label class="custom-input form-check">
                                        <input class="custom-input__input form-check-input" name="checkbox" type="checkbox" />
                                    </label>
                                    <div class="badge badge-primary">В работе </div><a href="#">4. Штукатурка стен</a>
                                </div>
                            </td>
                            <td>Стены</td>
                            <td>Бригада №3</td>
                            <td>1300 м²</td>
                            <td class="text-danger">
                                <svg class="icon icon-warning ">
                                    <use xlink:href="/web/img/svg/sprite.svg#warning"></use>
                                </svg>30 ноя 23 – 30 фев 24
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="main-table__title">
                                    <label class="custom-input form-check">
                                        <input class="custom-input__input form-check-input" name="checkbox" type="checkbox" />
                                    </label>
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
    <div class="bottom-control-bar">
        <div class="row">
            <div class="col me-auto">
                <p>Выбрано: <span></span> элемент(–ов)</p>
            </div>
            <div class="col-auto">
                <a class="bottom-control-bar__btn btn btn-dark" href="#">
                    <svg class="icon icon-edit ">
                        <use xlink:href="/web/img/svg/sprite.svg#edit"></use>
                    </svg><span>Изменить</span>
                </a>
            </div>
            <div class="col-auto">
                <a class="bottom-control-bar__btn btn btn-dark" href="#">
                    <svg class="icon icon-copy ">
                        <use xlink:href="/web/img/svg/sprite.svg#copy"></use>
                    </svg><span>Дублировать</span>
                </a>
            </div>
            <div class="col-auto">
                <a class="bottom-control-bar__btn bottom-control-bar__btn--delete btn btn-dark" href="#">
                    <svg class="icon icon-delete ">
                        <use xlink:href="/web/img/svg/sprite.svg#delete"></use>
                    </svg><span>Удалить</span>
                </a>
            </div>
        </div>
    </div><img class="page-bg" src="/web/img/svg/page-bg.svg" alt="" loading="lazy" />
</div>