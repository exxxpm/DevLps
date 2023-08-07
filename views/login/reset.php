<?php

use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;

?>

<div class="col-12 col-md-8 col-lg-4 border-top border-3 border-primary">
    <div class="card shadow-sm">
        <div class="card-body">
            <div class="mb-4">
                <p>Пожалуйста введите ваш новый пароль:</p>
            </div>
            <?php $form = ActiveForm::begin(['id' => 'reset-password-form']); ?>
            <div class="mb-3">
                <?= $form->field($model, 'password')->passwordInput(['autofocus' => true, 'id' => "pass", 'class' => "form-control"])->label('Пароль', ['for' => "pass", 'class' => "form-label"]) ?>
            </div>
            <div class="mb-3 d-grid">
                <?= Html::submitButton('Сохранить', ['class' => 'btn btn-primary']) ?>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
</div>