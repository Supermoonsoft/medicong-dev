<?php

namespace app\modules_nurse\nurse_screen\controllers;

use Yii;
use app\modules_nurse\nurse_screen\models\NurseScreening;
use app\modules_nurse\nurse_screen\models\NurseScreeningSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\components\PatientHelper;
use app\components\MessageHelper;

class NurseScreeningController extends Controller
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
     * Lists all NurseScreening models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new NurseScreeningSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }


    public function actionView($vn)
    {
        //$vn="35cd1195-6165-42d8-9425-bf0084db192c";
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
        $model = new NurseScreening();
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

        if (($model = NurseScreening::findOne(['vn'=>$vn])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    
}
