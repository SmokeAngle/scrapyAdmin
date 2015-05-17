<?php
use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
    <?php $this->beginBody() ?>
    <div class="wrap">
        <?php
            NavBar::begin([
                'brandLabel' => 'Scrapy 采集系统',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top',
                ],
            ]);
            $menuItems = [
                ['label' => 'Home', 'url' => ['/site/index']],
            ];
            if (Yii::$app->user->isGuest) {
                $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
            } else {
                $menuItems[] = [
                    'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                    'url' => ['/site/logout'],
                    'linkOptions' => ['data-method' => 'post']
                ];
            }
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => $menuItems,
            ]);
            NavBar::end();
        ?>

        <div class="container-fluid">
			<!-- left menu bof -->
				<div class='col-sm-3 padding-t-80'>
					<?php
						use webvimark\modules\UserManagement\components\GhostMenu;
						use webvimark\modules\UserManagement\UserManagementModule;

						echo GhostMenu::widget([
								'encodeLabels'=>false,
								'activateParents'=>true,
								'items' => [
									[ 'label' => 'Backend routes', 'items'=>UserManagementModule::menuItems() ],
									[ 'label' => 'Frontend routes',
									  'items'=>[
											['label'=>'Login', 'url'=>['/user-management/auth/login']],
											['label'=>'Logout', 'url'=>['/user-management/auth/logout']],
											['label'=>'Registration', 'url'=>['/user-management/auth/registration']],
											['label'=>'Change own password', 'url'=>['/user-management/auth/change-own-password']],
											['label'=>'Password recovery', 'url'=>['/user-management/auth/password-recovery']],
											['label'=>'E-mail confirmation', 'url'=>['/user-management/auth/confirm-email']],
										],
									],
								],
							]);
						?>
				</div>
			<!-- left menu eof -->
			<!--  right main bof -->
				<div class='col-sm-8'>
					<?= Breadcrumbs::widget([
			            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
			        ]) ?>
			        <?= $content ?>
				</div>
        	<!-- rigght main eof   -->
        </div>
    </div>

    <footer class="footer">
        <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>
        <p class="pull-right"><?= Yii::powered() ?></p>
        </div>
    </footer>

    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
