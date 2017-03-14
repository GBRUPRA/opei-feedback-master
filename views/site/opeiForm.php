<?php
use yii\helpers\Html;
use yii\widgets\Activeform;
?>

<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'work_part_time')->radio(['label' => 'Option 1', 'value' => 0, 'uncheck' => null]) ?>
<?= $form->field($model, 'work_part_time')->radio(['label' => 'Option 2', 'value' => 1, 'uncheck' => null]) ?>
<?= $form->field($model, 'work_part_time')->radio(['label' => 'Option 3', 'value' => 2, 'uncheck' => null]) ?>
<?= $form->field($model, 'work_part_time')->radio(['label' => 'Option4', 'value' => 3, 'uncheck' => null]) ?>