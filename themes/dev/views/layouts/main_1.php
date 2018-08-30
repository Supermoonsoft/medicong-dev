<?php
/* @var $this \yii\web\View */
/* @var $content string */
//
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\DevAsset;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use app\components\PatientHelper;

DevAsset::register($this);

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

        <div class="wrap">
            <?php
            NavBar::begin([
                //'brandLabel' => Yii::$app->name,
                'brandLabel' => 'MedicoNG (Nurse)',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-custom navbar-fixed-top',
                ],
            ]);
            ?>
            <?php
            $form = ActiveForm::begin([
                        'method' => 'POST',
                        'action' => Url::to(['/patient/search/hn']),
                        'options' => ['class' => 'navbar-form navbar-left']
            ]);
            ?>
            <div class="form-group">
                <input type="text" name="hn" id="hn" class="form-control" value="<?= $hn ?>" placeholder="HN">
            </div>
            <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>

            <?php ActiveForm::end() ?>

            <div class="navbar-nav nav" style="padding-top: 8px;padding-left: 50px;color: white;">
                <li>
                    <h4><?= empty($this->params['pt_title']) ? '' : $this->params['pt_title'] ?></h4>
                </li>
            </div>

            <?php
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => [
                    //['label' => 'Home', 'url' => ['/site/index']],
                    ['label' => 'Visits', 'url' => ['/opdvisit/default/index']],
                    ['label' => 'Patients', 'url' => ['/newpatient/patient/index']],
                    Yii::$app->user->isGuest ? (
                            ['label' => 'Login', 'url' => ['/site/login']]
                            ) : (
                            '<li>'
                            . Html::beginForm(['/site/logout'], 'post')
                            . Html::submitButton(
                                    'Logout (' . Yii::$app->user->identity->username . ')', ['class' => 'btn btn-link logout']
                            )
                            . Html::endForm()
                            . '</li>'
                            )
                ],
            ]);
            NavBar::end();
            ?>

            <?= $this->render('@app/components/_toolbar_nurse') ?>

            <div  style="width: 99%; margin: 0 auto;">

                <?=
                Breadcrumbs::widget([
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ])
                ?>

                <?php echo \yii2mod\notify\BootstrapNotify::widget(); ?>
                <?= $content ?>
            </div>
        </div>



        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
