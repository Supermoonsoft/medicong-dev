<?php

namespace app\modules_share\education\controllers;

use Yii;
use app\modules_share\education\models\PccServiceEducation;
use app\modules_share\education\models\PccServiceEducationSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use \yii\web\Response;
use app\components\PatientHelper;
use yii\helpers\Html;
use app\components\VisitController;

/**
 * EducationController implements the CRUD actions for PccServiceEducation model.
 */
class EducationController extends Controller {

    /**
     * {@inheritdoc}
     */
    public function behaviors() {
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
     * Lists all PccServiceEducation models.
     * @return mixed
     */
    public function actionIndex() {
        $searchModel = new PccServiceEducationSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PccServiceEducation model.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new PccServiceEducation model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $connection = Yii::$app->db;
        $request = Yii::$app->request;
        $model = new PccServiceEducation();

        $vn= PatientHelper::getCurrentVn();
        $cid =PatientHelper::getCurrentCid();
        $searchModel = new PccServiceEducationSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->query->where(['cid' => $cid,'pcc_vn'=>$vn]);  
        $dataProvider->query->orderBy('date_service ASC');
       
       
//            $cid = $model->cid;
//            $command = Yii::$app->db->createCommand("SELECT hospcode FROM gateway_emr_patient WHERE cid='$cid'");
//            $hospcode = $command->queryScalar();
//
//            $model->hospcode = $hospcode;
            
            
        if ($request->isAjax) {
            Yii::$app->response->format = Response::FORMAT_JSON;
            
           





            if ($model->load(Yii::$app->request->post()) && $model->save()) {
               return ['forceReload'=>'#crud-education-pjax'];
            }

            return $this->render('create', [
                        'model' => $model,
                        'dataProvider'=>$dataProvider
            ]);
        }else{
            return $this->render('create', [
                                 'model' => $model,
                                 'dataProvider'=>$dataProvider
                                 ]);
        }
    }

    /**
     * Updates an existing PccServiceEducation model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
                    'model' => $model,
        ]);
    }

    /**
     * Deletes an existing PccServiceEducation model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the PccServiceEducation model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return PccServiceEducation the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = PccServiceEducation::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionProced($q = null, $id = null) {
        Yii::$app->response->format = \yii\web\Response::FORMAT_JSON; //กำหนดการแสดงผลข้อมูลแบบ json
        $out = ['results' => ['id' => '', 'text' => '']];
        if (!is_null($q)) {
            $query = new \yii\db\Query();
            $query->select('id_specialpp as id, specialpp as text')
                    ->from('c_specialpp')
                    ->where("id_specialpp LIKE '%" . $q . "%'")
                    ->orWhere("specialpp LIKE '%" . $q . "%'")
                    ->limit(20);
            $command = $query->createCommand();
            $data = $command->queryAll();
            $out['results'] = array_values($data);
        } else if ($id > 0) {
            $out['results'] = ['id' => $id, 'text' => 'test'];
        }
        return $out;
    }
    
    public function actionTableDelete()
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
            return ['forceClose'=>true,'forceReload'=>'#crud-education-pjax'];
        }else{
            /*
            *   Process for non-ajax request
            */
            return $this->redirect(['index']);
        }
       
    }

}
