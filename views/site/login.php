<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use kartik\form\ActiveForm;

$this->title = 'Login';
?>
<div class="site-login inner-wrapper">
    <div class="row">
        <div class="class = col-sm-4 col-sm-offset-4">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to login:</p>

    <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'fieldConfig' => [
            'autoPlaceholder'=>true
        ],
    ]); ?>
        <?= $form->field($model, 'email',['enableAjaxValidation' => true])->textInput(['autofocus' => true]) ?>
        <?= $form->field($model, 'password',['enableAjaxValidation' => true])->passwordInput() ?>
        <?php //echo $form->field($model, 'rememberMe')->label('RememberMe')->checkbox() ?>

        <div class="form-group">
                <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                <?= Html::a(Html::Button('SignUp', ['class' => 'btn btn-primary', 'name' => 'signup-link']),['site/signup']) ?>
        </div>

    <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>