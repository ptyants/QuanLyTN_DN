<?php

use app\models\TblDescriptionAccount;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var app\models\TblDescriptionAccountSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Tbl Description Accounts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-description-account-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tbl Description Account', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'description_account_id',
            'account_id',
            'phone',
            'sex',
            'address',
            //'nation',
            //'id_card',
            //'religion',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, TblDescriptionAccount $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'description_account_id' => $model->description_account_id]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
