<?php

namespace app\modules_nurse\dietitian\controllers;

use Yii;
use app\modules_nurse\dietitian\models\SDietitianOpdNutritionVisitRecord;
use app\modules_nurse\dietitian\models\SDietitianOpdNutririonVisitRecordSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\components\MessageHelper;
/**
 * OpdrecordController implements the CRUD actions for SDietitianOpdNutritionVisitRecord model.
 */
class OpdrecordController extends Controller
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
     * Lists all SDietitianOpdNutritionVisitRecord models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SDietitianOpdNutririonVisitRecordSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single SDietitianOpdNutritionVisitRecord model.
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

    /**
     * Creates a new SDietitianOpdNutritionVisitRecord model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new SDietitianOpdNutritionVisitRecord();
        
        $dm=Yii::$app->request->post('dm');
        $t1=Yii::$app->request->post('t1');
        $t2=Yii::$app->request->post('t2');
        $uncertain=Yii::$app->request->post('uncertain');
        $dmwith=Yii::$app->request->post('dmwith');
        $thyroid=Yii::$app->request->post('thyroid');
        $thyroiddectomy=Yii::$app->request->post('thyroiddectomy');
        $i131=Yii::$app->request->post('i131');
        $befor=Yii::$app->request->post('befor');
        $after=Yii::$app->request->post('after');
        $obesity=Yii::$app->request->post('obesity');
        $ht=Yii::$app->request->post('ht');
        $dlp=Yii::$app->request->post('dlp');
        $cad=Yii::$app->request->post('cad');
        $chf=Yii::$app->request->post('chf');
        $ckd=Yii::$app->request->post('ckd');
        $malignancy=Yii::$app->request->post('malignancy');
        $chemotherapy=Yii::$app->request->post('chemotherapy');
        $radiation=Yii::$app->request->post('radiation');
        $other=Yii::$app->request->post('other');
                
        
        
        $arrPrincipalDiag['principal_Diag'] = ['dm'=>$dm,'t1'=>$t1,'t2'=>$t2,'uncertain'=>$uncertain,'dmwith'=>$dmwith,'thyroid'=>$thyroid,
            'thyroiddectomy'=>$thyroiddectomy,'i131'=>$i131,'befor'=>$befor,'after'=>$after,'obesity'=>$obesity,'ht'=>$ht,
            'dlp'=>$dlp,'cad'=>$cad,'chf'=>$chf,'ckd'=>$ckd,'malignancy'=>$malignancy,'chemotherapy'=>$chemotherapy,
            'radiation'=>$radiation,'other'=>$other
            ];
        $model->principal_diag = $arrPrincipalDiag;

        if ($model->load(Yii::$app->request->post()) && $model->save(FALSE)) {
            
            MessageHelper::setFlashSuccess('Add OPD NURTITION VISIT RECORD SUCCESS !! ');
            return $this->redirect(['/dietitian']);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing SDietitianOpdNutritionVisitRecord model.
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

    /**
     * Deletes an existing SDietitianOpdNutritionVisitRecord model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the SDietitianOpdNutritionVisitRecord model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return SDietitianOpdNutritionVisitRecord the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = SDietitianOpdNutritionVisitRecord::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
