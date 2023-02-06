<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TableGuru $model */

$this->title = 'Update Table Guru: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Table Gurus', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="table-guru-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
