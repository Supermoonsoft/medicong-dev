<?php

namespace app\modules\doctorworkbench\controllers;

use yii;
use yii\helpers\Json;
use app\modules\doctorworkbench\models\CIcd10tm;
use app\modules\doctorworkbench\models\PccDiagnosis;
use app\modules\doctorworkbench\models\PccDiagnosisSearch;
//use app\modules\lab\models\Hoslab;
//use app\modules\lab\models\HoslabSearch;
use app\modules\lab\models\Pcclab;
use app\modules\lab\models\PcclabSearch;
use app\modules\lab\models\Preorderlab;
use app\modules\drug\models\Hosdrug;
use app\modules\drug\models\HosdrugSearch;
use app\modules\lab\models\PreorderlabSearch;
    
use app\modules\emr\models\PccService;
use app\modules\emr\models\PccServiceSearch;
use app\modules\chiefcomplaint\models\Pccservicecc;
use app\modules\chiefcomplaint\models\PccserviceccSearch;
use app\modules\treatment\models\Treatmentplan;
use app\modules\treatment\models\TreatmentplanSearch;
use app\modules\emr\models\GatewayEmrVisit;
use app\modules\emr\models\GatewayEmrVisitSearch;
use app\modules\chiefcomplaint\models\Pccservicepi;
use app\modules\chiefcomplaint\models\PccservicepiSearch;
use app\modules\chiefcomplaint\models\Pccservicepe;
use app\modules\chiefcomplaint\models\PccservicepeSearch;
    
use yii\web\Controller;
use app\modules\appointment\models\PccAppoinmentShow;


