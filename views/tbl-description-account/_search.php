<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\TblDescriptionAccountSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tbl-description-account-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'description_account_id') ?>

    <?= $form->field($model, 'account_id') ?>

    <?= $form->field($model, 'phone') ?>

    <?= $form->field($model, 'sex') ?>

    <?= $form->field($model, 'address') ?>

    <?php // echo $form->field($model, 'nation') ?>

    <?php // echo $form->field($model, 'id_card') ?>

    <?php // echo $form->field($model, 'religion') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
