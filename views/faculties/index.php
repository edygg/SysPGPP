<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Facultades';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="faculties-index">

  <header class="indigo lighten-1">
    <div class="container">
      <h1 class="page-title white-text"><?= Html::encode($this->title) ?></h1>
    </div>
  </header>
  
  <div class="container">
    <div class="row">
      <div class="col s10 offset-s1">
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
                'id',
                'name',
                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]); ?>
      </div>
    </div>
  </div>
  
  <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
    <?= Html::a(Html::tag('i', 'add', ['class' => 'material-icons']), ['create'], ['class' => 'btn-floating btn-large waves-effect waves-light red']) ?>
  </div>
</div>