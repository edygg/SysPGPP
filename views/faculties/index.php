<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Breadcrumbs;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Facultades';
$this->params['breadcrumbs'][] = ['label' => $this->title, 'url' => ''];
?>
<div class="faculties-index">
  <header class="indigo lighten-1 page-header">
    <div class="container">
      <h1 class="page-title white-text"><?= Html::encode($this->title) ?></h1>
      <br><br>
    </div>
  </header>
  
  <div class="container">
    <div class="row">
      <div class="col s10 offset-s1">
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
                'name',
                [
                  'class' => 'yii\grid\ActionColumn', 
                  'buttons' => [
                    'update' => function($url, $model) {
                      return Html::a(Html::tag('i', 'mode_edit', ['class' => 'material-icons']), $url);  
                    },
                    'view' => function($url, $model) {
                      return Html::a(Html::tag('i', 'remove_red_eye', ['class' => 'material-icons amber-text']), $url);
                    },
                    'delete' => function($url, $model) {
                      return Html::a(Html::tag('i', 'delete', ['class' => 'material-icons red-text']), $url, ['data' => ['confirm' => '¿Está seguro que desea eliminar el elemento?', 'method' => 'post']]);
                    },
                  ],
                ],
            ],
            'tableOptions' => [ 'class' => 'striped' ]
        ]); ?>
      </div>
    </div>
  </div>
  
  <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
    <?= Html::a(Html::tag('i', 'add', ['class' => 'material-icons']), ['create'], ['class' => 'btn-floating btn-large waves-effect waves-light red']) ?>
  </div>
</div>
