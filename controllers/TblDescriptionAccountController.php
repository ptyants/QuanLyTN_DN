<?php

namespace app\controllers;

use app\models\TblDescriptionAccount;
use app\models\TblDescriptionAccountSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TblDescriptionAccountController implements the CRUD actions for TblDescriptionAccount model.
 */
class TblDescriptionAccountController extends Controller
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
     * Lists all TblDescriptionAccount models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new TblDescriptionAccountSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TblDescriptionAccount model.
     * @param int $description_account_id Description Account ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($description_account_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($description_account_id),
        ]);
    }

    /**
     * Creates a new TblDescriptionAccount model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new TblDescriptionAccount();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'description_account_id' => $model->description_account_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing TblDescriptionAccount model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $description_account_id Description Account ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($description_account_id)
    {
        $model = $this->findModel($description_account_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'description_account_id' => $model->description_account_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing TblDescriptionAccount model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $description_account_id Description Account ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($description_account_id)
    {
        $this->findModel($description_account_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the TblDescriptionAccount model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $description_account_id Description Account ID
     * @return TblDescriptionAccount the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($description_account_id)
    {
        if (($model = TblDescriptionAccount::findOne(['description_account_id' => $description_account_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
