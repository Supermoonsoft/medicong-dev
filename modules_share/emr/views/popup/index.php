<?php
    $url = "../report/?vn='610000001'&hn='008262'&name="."'".$report."'";
?>

<div class="embed-responsive embed-responsive-16by9">
    <iframe src="<?=$url?>" id="FrameID" allowfullscreen>



    </iframe>
</div>



<?php
$this->registerJs($this->render('./../../js/popup.js'));
?>