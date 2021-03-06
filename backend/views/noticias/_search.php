<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\NoticiasSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="noticias-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'imagem') ?>

    <?= $form->field($model, 'titulo') ?>

    <?= $form->field($model, 'texto') ?>

    <?= $form->field($model, 'dia') ?>

    <?php // echo $form->field($model, 'mes') ?>

    <div class="form-group">
        <?= Html::submitButton('Procurar', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
