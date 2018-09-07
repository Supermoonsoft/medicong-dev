<?php

namespace app\modules_nurse\nurse_screen\controllers;

use Yii;
use app\modules_nurse\nurse_screen\models\DmAssessment;
use app\modules_nurse\nurse_screen\models\DmAssessmentSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\components\PatientHelper;
use app\components\MessageHelper;

/**
 * DmAssessmentController implements the CRUD actions for DmAssessment model.
 */
class DmAssessmentController extends Controller
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
     * Lists all DmAssessment models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new DmAssessmentSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }


    public function actionView($vn)
    {
        return $this->render('view', [
            'model' => $this->findModel($vn),
        ]);
    }


    public function actionCreate()
    {

        $vn = PatientHelper::getCurrentVn();
        if(empty($vn)){
            MessageHelper::setFlashWarning('กรุณาส่งตรวจคนไข้ ก่อนให้บริการ');
            return $this->redirect(['/patiententry/default/index']);
        }
        $model = new DmAssessment();
        $model->hn = PatientHelper::getCurrentHn();
        $model->vn = $vn;
    
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'vn' => $model->vn]);
        
        }

            return $this->render('create', [
                'model' => $model,
            ]);

    }

    public function actionUpdate($vn)
    {
        $model = $this->findModel($vn);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'vn' => $model->vn]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    public function actionDelete($vn)
    {
        $this->findModel($vn)->delete();

        return $this->redirect(['index']);
    }


    protected function findModel($vn)
    {
        if (($model = DmAssessment::findOne(['vn'=>$vn])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
