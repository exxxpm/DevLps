<?php
/** @var TYPE_NAME $file */
?>

<div class="file-item">
    <a class="file-item__name" href="/web/<?= $file->file->path ?>"><?= $file->file->name?></a>
    <div class="file-item__size"><?= ceil(filesize($file->file->path) / 1024 / 1024) . ' мб'?></div>
    <div class="file-item__btn-delete" data-id="<?= $file->file->id ?>">
        <svg class="icon icon-delete ">
            <use xlink:href="/web/img/svg/sprite.svg#delete"></use>
        </svg>
    </div>
</div>