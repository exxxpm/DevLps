<?
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
?>

<main>
    <!-- start sCreateObject-->
    <?php $form = ActiveForm::begin([
        'options' => ['class' => 'sCreateObject sCreateObject--creat-work', 'id' => 'sCreateObject'],
        'fieldConfig' => [
            'template' => "{label}\n{input}\n{hint}\n{error}",
        ],
    ]); ?>
        <div class="sCreateObject__body">
            <div class="sCreateObject__left-side">
                <h2>Редактирование работы </h2>
                <div class="form-wrap">
                    <div class="form-wrap__work-row row">
                        <div class="col-12">
                            <div class="form-wrap__input-wrap form-group">
                                <?= $form->field($edit_work, 'name', ['template' => "{label}\n{input}\n<span class=\"form-wrap__input-title\">Наименование работы</span>\n{hint}\n{error}"])->textInput(['class' => 'form-wrap__input form-control', 'placeholder' => 'Наименование работы'])->label(false); ?>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="custom-select-wrap custom-select-wrap--fourth-type">
                                <?= $form->field($edit_work, 'surface', ['template' => '{input}', 'options' => ['tag' => false]])->dropDownList(['floor' => 'Пол', 'wall' => 'Стена', 'ceiling' => 'Потолок',], ['class' => 'basic-select basic-select--js',],)->label('false'); ?>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="custom-select-wrap custom-select-wrap--fourth-type">
                                <?= $form->field($edit_work, 'formula', ['template' => '{input}', 'options' => ['tag' => false]])->dropDownList(['sum' => 'A+B', 'difference' => 'A-B', 'composition' => 'A*B',], ['class' => 'basic-select basic-select--js',],)->label('false'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sCreateObject__footer">
            <div class="sCreateObject__footer-row">
                <?= Html::submitButton('Сохранить изменения', ['class' => 'sCreateObject__btn btn btn-accent'])?>
                <a class="sCreateObject__btn btn btn-light" href="/web/works/index">Отмена</a>
            </div>
        </div>
        <? ActiveForm::end(); ?>
        <a href="/web/works/index" class="close-btn">
            <svg class="icon icon-close ">
                <use xlink:href="/web/img/svg/sprite.svg#close"></use>
            </svg>
        </a>
</main>