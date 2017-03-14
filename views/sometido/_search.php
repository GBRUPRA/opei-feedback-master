<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SometidoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sometido-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'frecuencia') ?>

    <?= $form->field($model, 'respuesta_1') ?>

    <?= $form->field($model, 'respuesta_2') ?>

    <?= $form->field($model, 'respuesta_3') ?>

    <?php // echo $form->field($model, 'respuesta_4') ?>

    <?php // echo $form->field($model, 'respuesta_5') ?>

    <?php // echo $form->field($model, 'clasificacion') ?>

    <?php // echo $form->field($model, 'sugerencias_recomendaciones') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
