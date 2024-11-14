<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\TblAccount $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tbl-account-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'account_mail')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'roles_id')->textInput() ?>

    <?= $form->field($model, 'account_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'account_password')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
