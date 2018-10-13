<?php

namespace app\modules_stock\icath\controllers;

use Yii;
use app\modules_stock\icath\models\MStockIcathMasprice;
use app\modules_stock\icath\models\MStockIcathMaspriceSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;


class MStockIcathMaspriceController extends Controller
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
        $searchModel = new MStockIcathMaspriceSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        //$dataProvider->query->where(['charge_code'=>'O.R.']);
        //$model = new MStockIcathMasprice();

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'pagination' => false
        ]);
    }
    public function actionIndexicath()
    {
        $searchModel = new MStockIcathMaspriceSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->query->where(['in','charge_code',['14','74','75']]);
        //$model = new MStockIcathMasprice();

        return $this->render('indexicath', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'pagination' => false
        ]);
    }
    public function actionIndexidrug()
    {
        $searchModel = new MStockIcathMaspriceSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->query->where(['charge_code'=>'1']);
        //$model = new MStockIcathMasprice();

        return $this->render('indexidrug', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'pagination' => false
        ]);
    }
    public function actionIndexinondrug()
    {
        $searchModel = new MStockIcathMaspriceSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->query->where(['charge_code'=>'2']);
        //$model = new MStockIcathMasprice();

        return $this->render('indexinondrug', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'pagination' => false
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
        $model = new MStockIcathMasprice();

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
    }

    
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    
    protected function findModel($id)
    {
        if (($model = MStockIcathMasprice::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
