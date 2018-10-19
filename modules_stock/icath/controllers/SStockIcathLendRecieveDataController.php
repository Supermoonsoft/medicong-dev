<?php

namespace app\modules_stock\icath\controllers;

use Yii;
use app\modules_stock\icath\models\SStockIcathLendRecieveData;
use app\modules_stock\icath\models\SStockIcathLendRecieveDataSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\modules_stock\icath\models\MStockIcathMasprice;
use \yii\web\Response;
use yii\helpers\Html;
use yii\base\Model;
use yii\helpers\Url;

class SStockIcathLendRecieveDataController extends Controller
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
     * Lists all SStockIcathLendRecieveData models.
     * @return mixed
     */
    public function actionIndex()
    {
        $request = Yii::$app->request;
        $searchModel = new SStockIcathLendRecieveDataSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->query->where(['receive_id' => $request->get()]);

        return $this->renderAjax('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single SStockIcathLendRecieveData model.
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

 public function actionCreate() {
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
    public function actionCreate_()
    {
        $model = new SStockIcathLendRecieveData();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing SStockIcathLendRecieveData model.
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

  public function actionDelete($id)
 {
     $this->findModel($id)->delete();
     if (Yii::$app->request->isAjax) {
         Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
         return ['success' => true];
     }
     return $this->redirect(['index']);
 }
    public function actionDelete_($id)
    {
        $this->findModel($id)->delete();

        //return $this->redirect(['index']);
    }

    /**
     * Finds the SStockIcathLendRecieveData model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return SStockIcathLendRecieveData the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = SStockIcathLendRecieveData::findOne($id)) !== null) {
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
