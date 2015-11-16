<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Faculties */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Faculties', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="faculties-view">
  
  <header class="indigo lighten-1">
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
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
      </li>
      <li><?= Html::a(Html::tag('i', 'assignment', ['class' => 'material-icons']), ['update', 'id' => $model->id], ['class' => 'btn-floating blue']) ?></li>
    </ul>
  </div>
  
  <div class="container">
    <div class="row">
      <?= DetailView::widget([
          'model' => $model,
          'attributes' => [
              'id',
              'name',
          ],
      ]) ?>
    </div>
  </div>
</div>
