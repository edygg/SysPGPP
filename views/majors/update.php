<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Majors */

$this->title = 'Actualizar carrera: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Majors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="majors-update">

  <header class="indigo lighten-1 page-header">
    <div class="container">
      <h1 class="page-title white-text"><?= Html::encode($this->title) ?></h1>
    </div>
  </header>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
