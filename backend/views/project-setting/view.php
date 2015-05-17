<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\ProjectSetting */

$this->title = $model->iPid;
$this->params['breadcrumbs'][] = ['label' => 'Project Settings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="project-setting-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->iPid], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->iPid], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'iPid',
            'szName',
            'szDomain',
            'szStartUrl:url',
            'szStartUrlReg:url',
            'szUrlReg:url',
            'szTitleXPath',
            'szDesc:ntext',
            'iTotalPage',
            'iCurrentPage',
            'iSuccessPage',
            'iFailPage',
            'iStatus',
            'dtModifyTime',
            'dtCreateTime',
        ],
    ]) ?>

</div>
