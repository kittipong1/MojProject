<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\bannersearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Banners';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="banner-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Banner', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],            [
              'attribute' => 'banner',
              'format' => 'html',
              'value' => function($model){
                return Html::img('../../../uploads/images/'.$model->ban_image);
              }
            ],

            // 'ban_id',
            // 'user_id',
            'ban_name',
            'ban_link:ntext',
            'ban_image',
            // 'create_date',
            // 'modified_date',
            'start_date',
            'end_date',
            // 'view',
            // 'ban_detail:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