class OrderController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $modelPccDiagnosis = new PccDiagnosis();
        $searchModelPccDiagnosis = new PccDiagnosisSearch();
        $dataProviderPccDiagnosis = $searchModelPccDiagnosis->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'modelPccDiagnosis' => $modelPccDiagnosis,
            'searchModelPccDiagnosis' => $searchModelPccDiagnosis,
            'dataProviderPccDiagnosis' => $dataProviderPccDiagnosis,
        ]);
    }

    public function actionProcedure(){
        return $this->render('procedure');
    }
    public function actionAppointment() {
        $events = PccAppoinmentShow::find()->all();
        
        
        
        $masker = [];
        foreach ($events as $eve) {
            
            $event = new \yii2fullcalendar\models\Event();
            $event->id = $eve->id;
            $event->title = '';
            $event->start = $eve->startdate;
            $event->end = $eve->enddate;
            $event->backgroundColor = $eve->color;
            $masker[] = $event;
        }
        
        //--- table --
        /*$query = GatewayEmrAppointment::find()
         ->select(["gateway_emr_appointment.hospname","p.hn","date_visit","time_visit","appoint_date","appoint_detail","p.cid","clinic"])
         ->leftJoin("pcc_patient p","p.hn = gateway_emr_appointment.hn")
         ->where(["p.cid" => '3200700311770']);*/
        $sql="SELECT * FROM (
        SELECT a.hospcode,a.hospname,a.hn,a.vn,a.date_visit,a.clinic,a.appoint_date,a.appoint_detail,a.appoint_doctor
        FROM gateway_emr_appointment  a
        LEFT JOIN gateway_emr_patient p ON p.hn=a.hn
        where p.cid='3200700311770'
        UNION ALL
        SELECT a.hospcode,a.hospname,a.hn,a.vn,a.date_service,a.clinic,a.appoint_date,a.detail,'' AS doctor
        FROM pcc_appointment a
        LEFT JOIN pcc_patient p ON p.hn = a.hn
        where p.cid='3200700311770') AS t1
        ORDER BY date_visit DESC";
        $rawData = \Yii::$app->db->createCommand($sql)->queryAll();
        $dataProvider = new \yii\data\ArrayDataProvider([
                                                        'allModels'=>$rawData,
                                                        'pagination'=>[
                                                        'pageSize'=>20
                                                        ]
                                                        ]);
        
        /*$dataProvider = new yii\data\ActiveDataProvider([
         'query' => $query,
         'pagination' => [
         'pageSize' => 10,
         ],
         ]);*/
        
        
        return $this->render('appointment', [
                             'events' => $masker,
                             'dataProvider' => $dataProvider
                             ]);
    }
    public function actionEmr($cid=NULL){
        
        $searchModel = new GatewayEmrVisitSearch($cid);
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        return $this->render('emr',[
                             'searchModel' => $searchModel,
                             'dataProvider' => $dataProvider,
                             'cid'=>$cid
                             ]);
        
    }
    public function actionPreOrderLab(){
        $searchModel = new PreorderlabSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('pre_order_lab', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
        

    }

    public function actionLab($cid=NULL)
    {
        $searchModel = new PcclabSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $model = new Pcclab(); 

        if (Yii::$app->request->isAjax) {
            Yii::$app->response->format = Response::FORMAT_JSON;
               return   $this->renderAjax('lab',[
                     'searchModel' => $searchModel,
                     'dataProvider' => $dataProvider,
                     'model' => $model
                     ]);
             } else {
                return $this->render('lab', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
                    'model' => $model
                ]);
            }
    }

    public function actionDrug($cid =NULL){
        $searchModel = new HosdrugSearch($cid);
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('drug', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'cid'=>$cid
        ]);

    }
        
    public function actionTreatmmentPlan(){
        $model = new Treatmentplan();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('treatmment_plan', [
            'model' => $model,
        ]);
    }

    public function actionCc(){
        $model = new Pccservicecc();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('cc', [
            'model' => $model,
        ]);

    }

    public function actionPi()
    {
        $request = Yii::$app->request;
        $model = new Pccservicepi();  

        if($request->isAjax){
            /*
            *   Process for ajax request
            */
            Yii::$app->response->format = Response::FORMAT_JSON;
            if($request->isGet){
                return [
                    'title'=> "Create new Pccservicepi",
                    'content'=>$this->renderAjax('pi', [
                        'model' => $model,
                    ]),
                    'footer'=> Html::button('Close',['class'=>'btn btn-default pull-left','data-dismiss'=>"modal"]).
                                Html::button('Save',['class'=>'btn btn-primary','type'=>"submit"])
        
                ];         
            }else if($model->load($request->post()) && $model->save()){
                return [
                    'forceReload'=>'#crud-datatable-pjax',
                    'title'=> "Create new Pccservicepi",
                    'content'=>'<span class="text-success">Create Pccservicepi success</span>',
                    'footer'=> Html::button('Close',['class'=>'btn btn-default pull-left','data-dismiss'=>"modal"]).
                            Html::a('Create More',['create'],['class'=>'btn btn-primary','role'=>'modal-remote'])
        
                ];         
            }else{           
                return [
                    'title'=> "Create new Pccservicepi",
                    'content'=>$this->renderAjax('pi', [
                        'model' => $model,
                    ]),
                    'footer'=> Html::button('Close',['class'=>'btn btn-default pull-left','data-dismiss'=>"modal"]).
                                Html::button('Save',['class'=>'btn btn-primary','type'=>"submit"])
        
                ];         
            }
        }else{
            /*
            *   Process for non-ajax request
            */
            if ($model->load($request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            } else {
          return $this->render('pi', [
                    'model' => $model,
                ]);
            }
        }
       
    }

    
    public function actionPe()
    {
        $request = Yii::$app->request;
        $model = new Pccservicepe();  

        if($request->isAjax){
            /*
            *   Process for ajax request
            */
            Yii::$app->response->format = Response::FORMAT_JSON;
            if($request->isGet){
                return [
                    'title'=> "Create new Pccservicepe",
                    'content'=>$this->renderAjax('pe', [
                        'model' => $model,
                    ]),
                    'footer'=> Html::button('Close',['class'=>'btn btn-default pull-left','data-dismiss'=>"modal"]).
                                Html::button('Save',['class'=>'btn btn-primary','type'=>"submit"])
        
                ];         
            }else if($model->load($request->post()) && $model->save()){
                return [
                    'forceReload'=>'#crud-datatable-pjax',
                    'title'=> "Create new Pccservicepe",
                    'content'=>'<span class="text-success">Create Pccservicepe success</span>',
                    'footer'=> Html::button('Close',['class'=>'btn btn-default pull-left','data-dismiss'=>"modal"]).
                            Html::a('Create More',['create'],['class'=>'btn btn-primary','role'=>'modal-remote'])
        
                ];         
            }else{           
                return [
                    'title'=> "Create new Pccservicepe",
                    'content'=>$this->renderAjax('pe', [
                        'model' => $model,
                    ]),
                    'footer'=> Html::button('Close',['class'=>'btn btn-default pull-left','data-dismiss'=>"modal"]).
                                Html::button('Save',['class'=>'btn btn-primary','type'=>"submit"])
        
                ];         
            }
        }else{
            /*
            *   Process for non-ajax request
            */
            if ($model->load($request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            } else {
                return $this->render('pe', [
                    'model' => $model,
                ]);
            }
        }
       
    }

        public function actionIcd10List($q = null, $id = null){
            Yii::$app->response->format = \yii\web\Response::FORMAT_JSON; //กำหนดการแสดงผลข้อมูลแบบ json
            $out = ['results'=>['diagcode'=>'','text'=>'']];
            if(!is_null($q)){
                $query = new \yii\db\Query();
                $query->select('diagcode as id, diagcode as text')
                        ->from('c_icd10tm')
                        ->where("diagcode LIKE '%".$q."%'")
                        ->limit(20);
                $command = $query->createCommand();
                $data = $command->queryAll();
                $out['results'] = array_values($data);
            }else if($id>0){
                $out['results'] = ['diagcode'=>$id, 'text'=>  CIcd10tm::find($id)->diagcode];
            }
            return $out;
        }


}
