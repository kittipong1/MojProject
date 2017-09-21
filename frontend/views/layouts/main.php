<?php

/* @var $this \yii\web\View */
/* @var $content string */
use yii\helpers\BaseUrl;
use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
Yii::setAlias('@km', Yii::$app->view->theme->baseUrl); 
Yii::setAlias('@kmpath', '@web');
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
  <title>E-learning & Knowledge Management</title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<header class="clearfix">
    <!-- Start Top Bar -->
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Start Contact Info -->
                    <ul class="list-inline pull-right" style="padding: 6px 0">
                        <li><a href="#"><i class="fa fa-lock"></i> ลงชื่อเข้าใช้งาน</a>
                        </li>
                        <li><a href="#"><i class="fa fa-plus"></i> สร้างบัญชีเข้าใช้งาน</a>
                        </li>
                    </ul>
                    <!-- End Contact Info -->
                </div>
            </div>
            <!-- .row -->
        </div>
        <!-- .container -->
    </div>
    <!-- .top-bar -->
    <!-- End Top Bar -->
    <!-- Start  Logo & Naviagtion  -->
    <div class="navbar navbar-default navbar-top" role="navigation" data-spy="affix" data-offset-top="50">
        <div class="container">
            <div class="navbar-header">
                <!-- Stat Toggle Nav Link For Mobiles -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <!-- End Toggle Nav Link For Mobiles -->
                <a class="navbar-brand" href="index.php">
              <img alt="" src="<?= Yii::getAlias('@kmpath');?>/images/logo.png">
            </a>
            </div>
            <div class="navbar-collapse collapse">
                <!-- Stat Search -->
                <div class="search-side">

                  <div class="btn-group dropdown">
                    <a class="btn btn-default btn-search show-search"><i class="fa fa-search"></i></a>
                    <div class="search-form">
                        <form autocomplete="off" role="search" method="get" class="searchform" action="#">
                            <input type="text" value="" name="s" id="s" placeholder="ค้นหา...">
                        </form>
                    </div>
                    <button type="button" class="btn btn-default btn-search dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <span class="caret"></span>
                      <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right" style="padding: 0;border: 2px solid #ccc;">
                      <li><a href="#" style="padding: 5px 14px;">ค้นหาแบบละเอียด</a></li>
                    </ul>
                  </div>
                </div>
                <!-- End Search -->
                <!-- Start Navigation List -->
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <?= Html::a('หน้าหลัก',Url::to(['site/index'])); ?>
                    </li>
                    <li>
                    <?= Html::a('เกี่ยวกับเรา',Url::to(['site/aboutus'])); ?>
                    </li>
                    <li>
                    <?= Html::a('กิจกรรม',Url::to(['site/gallery'])); ?>
                    </li>
                    <li>
                    <?= Html::a('ประชาสัมพันธ์',Url::to(['site/publicize'])); ?>
                    </li>
                     <li>
                     <?= Html::a('บทความ',Url::to(['site/article'])); ?>
                    </li>

                    <li>
                    <?= Html::a('E-magazine',Url::to(['site/emagazine'])); ?>
                    </li>
                    <!-- <li><a href="#">Contact</a></li> -->
                </ul>
                <!-- End Navigation List -->
            </div>
        </div>
        <!-- Mobile Menu Start -->
        <ul class="wpb-mobile-menu">
            <li>
            <?= Html::a('หน้าหลัก','index'); ?>
            </li>
            <li>
            <?= Html::a('องค์ความรู้','knowledge'); ?>
            </li>

        </ul>
    </div>
</header>
<div class="wrap">
   
    <div class="container">
      
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <?php include (__DIR__ .'../../include/footer.php'); ?>
    </div>
</footer>
  <?php include (__DIR__ .'../../include/bottom.php'); ?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
