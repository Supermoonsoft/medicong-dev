<?php
use yii\helpers\Html;
// $this->title = 'ULCER VISIT FIRST VISIT IPD';
// $this->params['breadcrumbs'][] = ['label' => 'FOOT', 'url' => ['/foot/default/index']];
// $this->params['breadcrumbs'][] = ['label' => 'SUMMARY-OPD', 'url' => ['/foot/foot-assessment-summary-opd']];
// $this->params['breadcrumbs'][] = ['label' => 'SUMMARY-IPD', 'url' => ['/foot/foot-assessment-summary-ipd']];
// $this->params['breadcrumbs'][] = ['label' => 'COMPLATE', 'url' => ['/foot/foot-assessment-complate']];
// $this->params['breadcrumbs'][] = ['label' => 'ULCER VISIT FIRST VISIT OPD', 'url' => ['/foot/foot-ulcer-first-opd']];
// $this->params['breadcrumbs'][] = ['label' => 'ULCER VISIT FIRST VISIT IPD', 'url' => ['/foot/foot-ulcer-first-ipd']];
// $this->params['breadcrumbs'][] = ['label' => 'ULCER VISIT FU VISIT OPD', 'url' => ['/foot/foot-ulcer-fu-opd']];
// $this->params['breadcrumbs'][] = ['label' => 'ULCER VISIT FU VISIT IPD', 'url' => ['/foot/foot-ulcer-fu-ipd']];
// $this->params['breadcrumbs'][] = $this->title;


?>
<style>
/* .navbar-default .navbar-nav > li.dropdown:hover > a, 
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
} */
.nav-tabs > li.active > a, .nav-tabs > li.active > a:hover, .nav-tabs > li.active > a:focus {
    background-color: #eee;
}
</style>

<div class="panel panel-info" style="margin-left: 20px;margin-right: 20px">
	<div class="panel-heading">
		<div class="panel-title"><i class="fas fa-wheelchair"></i> FOOT ASSESSMENT</div>
	</div>
	<div class="panel-body">
		<!-- tabs -->
		<div class="tabbable">
			<ul class="nav nav-tabs">
				<!-- <li class="dropdown <?php //$tabsummary;?>"> -->
					<!-- <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-check-square" aria-hidden="true"></i> FOOT ASSESSMENT SUMMARY<span class="caret"></span></a> -->
					<!-- <ul class="dropdown-menu" style="width: 250px;"> -->
					<li class="<?=$tabsummary_opd;?>"><?=Html::a('ASSESSMENT SUMMARY OPD',['/foot/foot-assessment-summary-opd'])?></li>
					<li class="<?=$tabsummary_ipd;?>"><?=Html::a('ASSESSMENT SUMMARY IPD',['/foot/foot-assessment-summary-ipd'])?></li>
					<!-- </ul> -->
				<!-- </li> -->
				<!-- <li > -->
				<li class="<?=$tabcomplate;?>"><?=Html::a('ASSESSMENT RECORD COMPLATE',['/foot/foot-assessment-complate'])?></li>
				</li>
				<!-- <li class="dropdown <?php//$tabfirst;?>"> -->
					<!-- <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-check-square" aria-hidden="true"></i> FOOT ULCER VISIT FIRST VISIT<span class="caret"></span></a> -->
					<!-- <ul class="dropdown-menu" style="width: 250px;"> -->
					<li class="<?=$tabfirst_opd;?>"><?=Html::a('ULCER VISIT FIRST VISIT OPD',['/foot/foot-ulcer-first-opd'])?></li>
					<li class="<?=$tabfirst_ipd;?>"><?=Html::a('ULCER VISIT FIRST VISIT IPD',['/foot/foot-ulcer-first-ipd'])?></li>
					<!-- </ul> -->
				<!-- </li> -->
				<!-- <li class="dropdown <?php//$tabfu;?>"> -->
					<!-- <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-check-square" aria-hidden="true"></i> FOOT ULCER VISIT FU VISIT<span class="caret"></span></a> -->
					<!-- <ul class="dropdown-menu" style="width: 250px;"> -->
					<li class="<?=$tabfu_opd;?>"><?=Html::a('ULCER VISIT FU VISIT OPD',['/foot/foot-ulcer-fu-opd'])?></li>
					<li class="<?=$tabfu_ipd;?>"><?=Html::a('ULCER VISIT FU VISIT IPD',['/foot/foot-ulcer-fu-ipd'])?></li>
					<!-- </ul> -->
				<!-- </li> -->

			</ul>
			<div class="tab-content">

