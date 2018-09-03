<?php
use yii\web\View;
$this->registerCss($this->render('./loading.css'));
$this->registerJs($this->render('./loading.js'), View::POS_LOAD);
?>
<div id='tehnnn_load_screen' ><div id='tehnnn_loading'>Loading...</div></div>