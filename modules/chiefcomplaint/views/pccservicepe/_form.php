<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use froala\froalaeditor\FroalaEditor;
use froala\froalaeditor\FroalaEditorWidget;
/* @var $this yii\web\View */
/* @var $model app\modules\chiefcomplaint\models\Pccservicepi */
/* @var $form yii\widgets\ActiveForm */
?>
<?php
$this->registerJs('
  $(function() {
    $("img#edit").froalaEditor();
    
  });

')

?>
<div class="pccservicepe-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-md-4">
            <div id="froala-editor">
                <img id="edit" class="fr-fil fr-dib" src="../modules/chiefcomplaint/assets/body.jpg"/>  
            </div>
        </div>
        <div class="col-md-8">
        <?= $form->field($model, 'pe_text')->textarea(['rows' => 6]) ?>

            <div class="form-group">
                <?= Html::submitButton($model->isNewRecord ? 'บันทึก' : 'แก้ไข', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
            </div>
        </div>

</div>
    <?php ActiveForm::end(); ?>

</div>


