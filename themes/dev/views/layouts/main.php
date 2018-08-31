<?php
/* @var $this \yii\web\View */
/* @var $content string */

//
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use app\assets\DevAsset;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use app\components\PatientHelper;

DevAsset::register($this);
\yii\bootstrap\BootstrapAsset::register($this);

$hn = PatientHelper::getCurrentHn();
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title>MedicoNG Dev</title>
        <?php $this->head() ?>
    </head>
    <body>
        <?php $this->beginBody() ?>

        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img src="img\logo-02.png" height="30px" /></a>

                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li>
                            <div style="padding-top: 10px">
                                <?php
                                $form = ActiveForm::begin([
                                            'method' => 'POST',
                                            'action' => Url::to(['/patient/search/hn']),
                                            'options' => ['class' => 'form-inline']
                                ]);
                                ?>
                                <div class="form-group">
                                    <input type="text" name="hn" id="hn" class="form-control" value="<?= $hn ?>" placeholder="HN">
                                </div>
                                <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>

                                <?php ActiveForm::end() ?>
                            </div>
                        </li>
                        <li>
                            <div style="padding-top: 8px;padding-left: 50px;color: white;"><h4><?= empty($this->params['pt_title']) ? '' : $this->params['pt_title'] ?></h4></div>
                        </li>

                    </ul>
                    <ul class="nav navbar-nav navbar-right" style="padding-right: 20px;">
                        <li><a data-toggle="modal" data-target="#myModal"><i class="fa fa-bell"  style="font-size:20px;color:white"></i><span class="badge badge-light">9</span></a></li>

                        <li style="padding-right: 30px;"><a data-toggle="modal" data-target="#myModal2"><i class="fa fa-user-o"  style="font-size:20px;color:white;"></i></a></li>

                        <li><img src="img\profile.png" height="40px" class="img-circle" style="padding-top: 6px;" /></li>
                        <li  style="padding-top: 5px;padding-left: 5px;"><h4>Dr.Kob</h4></li>
                    </ul>
                </div><!--/.nav-collapse -->

            </div>
        </nav>

        <?php if (1==1): ?>
            <?= $this->render('@app/components/_toolbar_nurse') ?>
        <?php endif; ?>



        <div  style="width: 99%; padding-top: 10px;margin: 0 auto;">

            <?=
            Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ])
            ?>

            <?php echo \yii2mod\notify\BootstrapNotify::widget(); ?>
            <?= $content ?>
        </div><!-- /.container -->

        <!-- Modal -->
        <div class="modal right fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Notification</h4>
                    </div>

                    <div class="modal-body">
                        <ul>
                            <li>1</li>
                            <li>2</li>
                            <li>3</li>
                            <li>4</li>
                            <li>5</li>
                        </ul>
                    </div>

                </div><!-- modal-content -->
            </div><!-- modal-dialog -->
        </div><!-- modal -->

        <!-- Modal -->
        <div class="modal right fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
            <div class="modal-dialog" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel2">Queue</h4>
                    </div>

                    <div class="modal-body">
                        <ul>
                            <li>1</li>
                            <li>2</li>
                            <li>3</li>
                            <li>4</li>
                            <li>5</li>
                        </ul>
                    </div>

                </div><!-- modal-content -->
            </div><!-- modal-dialog -->
        </div><!-- modal -->




        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
