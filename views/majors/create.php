<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Majors */

$this->title = 'Crear una carrera';
$this->params['breadcrumbs'][] = ['label' => 'Majors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="majors-create">
    <header class="indigo lighten-1 page-header">
      <div class="container">
        <h1 class="page-title white-text"><?= Html::encode($this->title) ?></h1>
      </div>
    </header>
    
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
