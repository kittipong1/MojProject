<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\web\view;


/* @var $this yii\web\View */
/* @var $model backend\models\Banner */
/* @var $form yii\widgets\ActiveForm */
$this->registerJs(" 
    $('#banner-start_date').datepicker({
      autoclose: true
    });

    $('#banner-end_date').datepicker({
      autoclose: true
    });
    ", View::POS_END, 'my-options');
?>

<div class="banner-form">

    <?php $form = ActiveForm::begin([
    'options' => ['enctype' => 'multipart/form-data']
  ]); ?>

    <?= $form->field($model, 'banner_img')->fileInput() ?>

    <?= $form->field($model, 'ban_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ban_link')->textarea(['rows' => 6]) ?>

    <h3>วันที่เริ่มใช้ - สิ้นสุดการใช้งาน</h3>
    <div class="container-fuild">
    <div class='col-md-6'>
        <div class="form-group">
            <div class='input-group date' id='banner-start_date'>
                <input type='text' class="form-control" name="Banner[start_date]"/>
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
        </div>
    </div>
    <div class='col-md-6'>
        <div class="form-group">
            <div class='input-group date' id='banner-end_date'>
                <input type='text' class="form-control" name="Banner[end_date]"/>
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
        </div>
    </div>
</div>

    <?= $form->field($model, 'ban_detail')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
