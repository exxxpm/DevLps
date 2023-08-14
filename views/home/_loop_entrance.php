<tr>
    <td>
        <div class="main-table__title">
            <a class="main-table__toggle-dropdown" data-model="entrance" data-id="<?= $entrance->id ?>" href="#">
                <svg class="icon icon-chevron-right ">
                    <use xlink:href="/web/img/svg/sprite.svg#chevron-right"></use>
                </svg>
            </a>
            <label class="custom-input form-check">
                <input class="custom-input__input form-check-input" data-model="entrance" data-id="<?= $entrance->id ?>" name="checkbox" type="checkbox" />
            </label>
            <a class="h3" href="/web/entrance/index/<?= $entrance->id ?>"><?= $entrance->name ?></a>
        </div>
    </td>
    <td>-</td>
    <td><?= $entrance->floors ?></td>
    <td><?= $entrance->flats ?></td>
    <td><?= $entrance->rooms ?></td>
    <td>1300 м²</td>
    <td><div class="main-table__goals"><img src="/web/img/svg/fist.svg" alt="" loading="lazy" /><span>321</span>/433</div></td>
    <td><div class="main-table__progress"><img src="/web/img/svg/finish.svg" alt="" loading="lazy" />67%</div></td>
    <td><?= Yii::$app->formatter->asDate($entrance->date_start); ?> – <?= Yii::$app->formatter->asDate($entrance->date_finish); ?></td>
</tr>