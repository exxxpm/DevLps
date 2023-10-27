<?php

use app\models\User;
use app\models\File;

$user = User::findOne($note->note->author_id);
?>

<div class="note-block__item">
    <div class="row align-items-center mb-3" style="--bs-gutter-x:12px">
        <div class="col-auto">
            <div class="avatar-block avatar-block--sm" style="background: #467CF4; color: #fff">
                <?
                    $file_id = $user->user_img;
                    $file = File::findOne($file_id);

                    if(isset($file) && !empty($file)){
                        $img_path = '/web/'.$file->path;
                        ?><img src="<?= $img_path ?>" alt="" loading="lazy"/><?
                    }else {
                        ?>
                        <span><? $user->username[0] ?></span>
                        <img src="/web/img/avatar.jpg" alt="" loading="lazy"/>
                        <?
                    }
                ?>
            </div>
        </div>
        <div class="col"><strong class="me-2"><?= $user->username ?></strong><span class="text-secondary"><?= Yii::$app->formatter->asDate($note->note->date); ?></span></div>
    </div>
    <div class="note-block__content">
        <p><?= $note->note->message ?></p>
        <?
            if (!empty($note->note->files)) {
                foreach ($note->note->files as $file){
                    ?>
                        <div class="file-item">
                            <svg class="icon icon-file-list "><use xlink:href="/web/img/svg/sprite.svg#file-list"></use></svg>
                            <a class="file-item__name" href="/web/<?= $file->file->path ?>"><?= $file->file->name?></a>
                            <div class="file-item__size"><?= ceil(filesize($file->file->path) / 1024 / 1024) . ' мб'?></div>
                        </div>
                    <?
                }
            };
        ?>
    </div>
</div>