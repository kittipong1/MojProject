<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\news */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="news-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'news_type_id')->textInput() ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'news_type_lang')->textInput() ?>

    <?= $form->field($model, 'news_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'news_explain')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'news_image')->textInput() ?>

    <?= $form->field($model, 'create_date')->textInput() ?>

    <?= $form->field($model, 'modified_date')->textInput() ?>

    <?= $form->field($model, 'news_view')->textInput() ?>

    <?= $form->field($model, 'active')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
