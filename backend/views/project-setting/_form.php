<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ProjectSetting */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="project-setting-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'szName')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'szDomain')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'szStartUrl')->textInput(['maxlength' => 500]) ?>

    <?= $form->field($model, 'szStartUrlReg')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'szUrlReg')->textInput(['maxlength' => 500]) ?>

    <?= $form->field($model, 'szTitleXPath')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'szDesc')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'iTotalPage')->textInput() ?>

    <?= $form->field($model, 'iCurrentPage')->textInput() ?>

    <?= $form->field($model, 'iSuccessPage')->textInput() ?>

    <?= $form->field($model, 'iFailPage')->textInput() ?>

    <?= $form->field($model, 'iStatus')->textInput() ?>

    <?= $form->field($model, 'dtModifyTime')->textInput() ?>

    <?= $form->field($model, 'dtCreateTime')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
