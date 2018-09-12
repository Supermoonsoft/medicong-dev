<?php

use app\components\UserHelper;
?>
<div class="jumbotron">
    <h3>หน้าสำหรับประกาศข่าวประชาสัมพันธ์ขององค์กร</h3>   
    <?php if (!UserHelper::isUserReadyLogin()): ?>
        <h4>กรุณาลงชื่อเข้าใช้ระบบ</h4>
        <p>doctor , 112233</p>
        <p>nurse , 112233</p>
    <?php endif; ?>
</div>

