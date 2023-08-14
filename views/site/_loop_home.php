<tr>
    <td>
        <div class="main-table__title">
            <a class="main-table__toggle-dropdown" data-model="home" data-id="<?= $home->id ?>" href="#">
                <svg class="icon icon-chevron-right ">
                    <use xlink:href="/web/img/svg/sprite.svg#chevron-right"></use>
                </svg>
            </a>
            <label class="custom-input form-check">
                <input class="custom-input__input form-check-input" data-model="home" data-id="<?= $home->id ?>" name="checkbox" type="checkbox" />
            </label>
            <a class="h3" href="/web/home/index/<?= $home->id ?>"><?= $home->name ?></a>
        </div>
    </td>
    <td><?= $home->entrances ?></td>
    <td>-</td>
    <td><?= $home->flats ?></td>
    <td><?= $home->rooms ?></td>
    <td>1300 м²</td>
    <td><div class="main-table__goals"><img src="/web/img/svg/fist.svg" alt="" loading="lazy" /><span>321</span>/433</div></td>
    <td><div class="main-table__progress"><img src="/web/img/svg/finish.svg" alt="" loading="lazy" />67%</div></td>
    <td><?= Yii::$app->formatter->asDate($home->date_start); ?> – <?= Yii::$app->formatter->asDate($home->date_finish); ?></td>
</tr>