<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Sometido */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Sometidos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sometido-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
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
            'id',
            'frecuencia',
            'respuesta_1',
            'respuesta_2',
            'respuesta_3',
            'respuesta_4',
            'respuesta_5',
            'clasificacion',
            'sugerencias_recomendaciones:ntext',
        ],
    ]) ?>

</div>
