<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\image */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="image-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'image_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image')->textInput() ?>

    <?= $form->field($model, 'path')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'ref_id')->textInput() ?>

    <?= $form->field($model, 'sorting')->textInput() ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'create_date')->textInput() ?>

    <?= $form->field($model, 'modified_date')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
