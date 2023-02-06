<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Guru $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="guru-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'alamat')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'id_jenis_kelamin')->textInput() ?>

    <?= $form->field($model, 'id_kelas')->textInput() ?>

    <?= $form->field($model, 'no_hp')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>