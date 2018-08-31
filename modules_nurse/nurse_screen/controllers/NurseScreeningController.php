<?php

namespace app\modules_nurse\nurse_screen\controllers;

use Yii;
use app\modules_nurse\nurse_screen\models\NurseScreening;
use app\modules_nurse\nurse_screen\models\NurseScreeningSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * NurseScreeningController implements the CRUD actions for NurseScreening model.
 */
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


    public function actionView($id)
    {
        //$id="35cd1195-6165-42d8-9425-bf0084db192c";
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    public function actionCreate()
    {
        //$model = new NurseScreening();
        $id="35cd1195-6165-42d8-9425-bf0084db192c";
        //if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $id]);
        //}

        //return $this->render('create', [
        //    'model' => $model,
        //]);
    }

  
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $id="35cd1195-6165-42d8-9425-bf0084db192c";
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

 
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }


    protected function findModel($id)
    {
        $id="35cd1195-6165-42d8-9425-bf0084db192c";
        if (($model = NurseScreening::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
