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
<div class="pccservicepi-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-md-12">
        <?= $form->field($model, 'pi_text')->textarea(['rows' => 6]) ?>

            <div class="form-group">
                <?= Html::submitButton($model->isNewRecord ? 'บันทึก' : 'แก้ไข', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
            </div>
        </div>

</div>
    <?php ActiveForm::end(); ?>

</div>

