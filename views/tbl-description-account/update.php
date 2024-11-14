<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TblDescriptionAccount $model */

$this->title = 'Update Tbl Description Account: ' . $model->description_account_id;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Description Accounts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->description_account_id, 'url' => ['view', 'description_account_id' => $model->description_account_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbl-description-account-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
