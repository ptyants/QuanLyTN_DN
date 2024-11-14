<?php

namespace app\controllers;

use app\models\TblRoles;
use app\models\TblRolesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TblRolesController implements the CRUD actions for TblRoles model.
 */
class TblRolesController extends Controller
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
     * Lists all TblRoles models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new TblRolesSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TblRoles model.
     * @param int $role_id Role ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($role_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($role_id),
        ]);
    }

    /**
     * Creates a new TblRoles model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new TblRoles();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'role_id' => $model->role_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing TblRoles model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $role_id Role ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($role_id)
    {
        $model = $this->findModel($role_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'role_id' => $model->role_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing TblRoles model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $role_id Role ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($role_id)
    {
        $this->findModel($role_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the TblRoles model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $role_id Role ID
     * @return TblRoles the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($role_id)
    {
        if (($model = TblRoles::findOne(['role_id' => $role_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
