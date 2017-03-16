<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\FrecuenciasOpciones;
use app\models\Acuerdos;
use app\models\Clasificacion;

/* @var $this yii\web\View */
/* @var $model app\models\Sometido */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="container">
    <?php $form = ActiveForm::begin(); ?>
        <div class="row">
                <div class="col-sm-8">
                    <h4><label>Indique la frecuencia con la cual solicita servicio a OPEI:</label></h4>
                        <div style = "padding-left: 3%">
                            <?= $form->field($model, 'frecuencia')->radio(['label' => 'Por primera vez', 'value' => FrecuenciasOpciones::POR_PRIMERA_VEZ])?>
                            <?= $form->field($model, 'frecuencia')->radio(['label' => 'Una vez al semestre', 'value' => FrecuenciasOpciones::UNA_VEZ_AL_SEMESTRE])?>
                            <?= $form->field($model, 'frecuencia')->radio(['label' => 'Varias veces al semestre', 'value' => FrecuenciasOpciones::VARIAS_VECES_AL_SEMESTRE])?>
                            <?= $form->field($model, 'frecuencia')->radio(['label' => 'Por primera vez', 'value' => FrecuenciasOpciones::ANUALMENTE])?>
                        </div>
                </div>
        </div>
        <div class="row">
            <div class="col-sm-9"> 
                <br>
                <h4><label>Indique cuán de acuerdo está con las siguientes premisas:</label></h4>
                <ul class="list-group">
                    <li class="list-group-item list-group-item-success">
                        <div class="row">
                            <div class="col-sm-4">
                                
                            </div>
                            <div class="col-sm-2">
                                Totalmente de acuerdo
                            </div>
                            <div class="col-sm-2">
                                De acuerdo
                            </div>
                            <div class="col-sm-2">
                                En desacuerdo
                            </div>
                            <div class="col-sm-2">
                                Totalmente en desacuerdo
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item list-group-item-success">
                        <div class="row">
                            <div class="col-sm-4">
                                1. El tiempo de procesar su solicitud fue razonable
                            </div>
                            <div class="col-sm-2">
                                <?= $form->field($model, 'respuesta_1')->radio(['label' => '', 'value' => FrecuenciasOpciones::POR_PRIMERA_VEZ])?>
                            </div>
                            <div class="col-sm-2">
                                <?= $form->field($model, 'respuesta_1')->radio(['label' => '', 'value' => FrecuenciasOpciones::UNA_VEZ_AL_SEMESTRE])?>
                            </div>
                            <div class="col-sm-2">
                                <?= $form->field($model, 'respuesta_1')->radio(['label' => '', 'value' => FrecuenciasOpciones::VARIAS_VECES_AL_SEMESTRE])?>
                            </div>
                            <div class="col-sm-2">
                                <?= $form->field($model, 'respuesta_1')->radio(['label' => '', 'value' => FrecuenciasOpciones::ANUALMENTE])?>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item list-group-item-success">
                        <div class="row">
                                <div class="col-sm-4">
                                    2. La información provista fue de utilidad
                                </div>
                                <div class="col-sm-2">
                                    <?= $form->field($model, 'respuesta_2')->radio(['label' => '', 'value' => FrecuenciasOpciones::POR_PRIMERA_VEZ])?>
                                </div>
                                <div class="col-sm-2">
                                    <?= $form->field($model, 'respuesta_2')->radio(['label' => '', 'value' => FrecuenciasOpciones::UNA_VEZ_AL_SEMESTRE])?>
                                </div>
                                <div class="col-sm-2">
                                    <?= $form->field($model, 'respuesta_2')->radio(['label' => '', 'value' => FrecuenciasOpciones::VARIAS_VECES_AL_SEMESTRE])?>
                                </div>
                                <div class="col-sm-2">
                                    <?= $form->field($model, 'respuesta_2')->radio(['label' => '', 'value' => FrecuenciasOpciones::ANUALMENTE])?>
                                </div>
                        </div>
                    </li>
                    <li class="list-group-item list-group-item-success">
                        <div class="row">
                                <div class="col-sm-4">
                                    3. La atención brindad por el personal fue profesional
                                </div>
                                <div class="col-sm-2">
                                    <?= $form->field($model, 'respuesta_3')->radio(['label' => '', 'value' => FrecuenciasOpciones::POR_PRIMERA_VEZ])?>
                                </div>
                                <div class="col-sm-2">
                                    <?= $form->field($model, 'respuesta_3')->radio(['label' => '', 'value' => FrecuenciasOpciones::UNA_VEZ_AL_SEMESTRE])?>
                                </div>
                                <div class="col-sm-2">
                                    <?= $form->field($model, 'respuesta_3')->radio(['label' => '', 'value' => FrecuenciasOpciones::VARIAS_VECES_AL_SEMESTRE])?>
                                </div>
                                <div class="col-sm-2">
                                    <?= $form->field($model, 'respuesta_3')->radio(['label' => '', 'value' => FrecuenciasOpciones::ANUALMENTE])?>
                                </div>
                        </div>
                    </li>
                    <li class="list-group-item list-group-item-success">
                        <div class="row">
                                <div class="col-sm-4">
                                    4. El formato de la solicitud de servicio es amigable (user friendly)
                                </div>
                                <div class="col-sm-2">
                                    <?= $form->field($model, 'respuesta_4')->radio(['label' => '', 'value' => FrecuenciasOpciones::POR_PRIMERA_VEZ])?>
                                </div>
                                <div class="col-sm-2">
                                    <?= $form->field($model, 'respuesta_4')->radio(['label' => '', 'value' => FrecuenciasOpciones::UNA_VEZ_AL_SEMESTRE])?>
                                </div>
                                <div class="col-sm-2">
                                    <?= $form->field($model, 'respuesta_4')->radio(['label' => '', 'value' => FrecuenciasOpciones::VARIAS_VECES_AL_SEMESTRE])?>
                                </div>
                                <div class="col-sm-2">
                                    <?= $form->field($model, 'respuesta_4')->radio(['label' => '', 'value' => FrecuenciasOpciones::ANUALMENTE])?>
                                </div>
                        </div>
                    </li>
                    <li class="list-group-item list-group-item-success">
                        <div class="row">
                                <div class="col-sm-4">
                                    5. En general, estoy satisfecho(a) con el servicio brindado por OPEI
                                </div>
                                <div class="col-sm-2">
                                    <?= $form->field($model, 'respuesta_5')->radio(['label' => '', 'value' => FrecuenciasOpciones::POR_PRIMERA_VEZ])?>
                                </div>
                                <div class="col-sm-2">
                                    <?= $form->field($model, 'respuesta_5')->radio(['label' => '', 'value' => FrecuenciasOpciones::UNA_VEZ_AL_SEMESTRE])?>
                                </div>
                                <div class="col-sm-2">
                                    <?= $form->field($model, 'respuesta_5')->radio(['label' => '', 'value' => FrecuenciasOpciones::VARIAS_VECES_AL_SEMESTRE])?>
                                </div>
                                <div class="col-sm-2">
                                    <?= $form->field($model, 'respuesta_5')->radio(['label' => '', 'value' => FrecuenciasOpciones::ANUALMENTE])?>
                                </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
                <div class="col-sm-8">
                    <h4><label>Clasificación de la persona que solicita el servicio:</label></h4>
                        <div style = "padding-left: 3%">
                            <?= $form->field($model, 'clasificacion')->radio(['label' => 'Personal docente', 'value' => FrecuenciasOpciones::POR_PRIMERA_VEZ])?>
                            <?= $form->field($model, 'clasificacion')->radio(['label' => 'Personal no docente', 'value' => FrecuenciasOpciones::UNA_VEZ_AL_SEMESTRE])?>
                            <?= $form->field($model, 'clasificacion')->radio(['label' => 'Estudiante', 'value' => FrecuenciasOpciones::VARIAS_VECES_AL_SEMESTRE])?>
                            <?= $form->field($model, 'clasificacion')->radio(['label' => 'Otro', 'value' => FrecuenciasOpciones::ANUALMENTE])?>
                        </div>
                </div>
        </div>
        <div class="row">
            <div class="col-sm-5">
                <h4><label>Sugerencias y recomendaciones:</label></h4>
                <?= $form->field($model, 'sugerencias_recomendaciones')->textarea(['rows' => 6])->label(false) ?>
            </div>
        </div>
    
    

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>
