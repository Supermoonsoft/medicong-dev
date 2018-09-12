<?php

use app\components\UserHelper;
?>
<div class="jumbotron">
    <h3>Organization Landing Page & News</h3>   
    <?php if (!UserHelper::isUserReadyLogin()): ?>
        <h4>Please Login</h4>
    <?php endif; ?>
</div>

