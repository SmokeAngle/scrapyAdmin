<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\ProjectSetting */

$this->title = 'Update Project Setting: ' . ' ' . $model->iPid;
$this->params['breadcrumbs'][] = ['label' => 'Project Settings', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->iPid, 'url' => ['view', 'id' => $model->iPid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="project-setting-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
