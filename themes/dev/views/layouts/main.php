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
        <link rel="icon" href="./img/medico.ico" type="image/x-icon"/>
        <link rel="shortcut icon" href="./img/medico.ico" type="image/x-icon"/>
        <style>
            #user-display > a:link {
                color: white;
            }

            /* visited link */
            #user-display > a:visited {
                color: white;
            }

            /* mouse over link */
            #user-display > a:hover {
                color: whitesmoke;
            }

            /* selected link */
            #user-display > a:active {
                color: whitesmoke;
            }

            .breadcrumb > li + li:before {
                content: "|" !important;
            }

        </style>
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
                    <a class="navbar-brand" href="<?= Url::to(['/site/landing']) ?>"><img src="img\logo-02.png" height="30px" /></a>

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
                                    <input type="text" name="hn" id="hn" class="form-control"  placeholder="HN">
                                </div>
                                <?php if (empty($hn)): ?>
                                    <button type="submit" class="btn btn-default" ><i class="glyphicon glyphicon-search"></i></button>
                                <?php else: ?>
                                    <button type="submit" class="btn btn-default" disabled title='กรุณายกเลิกให้บริการคนปัจจุบัน'><i class="glyphicon glyphicon-search"></i></button>
                                <?php endif; ?>

                                <?php ActiveForm::end() ?>
                            </div>
                        </li>
                        <li>
                            <div style="padding-top: 8px;padding-left: 50px;color: white;">
                                <h4>
                                    <?= empty($this->params['pt_title']) ? '' : $this->params['pt_title'] ?>
                                    <?php if (!empty($hn)): ?>
                                        <?= Html::a('  <i class="fa fa-times" aria-hidden="true"></i>', ['/site/index'], ['style' => 'color:white', 'title' => 'ยกเลิกให้บริการ']) ?>
                                    <?php endif; ?>
                                </h4>

                            </div>
                        </li>

                    </ul>
                    <ul class="nav navbar-nav navbar-right" style="padding-right: 20px;">
                        <li><a data-toggle="modal" data-target="#myModal"><i class="fa fa-bell"  style="font-size:20px;color:white"></i><span class="badge badge-light">2</span></a></li>

                        <li style="padding-right: 30px;"><a data-toggle="modal" data-target="#myModal2"><i class="fa fa-user"  style="font-size:20px;color:white;"></i><span class="badge badge-light">5</span></a></li>

                        <li><img src="img\profile.png" height="40px" class="img-circle" style="padding-top: 6px;" /></li>
                        <li  style="padding-top: 5px;padding-left: 5px;">
                            <h4>
                                <div id='user-display'>
                                    <?php if (\Yii::$app->user->isGuest): ?>
                                        <?= Html::a('Login', ['/user/security/login']) ?>
                                    <?php else: ?>

                                        <?= Html::a(\Yii::$app->user->identity->username, ['/site/about']) ?>
                                    <?php endif; ?>
                                </div>
                            </h4>
                        </li>
                    </ul>
                </div><!--/.nav-collapse -->

            </div>
        </nav>

        <?php if (\Yii::$app->user->can('nurse')): //nurse ?>
            <?= $this->render('@app/components/_toolbar_nurse') ?>
        <?php elseif (\Yii::$app->user->can('doctor')): ?>
            <?= $this->render('@app/components/_toolbar_doctor_pcc') ?>
        <?php else : ?>
            <?= $this->render('@app/components/_toolbar_empty') ?>
        <?php endif; ?>



        <div  style="width: 99%; padding-top: 10px;margin: 0 auto;">

            <?php
//             echo Breadcrumbs::widget([
//                'homeLink' => FALSE,
//                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
//            ])
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

                        <h4><i class="fa fa-exclamation"></i> แพ้ยา : Penicillin</h4>
                        <h4><i class="fa fa-exclamation"></i> วัคซีน TT เข็ม 3 (11 พย.61)</h4>



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

                        <a href='#'><h4>นางมาลี ผลไม้กระป๋อง</h4></a>
                        <a href='#'><h4>นายสมชาย มีมาก</h4></a>
                        <a href='#'><h4>นส.สมศรี  สีสวย</h4></a>
                        <a href='#'><h4>นางเจริญ สุขมาก</h4></a>
                        <a href='#'><h4>ดช.สาธิต หลักไชย</h4></a>


                    </div>

                </div><!-- modal-content -->
            </div><!-- modal-dialog -->
        </div><!-- modal -->




        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
