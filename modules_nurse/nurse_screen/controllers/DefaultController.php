<?php

namespace app\modules_nurse\nurse_screen\controllers;

use Yii;
use app\modules_nurse\nurse_screen\models\OpdVisit;
use app\modules_nurse\nurse_screen\models\OpdVisitSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
//use app\components\PatientHelper;
//use app\components\MessageHelper;

class DefaultController extends Controller
{

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
        $searchModel = new OpdVisitSearch();
        //$searchModel->hn = PatientHelper::getCurrentHn();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
}
