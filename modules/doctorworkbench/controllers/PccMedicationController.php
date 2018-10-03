<?php

namespace app\modules\doctorworkbench\controllers;

use Yii;
use app\modules\doctorworkbench\models\PccMedication;
use app\modules\doctorworkbench\models\PccMedicationSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use \yii\web\Response;
use yii\helpers\Html;
use app\components\PatientHelper;
use app\modules\doctorworkbench\models\CDrugitems;
use app\modules\doctorworkbench\models\CDrugusage;
use app\modules\doctorworkbench\models\GatewayCDrugItems;


class PccMedicationController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                    'bulk-delete' => ['post'],
                ],
            ],
        ];
    }

    public function actionIndex()
    {    
        $cid = PatientHelper::getCurrentCid();
        $pcc_vn = PatientHelper::getCurrentVn();
        $searchModel = new PccMedicationSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->query->where(['cid' => $cid]);
        $dataProvider->query->orderBy('date_service ASC');
        $model = new PccMedication();  
        $model->cid = $cid;
        $model->pcc_vn = $pcc_vn;

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'model' => $model,
        ]);
    }

    public function actionView($id)
    {   
        $request = Yii::$app->request;
        if($request->isAjax){
            Yii::$app->response->format = Response::FORMAT_JSON;
            return [
                    'title'=> "PccMedication #".$id,
                    'content'=>$this->renderAjax('view', [
                        'model' => $this->findModel($id),
                    ]),
                    'footer'=> Html::button('Close',['class'=>'btn btn-default pull-left','data-dismiss'=>"modal"]).
                            Html::a('Edit',['update','id'=>$id],['class'=>'btn btn-primary','role'=>'modal-remote'])
                ];    
        }else{
            return $this->render('view', [
                'model' => $this->findModel($id),
            ]);
        }
    }

    public function actionCreate()
    {
        $request = Yii::$app->request;
        $model = new PccMedication();  
        Yii::$app->response->format = Response::FORMAT_JSON;
        
        if ($model->load($request->post())) {
            $drug = GatewayCDrugItems::find()->where(['icode' => $model->icode])->one();
           //$model->druguse = $drug->drugusage;
            $model->unitprice = $drug->unitprice;
            $model->tmt24_code = $drug->tmt24_code;
            $model->drug_name = $drug->drug_name.' '.$drug->unit;	
            $model->totalprice =  $model->qty * $drug->unitprice;
            $model->save(false);
            return [
                'forceReload'=>'#crud-medication-pjax'];

        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
       
    }

    public function actionDelete($id)
    {
        $request = Yii::$app->request;
        $this->findModel($id)->delete();

        if($request->isAjax){
            /*
            *   Process for ajax request
            */
            Yii::$app->response->format = Response::FORMAT_JSON;
            return ['forceClose'=>true,'forceReload'=>'#crud-datatable-pjax'];
        }else{
            /*
            *   Process for non-ajax request
            */
            return $this->redirect(['index']);
        }


    }

    public function actionBulkDelete()
    {        
        $request = Yii::$app->request;
        $pks = explode(',', $request->post( 'pks' )); // Array or selected records primary keys
        foreach ( $pks as $pk ) {
            $model = $this->findModel($pk);
            $model->delete();
        }

        if($request->isAjax){
            /*
            *   Process for ajax request
            */
            Yii::$app->response->format = Response::FORMAT_JSON;
            return ['forceClose'=>true,'forceReload'=>'#crud-datatable-pjax'];
        }else{
            /*
            *   Process for non-ajax request
            */
            return $this->redirect(['index']);
        }
       
    }

    protected function findModel($id)
    {
        if (($model = PccMedication::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
// รวมราคายา
    public function actionSumPrice($cid=null){
    return PccMedication::find()->where(['cid' => $cid])->sum('totalprice');
    }

    // ปรินสติกเกอร์ยา

    public function actionPrintMed($hn=null,$vn=null){
        //Yii::$app->response->format = Response::FORMAT_JSON;
        return $this->renderAjax('print_med');
    }

    public function actionSelectMed(){
        Yii::$app->response->format = Response::FORMAT_JSON;
        $request = Yii::$app->request;
        $id = $request->post( 'id' ); // รับค่า id ของ pcc_medication ที่ถูกส่งมา
        return PccMedication::findOne(['id' => $id])->icode; // ส่งค่า icode ไปที่ select2 

    }

    public function actionUpdateMed(){
        Yii::$app->response->format = Response::FORMAT_JSON;
        $request = Yii::$app->request;
        $keys = $request->post( 'id' ); // คา่ ID ที่ส่งมา
        $value = $request->post( 'value' ); // ค่า input value
       // $drug_use = CDrugusage::findOne(['drugusage' => $value['druguse']]); // ค้นหา id drugusage
        foreach ( $keys as $id ) { // loop ข้อมูล ID
            $model = PccMedication::findOne(['id' => $id]); // ค้นหาแถวตาม PSK
            if($value['druguse']!==""){
                $model->druguse  = $value['druguse'];  // แก้ไข วิธีใช้
            }
            if($value['qty']!==""){
                $model->qty  = $value['qty']; // แก้ไข จำนวน
            }
            $model->save();  // บันทึก
        }
        return ['forceReload'=>'#crud-medication-pjax']; // reload gridview  เพื่อ update  ข้อมูล
    }
public function actionEditable() {
        if (Yii::$app->request->post('hasEditable')) {
            \Yii::$app->response->format = Response::FORMAT_JSON;
            $id = Yii::$app->request->post('editableKey');
            $data = PccMedication::findOne($id);
            $posted = current($_POST['PccMedication']);
            $post['PccMedication'] = $posted;
            if ($data->load($post)) {
                $data->save();
                //$value = $_POST['PccMedication'];
                return ['output' => '', 'message' => ''];
            }
        }
    }
}
