<?php

namespace app\modules_nurse\nurse_screen\controllers;

use Yii;
use app\modules_nurse\nurse_screen\models\VitalSigns;
use app\modules_nurse\nurse_screen\models\VitalSignsSearch;

use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\components\PatientHelper;
use app\components\MessageHelper;
use yii\helpers\ArrayHelper;
use app\components\VisitController;
use app\components\NoVisitController;
 
class VitalSignsController extends VisitController
{
    // extends  VisitController  กรณีการบริการนั้นต้องมี hn และ vn
    // extends  NoVisitController  กรณีการบันทึกข้อมูลนั้นต้องมี hn แต่ไม่ต้องมี vn
    // extends   Controller ปกติ   กรณี controller oั้น ไม่เกี่ยวข้องกับคนไข้เลย
    // กลไกใน controller แต่ละประเภท ที่่เลือก extends  จะทำงานอัตโนมัติเอง

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
        $searchModel = new VitalSignsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }


    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }


    public function actionCreate()
    {

        $vn = PatientHelper::getCurrentVn();
        $model = new VitalSigns();
        $model->hn = PatientHelper::getCurrentHn();
        $model->vn = $vn;
    
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        
        }

            return $this->render('create', [
                'model' => $model,
            ]);

    }


    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }
        
        return $this->render('update', [
            'model' => $model,
        ]);
        
        //return $this->redirect(['view', 'id' => $model->id]);
    }

    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }


    protected function findModel($id)
    {
        if (($model = VitalSigns::findOne(['id'=>$id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
