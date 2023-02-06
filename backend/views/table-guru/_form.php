<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\TableGuru $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="table-guru-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'alamat')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'id_jeniskelamin')->textInput() ?>

    <?= $form->field($model, 'id_kelas')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
