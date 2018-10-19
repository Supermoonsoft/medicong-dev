<?php

namespace app\modules_stock\icath\controllers;

use Yii;
use app\modules_stock\icath\models\SStockIcathLendRecieve;
use app\modules_stock\icath\models\SStockIcathLendRecieveSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\modules_stock\icath\models\SStockIcathLendRecieveData;

use app\modules_stock\icath\models\MStockIcathMasprice;
use \yii\web\Response;
use yii\helpers\Html;
use yii\base\Model;
use yii\helpers\Url;

/**
 * SStockIcathLendRecieveController implements the CRUD actions for SStockIcathLendRecieve model.
 */
class SStockIcathLendRecieveController extends Controller
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

    
    public function actionIndexlend()
    {
        $searchModel = new SStockIcathLendRecieveSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('indexlend', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionIndex()
    {
        $searchModel = new SStockIcathLendRecieveSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    
    public function actionIndexidrug()
    {
        $searchModel = new SStockIcathLendRecieveSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('indexidrug', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    public function actionIndexinondrug()
    {
        $searchModel = new SStockIcathLendRecieveSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('indexinondrug', [
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
     public function actionMainlendview($id)
    {
        return $this->render('mainlend_view', [
            'model' => $this->findModel($id),
        ]);
    }

 public function actionMainlend()
    {
        $model = new SStockIcathLendRecieve();
        
        $model->date_start_service = date('Y-m-d');
        $model->time_start_service = date('H:i:s');
        

        if ($model->load(Yii::$app->request->post()) && $model->save(false)) {
            return $this->redirect(['mainlendview', 'id' => $model->id]);
        }

        return $this->render('mainlend', [
            'model' => $model,
        ]);
    }
    public function actionCreate()
    {
        $model = new SStockIcathLendRecieve();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }
    
    public function actionAddText() {
        $model = new SStockIcathLendRecieveData();
        $request = Yii::$app->request;

        if ($request->isPost) {
            $model->receive_id = Yii::$app->request->post('receive_id');
            $model->code = Yii::$app->request->post('code');
            $model->qty = Yii::$app->request->post('qty');
            $model->unitprice = Yii::$app->request->post('unitprice');
            $model->unitcost = Yii::$app->request->post('unitcost');
            $model->lot = Yii::$app->request->post('lot');
            $model->mfd_date = Yii::$app->request->post('mfd_date');
            $model->exp_date = Yii::$app->request->post('exp_date');
            $model->detail = Yii::$app->request->post('detail');
            $model->save(FALSE);
        }
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
        if (($model = SStockIcathLendRecieve::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
    
    public function actionCodeList($q = null, $id = null) {
        Yii::$app->response->format = Response::FORMAT_JSON;
        $out = ['results' => ['code' => '', 'text' => '']];
        if (!is_null($q)) {

            $query = new \yii\db\Query();
            $query->select('code as id,  name AS text')
                    ->from('m_stock_icath_masprice')
                    ->where(['like', 'name', $q])                       
                    ->limit(20);
            $command = $query->createCommand();
            $data = $command->queryAll();
            $out['results'] = array_values($data);
        } elseif ($id > 0) {
            $out['results'] = ['code' => $id, 'text' => MStockIcathMasprice::find($id)->code];
        }
        return $out;
    }
}
