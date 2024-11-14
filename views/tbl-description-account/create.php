<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TblDescriptionAccount $model */

$this->title = 'Create Tbl Description Account';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Description Accounts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-description-account-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
