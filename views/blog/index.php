<?php

use yii\helpers\Html;
use yii\grid\GridView;

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
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'author_id',
            'moderator_id',
            'title',
            'content:ntext',
            // 'preview_element',
            // 'created_at',
            // 'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
