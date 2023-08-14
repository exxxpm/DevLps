<?php
use app\models\Floor;
$floors = Floor::find()->where(['entrance_id' => $id])->all();
?>

<tr class="inner-level">
    <td colspan="9">
        <div style="display: block">
            <table>
                <tr>
                    <td class="add-more" colspan="9">
                        <a class="main-table__add-new" href="/web/floor/add/<?= $id ?>">
                            <svg class="icon icon-add ">
                                <use xlink:href="/web/img/svg/sprite.svg#add"></use>
                            </svg>
                            Добавить этаж
                        </a>
                    </td>
                </tr>
                <? foreach ($floors as $floor){ ?>
                    <tr>
                        <td>
                            <div class="main-table__title">
                                <a class="main-table__toggle-dropdown" data-model="floor" data-id="<?= $floor->id ?>" href="#">
                                    <svg class="icon icon-chevron-right ">
                                        <use xlink:href="/web/img/svg/sprite.svg#chevron-right"></use>
                                    </svg>
                                </a>
                                <label class="custom-input form-check">
                                    <input class="custom-input__input form-check-input" data-model="floor" data-id="<?= $floor->id ?>" name="checkbox" type="checkbox" />
                                </label>
                                <a href="/web/floor/index/<?= $floor->id ?>"><?= $floor->name ?></a>
                            </div>
                        </td>
                        <td>-</td>
                        <td>-</td>
                        <td><?= $floor->flats ?></td>
                        <td><?= $floor->rooms ?></td>
                        <td>696 м²</td>
                        <td><div class="main-table__goals"><img src="/web/img/svg/fist.svg" alt="" loading="lazy" /><span>321</span>/433</div></td>
                        <td><div class="main-table__progress"><img src="/web/img/svg/finish.svg" alt="" loading="lazy" />59%</div></td>
                        <td><?= Yii::$app->formatter->asDate($floor->date_start); ?> – <?= Yii::$app->formatter->asDate($floor->date_finish); ?></td>
                    </tr>
                <? } ?>
            </table>
        </div>
    </td>
</tr>
