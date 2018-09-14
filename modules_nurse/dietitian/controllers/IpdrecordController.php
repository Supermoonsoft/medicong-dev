<?php

namespace app\modules_nurse\dietitian\controllers;

use Yii;
use app\modules_nurse\dietitian\models\SDietitianIpdNutririonVisitRecord;
use app\modules_nurse\dietitian\models\SDietitianIpdNutririonVisitRecordSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\components\MessageHelper;

/**
 * IpdrecordController implements the CRUD actions for SDietitianIpdNutririonVisitRecord model.
 */
class IpdrecordController extends Controller
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
     * Lists all SDietitianIpdNutririonVisitRecord models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SDietitianIpdNutririonVisitRecordSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single SDietitianIpdNutririonVisitRecord model.
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
     * Creates a new SDietitianIpdNutririonVisitRecord model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new SDietitianIpdNutririonVisitRecord();
        $chew1=Yii::$app->request->post('chew1');
        $chew2=Yii::$app->request->post('chew2');
        $chew3=Yii::$app->request->post('chew3');
        
        $digestive1=Yii::$app->request->post('digestive1');
        $digestive2=Yii::$app->request->post('digestive2');
        $digestive3=Yii::$app->request->post('digestive3');
        
        $eat1=Yii::$app->request->post('eat1');
        $eat2=Yii::$app->request->post('eat2');
        $eat3=Yii::$app->request->post('eat3');
        
        $food_access1=Yii::$app->request->post('food_access1');
        $food_access2=Yii::$app->request->post('food_access2');
        $food_access3=Yii::$app->request->post('food_access3');
        $food_access4=Yii::$app->request->post('food_access4');
        
        $disease_min1=Yii::$app->request->post('disease_min1');
        $disease_min2=Yii::$app->request->post('disease_min2');
        $disease_min3=Yii::$app->request->post('disease_min3');
        $disease_min4=Yii::$app->request->post('disease_min4');
        $disease_min5=Yii::$app->request->post('disease_min5');
        $disease_min6=Yii::$app->request->post('disease_min6');
        $disease_min7=Yii::$app->request->post('disease_min7');
        $disease_min8=Yii::$app->request->post('disease_min8');
        $disease_min9=Yii::$app->request->post('disease_min9');
        $disease_min10=Yii::$app->request->post('disease_min10');
        $disease_min11=Yii::$app->request->post('disease_min11');
        $disease_min12=Yii::$app->request->post('disease_min12');
        
        $disease_max1=Yii::$app->request->post('disease_max1');
        $disease_max2=Yii::$app->request->post('disease_max2');
        $disease_max3=Yii::$app->request->post('disease_max3');
        $disease_max4=Yii::$app->request->post('disease_max4');
        $disease_max5=Yii::$app->request->post('disease_max5');
        $disease_max6=Yii::$app->request->post('disease_max6');
        $disease_max7=Yii::$app->request->post('disease_max7');
        $disease_max8=Yii::$app->request->post('disease_max8');
        $disease_max9=Yii::$app->request->post('disease_max9');
        $disease_max10=Yii::$app->request->post('disease_max10');
        $disease_max11=Yii::$app->request->post('disease_max11');
        
        
        
        $arrChew['chew'] = ['chew1'=>$chew1,'chew2'=>$chew2,'chew3'=>$chew3];
        $model->chew = $arrChew;
        
        $arrDigestive['digestive'] = ['digestive1'=>$digestive1,'digestive2'=>$digestive2,'digestive3'=>$digestive3];
        $model->digestive = $arrDigestive;
        
        $arrEat['eat'] = ['eat1'=>$eat1,'eat2'=>$eat2,'eat3'=>$eat3];
        $model->eat = $arrEat;
        
        $arrFoodAccess['food_access'] = ['food_access1'=>$food_access1,'food_access2'=>$food_access2,'food_access3'=>$food_access3,'food_access4'=>$food_access4];
        $model->food_access = $arrFoodAccess;
        
        $arrDisMin['disease_min']= ['dismin1'=>$disease_min1,'dismin2'=>$disease_min2,'dismin3'=>$disease_min3,'dismin4'=>$disease_min4,
                'dismin5'=>$disease_min5,'dismin6'=>$disease_min6,'dismin7'=>$disease_min7,'dismin8'=>$disease_min8,
                'dismin9'=>$disease_min9,'dismin10'=>$disease_min10,'dismin11'=>$disease_min11,'dismin12'=>$disease_min12];
        $model->disease_min = $arrDisMin;
        
        $arrDisMax['disease_max'] = ['dismax1'=>$disease_max1,'dismax2'=>$disease_max2,'dismax3'=>$disease_max3,'dismax4'=>$disease_max4,
                'dismax5'=>$disease_max5,'dismax6'=>$disease_max6,'dismax7'=>$disease_max7,'dismax8'=>$disease_max8,
                'dismax9'=>$disease_max9,'dismax10'=>$disease_max10,'dismax11'=>$disease_max11
                ];
        $model->disease_max = $arrDisMax;
        
        

        if ($model->load(Yii::$app->request->post()) && $model->save(FALSE)) {
            
            MessageHelper::setFlashSuccess('Add IPD NURTITION VISIT RECORD SUCCESS !! ');
           return $this->redirect(['/dietitian']);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing SDietitianIpdNutririonVisitRecord model.
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
     * Deletes an existing SDietitianIpdNutririonVisitRecord model.
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
     * Finds the SDietitianIpdNutririonVisitRecord model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return SDietitianIpdNutririonVisitRecord the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = SDietitianIpdNutririonVisitRecord::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
