<?php

use kartik\grid\GridView;
use yii\bootstrap\Modal;
use yii\helpers\Html;
?>



<?php
Modal::begin([
    'header' => '<h4><บันทึกการนัด</h4>',
    'id' => 'modal',
    'options' => [
        'tabindex' => FALSE
    ],
    'size' => 'modal-md'
]);
echo "<div id='modalContent'></div>";
Modal::end();
?>

<?php
Modal::begin([
    'header' => '<h4><i class="fa fa-cog"></i> ตั้งค่าคลินิก</h4>',
    'id' => 'modalSetting',
    'options' => [
        'tabindex' => FALSE
    ],
    'size' => 'modal-md'
]);
echo "<div id='modalSetting'></div>";
Modal::end();
?>

<?php
   
    
    ?>

<div class="col-md-6 box-shadow" >
    <div style="margin-top: 0px;margin-bottom: 10px">
        <?php
        echo \yii2fullcalendar\yii2fullcalendar::widget(array(
            'events' => $events,
            'options' => [
                'lang' => 'th',
            //... more options to be defined here!
            ],
        ));
        ?> 

    </div>
</div>

<div class="col-md-6 box-shadow">

    <div class="row" style="background-color: #1de9b6; height: 40px; ">
        <div class="col-md-6" style="margin-top: 10px;">
            <b style="color: #000063;font-size: 18px;">ประวัติการนัดหมาย </b> 

        </div>
        <div class="col-md-6" style="text-align: right;margin-top: 4px;">
            <button class="btn-set info" id="btnsetting"><i class="fa fa-cog"></i> ตั้งค่า</button>
        </div>
    </div>
    <div class="row" style="margin-left : 10px;margin-top: 30px;margin-right: 10px">
        <?=
        GridView::widget([
            'dataProvider' => $dataProvider,
            //'filterModel' => $searchModel,
            //'showPageSummary'=>true,
            'pjax' => true,
            'pjaxSettings' => [
                'neverTimeout' => true,
            ],
            'striped' => true,
            'hover' => true,
            'columns' => [
                ['class' => 'kartik\grid\SerialColumn'],
                [
                    'attribute' => 'hospname',
                    'label' => 'สถานที่รับบริการ'
                ],
                [
                    'attribute' => 'date_visit',
                    'label' => 'วันที่รับบริการ'
                ],
                [
                    'attribute' => 'appoint_date',
                    'label' => 'วันนัด'
                ],
                [
                    'attribute' => 'clinic',
                    'label' => 'คลินิก'
                ],
                [
                    'attribute' => 'appoint_doctor',
                    'label' => 'แพทย์ผู้นัด'
                ],
                [
                    'attribute' => 'appoint_detail',
                    'label' => 'รายละเอียด'
                ],
            ],
        ]);
        ?>
    </div>

</div>






<?php
$script = <<< JS
   
        
        
 $('#btnadd').click(function() {
        var date = '';
        $.get('index.php?r=appointment/appoint/create',{'date':date,'type':1},function(data){
            $('#modal').modal('show')
            .find('#modalContent')
            .html(data);
        
         });
        
   });
        
   $('#btnedit').click(function() {
       window.location='./index.php?r=oapp/oappevent/oedit';
   });

   
 $(document).on('click','.fc-day',function(){
     var date = $(this).attr('data-date');
       $.get('index.php?r=appointment/appoint/create',{'date':date,'type':0},function(data){
            $('#modal').modal('show')
            .find('#modalContent')
            .html(data);
        
         });
      
        
   });
  $(document).on('click','.fc-content',function(){
     var date = $(this).attr('data-date');
       $.get('index.php?r=appointment/appoint/create',{'date':date,'type':0},function(data){
            $('#modal').modal('show')
            .find('#modalContent')
            .html(data);
        
         });
      
        
   });
   $(document).on('click','.fc-day-top',function(){
     var date = $(this).attr('data-date');
       $.get('index.php?r=appointment/appoint/create',{'date':date,'type':0},function(data){
            $('#modal').modal('show')
            .find('#modalContent')
            .html(data);
        
         });
      
        
   });
        
   $('#btnsetting').click(function() {
      var date = '';
        $.get('index.php?r=appointment/clinic/create',{'date':date,'type':1},function(data){
            $('#modalSetting').modal('show')
            .find('#modalSetting')
            .html(data);
        
         });
   });

   
JS;
$this->registerJs($script);

$this->registerCss("
.box-shadow {
    -webkit-box-shadow: 0 0 10px 0 rgba(0,0,0,.15);
    box-shadow: 0 0 10px 0 rgba(0,0,0,.15);
    
}

.button-box-shadow {
    -webkit-box-shadow: 0 0 10px 0 rgba(0,0,0,.10);
    box-shadow: 0 0 10px 0 rgba(0,0,0,.10);
    margin:5px;
    padding: 5px;
    background: #00e676;
}
.cctext{
    font-size: 22px;
    -webkit-border-radius: 8px;
       -moz-border-radius: 8px;
            border-radius: 8px;
}

.btn-pop {
    //padding: 5px 5px;
    margin:5px;
    font-size: 16px;
    color: #ffffff;
    background: #00e676;
    width:auto;
    line-height: normal;
    -webkit-border-radius: 8px;
       -moz-border-radius: 8px;
            border-radius: 8px;
    }
.btn-set {
    border: 2px solid black;
    background-color: #1de9b6;
    color: #000063;
    padding: 4px 8px;
    font-size: 14px;
    cursor: pointer;
    width:70px;
    border-radius: 5px;
}

.info {
    border-color: #000063;
    color: #000063
}
.info:hover {
    background: #000063;
    color: white;
}

.fc-prev-button  {
    border-color: #000063;
    color: #000063
}
.fc-prev-button:hover {
    background: #000063;
    color: white;
}
.fc-next-button  {
    border-color: #000063;
    color: #000063
}
.fc-next-button:hover {
    background: #000063;
    color: white;
}

.fc-month-button  {
    border-color: #000063;
    color: #000063
}
.fc-month-button:hover {
    background: #000063;
    color: white;
}

.fc-header-toolbar {
   background-color: #1de9b6;
   color: #000063
}
.fc-agendaWeek-button  {
    border-color: #000063;
    color: #000063
}
.fc-agendaWeek-button:hover {
    background: #000063;
    color: white;
}


.btn-pop-info {
    margin:5px;
    font-size: 16px;
    color: #ffffff;
    background: #f50057;
    width:auto;
    line-height: normal;
        -webkit-border-radius: 8px;
        -moz-border-radius: 8px;
    border-radius: 8px;
    }
");
?>
