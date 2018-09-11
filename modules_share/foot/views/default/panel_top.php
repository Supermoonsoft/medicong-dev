<?php
use yii\helpers\Html;
$this->title = 'ULCER VISIT FIRST VISIT IPD';
$this->params['breadcrumbs'][] = ['label' => 'FOOT', 'url' => ['/foot/default/index']];
$this->params['breadcrumbs'][] = ['label' => 'SUMMARY-OPD', 'url' => ['/foot/foot-assessment-summary-opd']];
$this->params['breadcrumbs'][] = ['label' => 'SUMMARY-IPD', 'url' => ['/foot/foot-assessment-summary-ipd']];
$this->params['breadcrumbs'][] = ['label' => 'COMPLATE', 'url' => ['/foot/foot-assessment-complate']];
$this->params['breadcrumbs'][] = ['label' => 'ULCER VISIT FIRST VISIT OPD', 'url' => ['/foot/foot-ulcer-first-opd']];
$this->params['breadcrumbs'][] = ['label' => 'ULCER VISIT FIRST VISIT IPD', 'url' => ['/foot/foot-ulcer-first-ipd']];
$this->params['breadcrumbs'][] = ['label' => 'ULCER VISIT FU VISIT OPD', 'url' => ['/foot/foot-ulcer-fu-opd']];
$this->params['breadcrumbs'][] = ['label' => 'ULCER VISIT FU VISIT IPD', 'url' => ['/foot/foot-ulcer-fu-ipd']];
$this->params['breadcrumbs'][] = $this->title;


?>
<style>
.navbar-default .navbar-nav > li.dropdown:hover > a, 
.navbar-default .navbar-nav > li.dropdown:hover > a:hover,
.navbar-default .navbar-nav > li.dropdown:hover > a:focus {
    background-color: rgb(231, 231, 231);
    color: rgb(85, 85, 85);
}
li.dropdown:hover > .dropdown-menu {
    display: block;
	background-color: #eee;
}
.nav-tabs > li {
    background-color: #c7c7c7c7;
}
.nav-tabs > li > a {
    color:#353535;
}
</style>

<div class="panel panel-info" style="margin-left: 20px;margin-right: 20px">
	<div class="panel-heading">
		<div class="panel-title"><span class="fa fa-wheelchair"></span> FOOT ASSESSMENT</div>
	</div>
	<div class="panel-body">
		<!-- tabs -->
		<div class="tabbable">
			<ul class="nav nav-tabs">
				<li class="dropdown <?=$tabsummary;?>">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-check-square" aria-hidden="true"></i> FOOT ASSESSMENT SUMMARY<span class="caret"></span></a>
					<ul class="dropdown-menu" style="width: 250px;">
					<li><?=Html::a('<i class="fa fa-check-square-o" aria-hidden="true"></i> OPD',['/foot/foot-assessment-summary-opd'])?></li>
					<li><?=Html::a('<i class="fa fa-check-square-o" aria-hidden="true"></i> IPD',['/foot/foot-assessment-summary-ipd'])?></li>
					</ul>
				</li>
				<!-- <li > -->
				<li class="<?=$tabcomplate;?>"><?=Html::a('<i class="fa fa-check-square" aria-hidden="true"></i>  FOOT ASSESSMENT RECORD COMPLATE',['/foot/foot-assessment-complate'])?></li>
				</li>
				<li class="dropdown <?=$tabfirst;?>">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-check-square" aria-hidden="true"></i> FOOT ULCER VISIT FIRST VISIT<span class="caret"></span></a>
					<ul class="dropdown-menu" style="width: 250px;">
					<li><?=Html::a('<i class="fa fa-check-square-o" aria-hidden="true"></i> OPD',['/foot/foot-ulcer-first-opd'])?></li>
					<li><?=Html::a('<i class="fa fa-check-square-o" aria-hidden="true"></i> IPD',['/foot/foot-ulcer-first-ipd'])?></li>
					</ul>
				</li>
				<li class="dropdown <?=$tabfu;?>">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-check-square" aria-hidden="true"></i> FOOT ULCER VISIT FU VISIT<span class="caret"></span></a>
					<ul class="dropdown-menu" style="width: 250px;">
					<li><?=Html::a('<i class="fa fa-check-square-o" aria-hidden="true"></i> OPD',['/foot/foot-ulcer-fu-opd'])?></li>
					<li><?=Html::a('<i class="fa fa-check-square-o" aria-hidden="true"></i> IPD',['/foot/foot-ulcer-fu-ipd'])?></li>
					</ul>
				</li>

			</ul>
			<div class="tab-content">

