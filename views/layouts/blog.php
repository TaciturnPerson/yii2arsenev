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

<main class="container left-container">
    <div class="row">

        <div id="menu-target">
            <ul>
<!--                <li><i class="fa fa-home"></i><a href="--><?//= Url::to([
//                        'site/index'
//                    ]) ?><!--">Home</a></li>-->
                <li><i class="fa fa-user"></i><a href="<?= Url::to([
                        'site/index'
                    ]) ?>">Viktor Arsenev</a></li>
                <li><i class="fa fa-anchor"></i><a href="<?= Url::to([
                        'blog/index'
                    ]) ?>">Blog</a></li>
<!--                <li><i class="fa fa-star"></i><a href="favorites.html">Favorites</a></li>-->
                <li><i class="fa fa-paper-plane"></i><a href="<?= Url::to([
                        'site/contact'
                    ]) ?>">Contact</a></li>
            </ul>
            <hr>
<!--            <ul>-->
<!--                <li><i class="fa fa-file"></i><a href="post.html">Post Page</a></li>-->
<!--                <li><i class="fa fa-file"></i><a href="post-sidebar.html">Post with Sidebar</a></li>-->
<!---->
<!--                <li><i class="fa fa-home"></i><a href="alt-home.html">Alternate Home</a></li>-->
<!--                <li><i class="fa fa-image"></i><a href="category.html">Category Page</a></li>-->
<!--            </ul>-->
        </div>

        <section class="sidebar col-md-5 col-sm-12" style="background-image: url(/template/img/default-sidebar.jpg">

                    <span class="menu-trigger animated fadeInDown">
                        <span class="bar"></span>
                        <span class="bar"></span>
                        <span class="bar"></span>
                    </span>

            <div class="site-info">
                <div class="primary-info">
                    <h1><?= $this->title ?></h1>
                    <p>A minimal blogging theme to put your content on show. <a href="post.html">Look at the features.</a> </p>

                    <p>Content is king</p>
                </div>
                <div class="secondary-info">
                    <p>
                        <a class="btn btn-primary" href="#"><i class="fa fa-user-plus"></i>Join Our Newsletter</a>
                    </p>
                </div>
            </div>
        </section><!-- end sidebar -->

        <section class="col-md-7 col-sm-12 col-md-offset-5 main-content">

            <?= $content ?>

            <footer class="split-footer">
                <a href="post.html">About</a>
                <i class="link-spacer"></i>
                <a href="post.html">Writer 2015</a>
            </footer>

        </section><!-- main content -->

    </div> <!--/row -->

</main>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
