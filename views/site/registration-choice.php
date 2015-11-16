<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Registro';
?>

<header class="indigo lighten-1">
  <div class="container">
    <h1 class="page-title white-text"><?= $this->title ?></h1>
  </div>
</header>
  
<div class="container" id="sign-up-container">
  <div class="row">
    <div class="col m4 s12">
      <i class="large material-icons">account_balance</i>
      <h3>Empresas</h3>
      <p class="flow-text">Organizaciones o instituciones con o sin fines de lucro pueden realizar un perfil y colocar sus propuestas.</p>
      <?= Html::a('Registrate', '', ['class' => 'waves-effect waves-light btn btn-large red lighten-1']) ?>
    </div>
    <div class="col m4 s12">
      <i class="large material-icons">face</i>
      <h3>Estudiantes</h3>
      <p class="flow-text">Encontraras una amplia gama de opciones de prácticas y proyectos de acuerdo a lo que más te gusta.</p>
      <?= Html::a('Registrate', '', ['class' => 'waves-effect waves-light btn btn-large red lighten-1']) ?>
    </div>
    <div class="col m4 s12">
      <i class="large material-icons">school</i>
      <h3>Académicos</h3>
      <p class="flow-text">Autoridades que acompañan a los estudiantes en sus procesos de práctica o proyecto.</p>
      <?= Html::a('Registrate', '', ['class' => 'waves-effect waves-light btn btn-large red lighten-1']) ?>
    </div>
  </div>
</div>