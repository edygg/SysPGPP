<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Faculties */

$this->title = 'Agregar Facultad';
$this->params['breadcrumbs'][] = ['label' => 'Faculties', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="faculties-create">

    <header class="indigo lighten-1">
      <div class="container">
        <h1 class="page-title white-text"><?= Html::encode($this->title) ?></h1>
      </div>
    </header>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>