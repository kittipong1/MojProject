<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\newssearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'News';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create News', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'news_id',
            'news_type_id',
            'user_id',
            'news_type_lang',
            'news_name',
            // 'news_explain',
            // 'news_image',
            // 'create_date',
            // 'modified_date',
            // 'news_view',
            // 'active',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
