<?php

namespace app\controllers;

use app\models\TblAccount;
use app\models\TblAccountSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TblAccountController implements the CRUD actions for TblAccount model.
 */
class TblAccountController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all TblAccount models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new TblAccountSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TblAccount model.
     * @param int $account_id Account ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($account_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($account_id),
        ]);
    }

    /**
     * Creates a new TblAccount model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new TblAccount();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'account_id' => $model->account_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing TblAccount model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $account_id Account ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($account_id)
    {
        $model = $this->findModel($account_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'account_id' => $model->account_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing TblAccount model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $account_id Account ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($account_id)
    {
        $this->findModel($account_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the TblAccount model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $account_id Account ID
     * @return TblAccount the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($account_id)
    {
        if (($model = TblAccount::findOne(['account_id' => $account_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
