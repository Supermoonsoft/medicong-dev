<?php
use yii\helpers\Html;
?>
<?php $i = 1;foreach($raw as $model):?>
<tr>
    <td><?=$i++;?></td>
    <td><?=$model['lab_name'];?></td>
    <td><?=$model['lab_result'];?></td>
    <td><?=$model['standard_result'];?></td>
</tr>
<?php endforeach;?>