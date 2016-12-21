<?php
use yii\helpers\Url;?>
<article class="post">
    <div class="post-preview col-xs-10 no-gutter">
        <h2><a href="<?= Url::to(['blog/view','id'=>$model->id])?>"><?= $model->title ?></a></h2>
        <p><?= $model->content ?></p>
    </div>
</article>