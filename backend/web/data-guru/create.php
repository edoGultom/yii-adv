<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Guru $model */

$this->title = 'Create Guru';
$this->params['breadcrumbs'][] = ['label' => 'Gurus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="guru-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
