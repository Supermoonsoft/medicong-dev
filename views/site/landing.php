<?php
use app\components\loading\ShowLoading;
use app\components\UserHelper;
echo ShowLoading::widget();
?>
<div class="jumbotron">
    <h3>หน้าสำหรับประกาศข่าวประชาสัมพันธ์ขององค์กร</h3>   
    <?php if (1==1):?>
        <h4>กรุณาลงชื่อเข้าใช้ระบบ</h4>
         <p>user กลุ่มพยาบาล= (nurse1 , 112233) / (nurse2 , 112233) / (nurse3 , 112233) </p>
        <p>user กลุ่มแพทย์ = (doctor1 , 112233) / (doctor2 , 112233) / (doctor3 , 112233)</p>
       
    <?php endif; ?>
</div>

