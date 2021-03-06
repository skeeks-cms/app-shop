<?php
/**
 * @author Semenov Alexander <semenov@skeeks.com>
 * @link http://skeeks.com/
 * @copyright 2010 SkeekS (�����)
 * @date 06.03.2015
 */
use yii\helpers\Html;
use frontend\assets\AppAsset;
/* @var $this \yii\web\View */
/* @var $content string */
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" prefix="og: http://ogp.me/ns#">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <link rel="icon" href="/favicon.ico?v=<?= @filemtime(\Yii::getAlias('@app/web/favicon.ico'));?>"  type="image/x-icon" />
    <?php $this->head() ?>
</head>
<body class="smoothscroll enable-animation boxed" style="background: url('<?= AppAsset::getAssetUrl('img/bg/main-1.jpg')?>') center center no-repeat fixed">
    <?php $this->beginBody() ?>

		<!-- wrapper -->
		<div id="wrapper">


        <?= $this->render('@app/views/header'); ?>
            <?= $content; ?>
        <?= $this->render('@app/views/footer'); ?>

        </div>
		<!-- /wrapper -->


		<!-- SCROLL TO TOP -->
		<a href="#" id="toTop"></a>


		<!-- PRELOADER -->
		<!--<div id="preloader">
			<div class="inner">
				<span class="loader"></span>
			</div>
		</div>--><!-- /PRELOADER -->



    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>