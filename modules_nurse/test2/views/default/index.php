<?php
use app\components\loading\ShowLoading;
echo ShowLoading::widget();

?>
<div class="test2-default-index">
    <p>
        <?php
        for ($i = 0; $i < 100000; $i++) {
            $n = $i % 2;
            echo " บรรทัดที่".$i;
            echo "<br/>";
        }
        ?>
    </p>
</div>



