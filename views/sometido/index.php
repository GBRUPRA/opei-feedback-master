<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SometidoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sometidos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sometido-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Sometido', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'frecuencia',
            'respuesta_1',
            'respuesta_2',
            'respuesta_3',
            // 'respuesta_4',
            // 'respuesta_5',
            // 'clasificacion',
            // 'sugerencias_recomendaciones:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
