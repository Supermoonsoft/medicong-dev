<?php

namespace app\modules_nurse\servicedummy\controllers;

use Yii;
use app\modules_nurse\servicedummy\models\SServiceDummy;
use app\modules_nurse\servicedummy\models\SServiceDummySearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\components\PatientHelper;
use app\components\MessageHelper;

/**
 * ServiceDummyController implements the CRUD actions for SServiceDummy model.
 */
class ServiceDummyController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all SServiceDummy models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SServiceDummySearch();
        //$searchModel->hn = PatientHelper::getCurrentHn();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single SServiceDummy model.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new SServiceDummy model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $vn = PatientHelper::getCurrentVn();
        if(empty($vn)){
            MessageHelper::setFlashWarning('กรุณาส่งตรวจคนไข้ ก่อนให้บริการ');
            return $this->redirect(['/patiententry/default/index']);
        }
        $model = new SServiceDummy();
        $model->hn = PatientHelper::getCurrentHn();
        $model->vn = $vn;
        $model->date_start_service = date('Y-m-d');
        $model->time_start_service = date('H:i:s');
        $dm = 1;
        $arr['comosss'] = ['dm'=>$dm,'t1'=>1];
        $model->data_json = $arr;

        if ($model->load(Yii::$app->request->post()) && $model->save(FALSE)) {
            return $this->redirect(['index']);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing SServiceDummy model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing SServiceDummy model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the SServiceDummy model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return SServiceDummy the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = SServiceDummy::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
