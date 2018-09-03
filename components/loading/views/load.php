<?php

use yii\web\View;

$this->registerCss($this->render('./load.css'));
$this->registerJs($this->render('./load_end.js'), View::POS_LOAD);
?>
<div id='tehnnn_load_screen' ><div id='tehnnn_loading'>Loading...</div></div>