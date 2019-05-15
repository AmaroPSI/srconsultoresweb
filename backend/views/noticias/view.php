<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Noticias */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Noticias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="noticias-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Tem a certeza que pretende apagar esta notícia?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
                [
                    'attribute' => 'imagem',
                    'value' => 'http://localhost/srconsultoresweb/frontend/web/noticias'. '/' . $model->imagem,
                    'format' => ['image',['width' => '100', 'height' => '100']]
                ],
            'id',
            'titulo',
            'texto:ntext',
            'dia',
            'mes:ntext',
        ],
    ]) ?>

</div>
