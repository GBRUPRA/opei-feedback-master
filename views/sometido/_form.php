<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\FrecuenciasOpciones;
use app\models\Acuerdos;

/* @var $this yii\web\View */
/* @var $model app\models\Sometido */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="container">
  <h2>Basic List Group</h2>
    <div class="col-sm-8">
        <ul class="list-group">
            <li class="list-group-item"><label>Indique la frecuencia con la cual solicita servicio a OPEI</label> <?= Html::activeDropDownList($model, 'frecuencia',
                                                                                                              ArrayHelper::map(FrecuenciasOpciones::find()->all(), 'id', 'options')) ?></li>
            <li class="list-group-item"><label>El tiempo de procesar su solicitud fue razonable</label> <?= Html::activeDropDownList($model, 'respuesta_1',
                                                                                                            ArrayHelper::map(Acuerdos::find()->all(), 'id', 'options')) ?></li>
            <li class="list-group-item">Third item</li>
        </ul>
    </div>
</div>


<div class="container">

    <?php $form = ActiveForm::begin(); ?>
 
        <br><br>
        <div class="row">
            <div class="col-sm-6">
                
            </div>
            <div class="col-sm-6">
                
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
            
            </div>
            <div class="col-sm-6">
            
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
            
            </div>
            <div class="col-sm-6">
            
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
            
            </div>
            <div class="col-sm-6">
            
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
            
            </div>
            <div class="col-sm-6">
            
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
            
            </div>
            <div class="col-sm-6">
            
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
            
            </div>
            <div class="col-sm-6">
            
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
            
            </div>
            <div class="col-sm-6">
            
            </div>
        </div>

    <?= $form->field($model, 'respuesta_2')->textInput()->label('La información provista fue de utilidad') ?>

    <?= $form->field($model, 'respuesta_3')->textInput()->label('La atencion brindad por el personal de OPEI fue profesional') ?>

    <?= $form->field($model, 'respuesta_4')->textInput()->label('El formato de la solicitud de servicio es amigable (user friendly)') ?>

    <?= $form->field($model, 'respuesta_5')->textInput()->label('En general, estoy satisfecho(a) con el servicio brindado por OPEI') ?>

    <?= $form->field($model, 'clasificacion')->textInput(['maxlength' => true]) ?>

    <div class="row">
        <div class="col-sm-5">
            <?= $form->field($model, 'sugerencias_recomendaciones')->textarea(['rows' => 6]) ?>
        </div>
    </div>
    
    

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
