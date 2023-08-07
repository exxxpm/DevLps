<?php

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

?>


<div class="col-md-4 p-5 shadow-sm border rounded-3">
    <h2 class="text-center mb-4 text-primary">Вход в акаунт</h2>
    <? $form = ActiveForm::begin(); ?>
        <div class="mb-3">
            <?= $form->field($model, 'email')->textInput(['autofocus' => true, 'id' => 'exampleInputEmail1', 'class' => 'form-control border border-primary', 'aria-describedby' => "emailHelp"])->label('Email адрес', ['class' => 'form-label', 'for' => "exampleInputEmail1"]); ?>
        </div>
        <div class="mb-3">
            <?= $form->field($model, 'password')->passwordInput(['id' => 'exampleInputPassword1', 'class' => 'form-control border border-primary'])->label('Пароль', ['class' => 'form-label', 'for' => "exampleInputPassword1"]); ?>
        </div>
        <p class="small"><a class="text-primary" href="request">Забыли пароль?</a></p>
        <div class="d-grid">
            <?= Html::submitButton('Войти', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>
</div>

