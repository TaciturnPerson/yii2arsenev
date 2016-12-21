<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BlogSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Blogs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="blog-index">


    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php if (!Yii::$app->user->isGuest) {
            echo Html::a('Create Blog', ['create'], ['class' => 'btn btn-success']);
        } ?>
    </p>
    <?= ListView::widget([
    'dataProvider' => $dataProvider,
    'itemView' => '_blog',
    ]); ?>
</div>
