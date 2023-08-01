<?php
/** @var TYPE_NAME $note */
?>

<div class="note-block__item">
    <div class="row align-items-center mb-3" style="--bs-gutter-x:12px">
        <div class="col-auto">
            <div class="avatar-block avatar-block--sm" style="background: #467CF4; color: #fff"><span>АИ</span><img src="/web/img/avatar.jpg" alt="" loading="lazy"/></div>
        </div>
        <div class="col"><strong class="me-2"><?= $note->note->author_id ?></strong><span class="text-secondary"><?= Yii::$app->formatter->asDate($note->note->date); ?></span></div>
    </div>
    <div class="note-block__content">
        <p><?= $note->note->message ?></p>
        <?
            foreach ($note->files as $file){
                ?><pre><?print_r($file->file->name)?></pre><?
            };
        ?>
    </div>
</div>