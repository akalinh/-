<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = '联系我';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <h1 ><?= Html::encode($this->title) ?></h1>


    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                <?= $form->field($model, 'name')->textInput(['autofocus' => true, 'style'=>"background-color: rgba(0, 0, 0, 0.5);"]) ?>

                <?= $form->field($model, 'email')->textInput(['style'=>"background-color: rgba(0, 0, 0, 0.5);"]) ?>

                <?= $form->field($model, 'subject') ->textInput(['style'=>"background-color: rgba(0, 0, 0, 0.5);"]) ?>

                <?= $form->field($model, 'body')->textArea(['rows' => 6, 'style'=>"background-color: rgba(0, 0, 0, 0.5);"]) ?>

                <div class="form-group">
                    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button', 'style'=>"background-color: rgba(0, 0, 0, 0.5);"]) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>

</div>
