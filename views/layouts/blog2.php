<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\BlogAsset;
use app\widgets\Alert;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;

BlogAsset::register($this);
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body>
<?php $this->beginBody() ?>
<header class="hero-image" role="banner" style="background-image: url(/template/img/default-single-hero.jpg);">
    <span class="menu-trigger animated fadeInDown">
                        <span class="bar"></span>
                        <span class="bar"></span>
                        <span class="bar"></span>
                    </span>


    </div>
</header>
<main class="container">
    <div class="row">

       <div class="col-xs-12 single-content">

            <h1>this is blog2 layout</h1>

            <?= $content ?>

       </div><!-- main content -->

    </div> <!--/row -->

</main>
<footer class="single">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6">
                <div class="category-list">
                    <p>Published <span>14th May 2015</span></p>
                    <p><a href="#">James Reddy</a> in <a href="#">Storytime</a></p>
                </div>
            </div><!-- end col -->
        </div><!-- end row -->
    </div>

</footer>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>


