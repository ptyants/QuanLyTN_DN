<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\TblAccount $model */

$this->title = $model->account_id;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Accounts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tbl-account-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'account_id' => $model->account_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'account_id' => $model->account_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'account_id',
            'account_mail',
            'roles_id',
            'account_name',
            'account_password',
        ],
    ]) ?>

</div>
