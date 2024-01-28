<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = '登录';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>请输入正确的用户名和密码</p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true, 'style'=>"background-color: rgba(0, 0, 0, 0.5);"]) ?>

                <?= $form->field($model, 'password')->passwordInput(['style'=>"background-color: rgba(0, 0, 0, 0.5);"]) ?>

                <?= $form->field($model, 'rememberMe')->checkbox() ?>

                <div style="color:#999;margin:1em 0">
                    如果你忘记了用户名或密码 <?= Html::a('请点击这里', ['site/request-password-reset']) ?>.
                </div>

                <div class="form-group">
                    <?= Html::submitButton('登录', ['class' => 'btn btn-primary', 'name' => 'login-button', 'style'=>"background-color: rgba(0, 0, 0, 0.5);"]) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
