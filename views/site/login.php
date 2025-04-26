<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var app\models\LoginForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

$this->title = 'Zaloguj się do Anime World';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Wprowadź swoje dane, aby dołączyć do naszej społeczności fanów anime!</p>

    <div class="row">
        <div class="col-lg-5">

            <?php $form = ActiveForm::begin([
                'id' => 'login-form',
                'fieldConfig' => [
                    'template' => "{label}\n{input}\n{error}",
                    'labelOptions' => ['class' => 'col-form-label'],
                    'inputOptions' => ['class' => 'form-control'],
                    'errorOptions' => ['class' => 'invalid-feedback'],
                ],
            ]); ?>

            <?= $form->field($model, 'username')->textInput(['autofocus' => true, 'placeholder' => 'Wpisz swoją nazwę użytkownika']) ?>

            <?= $form->field($model, 'password')->passwordInput(['placeholder' => 'Wpisz swoje hasło']) ?>

            <?= $form->field($model, 'rememberMe')->checkbox([
                'template' => "<div class=\"form-check\">{input} {label}</div>\n{error}",
            ]) ?>

            <div class="form-group mt-3">
                <?= Html::submitButton('Zaloguj się', ['class' => 'btn btn-danger w-100', 'name' => 'login-button']) ?>
            </div>

            <?php ActiveForm::end(); ?>

            <div class="mt-3" style="color:#666;">
                Testowe logowanie: <strong>admin/admin</strong> lub <strong>demo/demo</strong>.<br>
               
            </div>

        </div>
    </div>
</div>
