<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TblRoles $model */

$this->title = 'Update Tbl Roles: ' . $model->role_id;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Roles', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->role_id, 'url' => ['view', 'role_id' => $model->role_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbl-roles-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
