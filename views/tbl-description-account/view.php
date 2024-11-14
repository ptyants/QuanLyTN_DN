<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\TblDescriptionAccount $model */

$this->title = $model->description_account_id;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Description Accounts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tbl-description-account-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'description_account_id' => $model->description_account_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'description_account_id' => $model->description_account_id], [
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
            'description_account_id',
            'account_id',
            'phone',
            'sex',
            'address',
            'nation',
            'id_card',
            'religion',
        ],
    ]) ?>

</div>
