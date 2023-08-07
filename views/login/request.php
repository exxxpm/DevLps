<?php

use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;

?>

<div class="col-12 col-md-8 col-lg-4 border-top border-3 border-primary">
    <div class="card shadow-sm">
        <div class="card-body">
            <div class="mb-4">
                <h5>Не помните пароль?</h5>
                <p class="mb-2">Введите свой зарегистрированный адрес электронной почты, чтобы сбросить пароль</p>
            </div>
            <?php $form = ActiveForm::begin(['id' => 'request-password-reset-form']); ?>
                <div class="mb-3">
                    <?= $form->field($model, 'email')->textInput(['autofocus' => true, 'id' => "email", 'class' => "form-control"])->label('Email адрес', ['for' => "email", 'class' => "form-label"]) ?>
                </div>
                <div class="mb-3 d-grid">
                    <?= Html::submitButton('Сбросить пароль', ['class' => 'btn btn-primary']) ?>
                </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
</div>