<tr>
    <td>
        <div class="main-table__title">
            <a class="main-table__toggle-dropdown" data-model="flat" data-id="<?= $flat->id ?>" href="#">
                <svg class="icon icon-chevron-right ">
                    <use xlink:href="/web/img/svg/sprite.svg#chevron-right"></use>
                </svg>
            </a>
            <label class="custom-input form-check">
                <input class="custom-input__input form-check-input" data-model="flat" data-id="<?= $flat->id ?>" name="checkbox" type="checkbox" />
            </label>
            <a class="h3" href="/web/flat/index/<?= $flat->id ?>"><?= $flat->name?></a>
        </div>
    </td>
    <td>-</td>
    <td>-</td>
    <td>-</td>
    <td><?= $flat->rooms ?></td>
    <td>1300 м²</td>
    <td><div class="main-table__goals"><img src="/web/img/svg/fist.svg" alt="" loading="lazy" /><span>321</span>/433</div></td>
    <td><div class="main-table__progress"><img src="/web/img/svg/finish.svg" alt="" loading="lazy" />67%</div></td>
    <td><?= Yii::$app->formatter->asDate($flat->date_start); ?> – <?= Yii::$app->formatter->asDate($flat->date_start); ?></td>
</tr>