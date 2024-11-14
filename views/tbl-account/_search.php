<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\TblAccountSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tbl-account-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'account_id') ?>

    <?= $form->field($model, 'account_mail') ?>

    <?= $form->field($model, 'roles_id') ?>

    <?= $form->field($model, 'account_name') ?>

    <?= $form->field($model, 'account_password') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
