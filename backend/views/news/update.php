<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\news */

$this->title = 'Update News: ' . $model->news_id;
$this->params['breadcrumbs'][] = ['label' => 'News', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->news_id, 'url' => ['view', 'id' => $model->news_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="news-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
