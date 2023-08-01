<?php

namespace app\models;
use yii\db\ActiveRecord;

class NotesLink extends ActiveRecord{
    public function getNote(){
        return $this->hasOne(Notes::class, ['id' => 'note_id']);
    }
}