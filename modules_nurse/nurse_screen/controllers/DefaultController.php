<?php

namespace app\modules_nurse\nurse_screen\controllers;

use Yii;
use app\modules_nurse\nurse_screen\models\OpdVisit;
use app\modules_nurse\nurse_screen\models\OpdVisitSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\components\NurseHelper;
use app\components\PatientHelper;

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

        $hn = \Yii::$app->request->post('hn');
        $vn = '';
        $searchModel = new OpdVisitSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        if (!empty($hn)) {
            $vn = NurseHelper::openVisit($hn);
            PatientHelper::setCurrentVn($vn);
        }

            return $this->render('index', [
                'vn' => $vn,
                'searchModel' => $searchModel,
                'dataProvider' => $dataProvider,
            ]);


    }
}
