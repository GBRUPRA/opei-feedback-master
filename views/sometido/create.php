<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Sometido */

$this->title = 'Create Sometido';
$this->params['breadcrumbs'][] = ['label' => 'Sometidos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sometido-create">

    <div class="panel panel-info">
        <div class="panel-heading">
            <h1><?= Html::encode($this->title) ?></h1>
        </div>
        <div class="panel-body">
            <?= $this->render('_form', [
                'model' => $model,
            ]) ?>
        </div>
    </div>
</div>
