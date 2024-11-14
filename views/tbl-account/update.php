<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TblAccount $model */

$this->title = 'Update Tbl Account: ' . $model->account_id;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Accounts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->account_id, 'url' => ['view', 'account_id' => $model->account_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbl-account-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
