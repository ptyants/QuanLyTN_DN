<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TblRoles $model */

$this->title = 'Create Tbl Roles';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Roles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-roles-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
