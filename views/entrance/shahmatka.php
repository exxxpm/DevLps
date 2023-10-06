<?php use app\models\Flat;
use \yii\widgets\ActiveForm; ?>

<div class="main-center-wrap">
    <main>
        <?= $this->render('_header', compact('entrance','id')); ?>
        <!-- start sMainInfo-->
        <div class="sMainInfo section" id="sMainInfo">
            <div class="container-fluid">
                <div class="sMainInfo__wrap">
                    <div class="toggle-block swiper freeMode-slider freeMode-slider--js">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a class="toggle-block__btn btn btn-outline-light <? if (Yii::$app->controller->action->id == 'index') { echo " active "; } else { echo " "; } ?>" href="/web/entrance/index/<?= $id ?>">
                                    <svg class="icon icon-list ">
                                        <use xlink:href="/web/img/svg/sprite.svg#list"></use>
                                    </svg><span>Список</span>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a class="toggle-block__btn btn btn-outline-light <? if (Yii::$app->controller->action->id == 'shahmatka') { echo " active "; } else { echo " "; } ?>" href="/web/entrance/shahmatka/<?= $id ?>">
                                    <svg class="icon icon-tile ">
                                        <use xlink:href="/web/img/svg/sprite.svg#tile"></use>
                                    </svg><span>Шахматка</span>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a class="toggle-block__btn btn btn-outline-light <? if (Yii::$app->controller->action->id == 'task') { echo " active "; } else { echo " "; } ?>" href="/web/entrance/task/<?= $id ?>">
                                    <svg class="icon icon-tasks ">
                                        <use xlink:href="/web/img/svg/sprite.svg#tasks"></use>
                                    </svg><span>Задачи</span>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a class="toggle-block__btn btn btn-outline-light <? if (Yii::$app->controller->action->id == 'work-schedule') { echo " active "; } else { echo " "; } ?>" href="/web/entrance/work-schedule/<?= $id ?>">
                                    <svg class="icon icon-gantt ">
                                        <use xlink:href="/web/img/svg/sprite.svg#gantt"></use>
                                    </svg><span>График работ</span>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a class="toggle-block__btn btn btn-outline-light<? if (Yii::$app->controller->action->id == 'info') { echo " active "; } else { echo " "; } ?>" href="/web/entrance/info/<?= $id ?>">
                                    <svg class="icon icon-info ">
                                        <use xlink:href="/web/img/svg/sprite.svg#info"></use>
                                    </svg><span>Информация</span>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a class="toggle-block__btn btn btn-outline-light<? if (Yii::$app->controller->action->id == 'notes') { echo " active "; } else { echo " "; } ?>" href="/web/entrance/notes/<?= $id ?>">
                                    <svg class="icon icon-pen ">
                                        <use xlink:href="/web/img/svg/sprite.svg#pen"></use>
                                    </svg><span>Заметки</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sMainInfo__selects-wrap">
                    <div class="row">
                        <div class="sMainInfo__col col-sm-6 col-lg">
                            <div class="custom-select-wrap custom-select-wrap--third-type">
                                <select class="basic-select basic-select--js">
                                    <option>Все объекты</option>
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
                        <div class="sMainInfo__col col-sm-6 col-lg">
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
                        <div class="sMainInfo__col col-sm-6 col-lg">
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
                        <div class="sMainInfo__col col-sm-6 col-lg">
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
                        <div class="col-auto ms-lg-auto">
                            <a class="sMainInfo__reset" href="#">Сбросить
                            </a>
                        </div>
                    </div>
                </div>
                <div class="sMainInfo__chess-table-wrap">
                    <div class="sMainInfo__table-wrap-inner">
                        <? foreach ($floors as $floor){
                            $flats = Flat::find()->where(['home_id' => $floor->home_id, 'object_id' => $floor->object_id, 'entrance_id' => $id, 'floor_id' => $floor->id])->all();
                            ?>
                            <ul>
                                <li>
                                    <a class="sMainInfo__cell" href="/web/floor/index/<?= $floor->id ?>">
                                        <? if (strpos($floor->name, '№') !== false) {
                                            list($floor_name, $floor_number) = array_map('trim', explode('№', $floor->name, 2));
                                            echo "<p>".$floor_name." <span>№".$floor_number."</span></p>";
                                        } else {
                                            echo "<p>".$floor->name."</p>";
                                        } ?>
                                        <div class="sMainInfo__precent">15%</div>
                                    </a>
                                </li>
                                <? foreach ($flats as $flat){ ?>
                                    <li>
                                        <a class="sMainInfo__cell" href="/web/flat/detail-info/<?= $flat->id ?>">
                                            <? if (strpos($flat->name, '№') !== false) {
                                                list($flat_name, $flat_number) = array_map('trim', explode('№', $flat->name, 2));
                                                echo "<p>".$flat_name." <span>№".$flat_number."</span></p>";
                                            } else {
                                                echo "<p>".$flat->name."</p>";
                                            } ?>
                                            <div class="sMainInfo__precent">67%</div>
                                        </a>
                                    </li>
                                <? } ?>
                            </ul>
                        <? } ?>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <img class="page-bg" src="/web/img/svg/page-bg.svg" alt="" loading="lazy"/>
</div>
