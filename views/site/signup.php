<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\SignupForm */

use yii\helpers\Html;
use kartik\form\ActiveForm;

$this->title = 'SignUp';
?>
<div class="site-signup inner-wrapper">
    <div class="row">
        <div class="class = col-sm-4 col-sm-offset-4">
            <h2><?= Html::encode($this->title) ?></h2>
            <p>Please fill out the following fields to register:</p>
            <?php $form = ActiveForm::begin([
                'id' => 'form-signup',
                'fieldConfig' => [
                    'autoPlaceholder'=>true
                ],
            ]);
            ?>
            <div class="row">
                <div class="col-xs-12">
                    <?= $form->field($model, 'email',['enableAjaxValidation' => true])->input('email',['placeholder' => 'Enter valid Email']) ?>
                    <?= $form->field($model, 'password')->passwordInput() ?>
                    <?= $form->field($model, 'repeatpass')->passwordInput() ?>
                </div>
            </div>

            <div class="form-group">
                <?= Html::submitButton('Register', ['class' => 'btn btn-primary', 'name' => 'reg-button']) ?>
                <?= Html::a(Html::Button('Login', ['class' => 'btn btn-primary', 'name' => 'login-link']),['site/login']) ?>
            </div>

            <?php ActiveForm::end(); ?>

        </div>
    </div>
</div>
