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
use app\components\VisitController;
use app\components\NoVisitController;

class NurseScreeningController extends VisitController
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
        return $this->render('view', [
            'model' => $this->findModel($vn),
        ]);
    }


    public function actionCreate()
    {

        $vn = PatientHelper::getCurrentVn();
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
