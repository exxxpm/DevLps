<?php
use app\models\Room;
$rooms = Room::find()->where(['flat_id' => $id])->all();
?>

<tr class="inner-level">
    <td colspan="9">
        <div style="display: block">
            <table>
                <tr>
                    <td class="add-more" colspan="9">
                        <a class="main-table__add-new" href="/web/room/add/<?= $id ?>">
                            <svg class="icon icon-add ">
                                <use xlink:href="/web/img/svg/sprite.svg#add"></use>
                            </svg>
                            Добавить помещение
                        </a>
                    </td>
                </tr>
                <? foreach ($rooms as $room){ ?>
                    <tr>
                        <td>
                            <div class="main-table__title">
                                <label class="custom-input form-check">
                                    <input class="custom-input__input form-check-input" data-model="room" data-id="<?= $room->id ?>" name="checkbox" type="checkbox" />
                                </label>
                                <a href="/web/room/index/<?= $room->id ?>"><?= $room->name ?></a>
                            </div>
                        </td>
                       <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>696 м²</td>
                        <td><div class="main-table__goals"><img src="/web/img/svg/fist.svg" alt="" loading="lazy" /><span>321</span>/433</div></td>
                        <td><div class="main-table__progress"><img src="/web/img/svg/finish.svg" alt="" loading="lazy" />59%</div></td>
                        <td><?= Yii::$app->formatter->asDate($room->date_start); ?> – <?= Yii::$app->formatter->asDate($room->date_finish); ?></td>
                    </tr>
                <? } ?>
            </table>
        </div>
    </td>
</tr>