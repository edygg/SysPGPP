<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Faculties */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Faculties', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $this->title, 'url' => ''];
?>
<div class="faculties-view">
  <header class="indigo lighten-1 page-header">
    <div class="container">
      <h1 class="page-title white-text"><?= Html::encode($this->title) ?></h1>
    </div>
  </header>

  <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
    <a class="btn-floating btn-large red">
      <i class="large material-icons">mode_edit</i>
    </a>
    <ul>
      <li>
        <?= Html::a(Html::tag('i', 'delete', ['class' => 'material-icons']), ['delete', 'id' => $model->id], [
            'class' => 'btn-floating red',
            'data' => [
                'confirm' => '¿Está seguro que desea eliminar este elemento?',
                'method' => 'post',
            ],
        ]) ?>
      </li>
      <li><?= Html::a(Html::tag('i', 'assignment', ['class' => 'material-icons']), ['update', 'id' => $model->id], ['class' => 'btn-floating blue']) ?></li>
    </ul>
  </div>
  
  <div class="container">
    <div class="row">
      <div class="col s8 offset-s2">
        <?= DetailView::widget([
            'model' => $model,
            'attributes' => [
                'name',
            ],
        ]) ?>
      </div>
    </div>
  </div>
</div>
