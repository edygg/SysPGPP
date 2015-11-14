<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'UNITEC';
?>

<div class="slider">
  <ul class="slides">
    <li>
      <?= Html::img('@web/img/img-1-dark.jpg') ?>
      <div class="caption center-align">
        <h3>Gestor de Prácticas Profesionales y Proyectos de Graduación</h3>
        <h5 class="light grey-text text-lighten-3">Un portafolio de opciones donde podrás elegir tu Práctica Profesional o tu Proyecto de Graduación.</h5>
      </div>
    </li>
    <li>
      <?= Html::img('@web/img/img-2-dark.jpg') ?>
      <div class="caption left-align">
        <h3>Más de #{contador} opciones para vos</h3>
        <h5 class="light grey-text text-lighten-3">Muchas empresas están dispuestas a ayudarte a cuminar tu etapa universitaria.</h5>
      </div>
    </li>
    <li>
      <?= Html::img('@web/img/img-1-dark.jpg') ?>
      <div class="caption center-align">
        <h3>Gestor de Prácticas Profesionales y Proyectos de Graduación</h3>
        <h5 class="light grey-text text-lighten-3">Un portafolio de opciones donde podrás elegir tu Práctica Profesional o tu Proyecto de Graduación</h5>
      </div>
    </li>
  </ul>
</div>

<div class="container">
  <div class="row">
    <div class="col s4">
      <div class="card">
        <div class="card-image">
          <img src="images/sample-1.jpg">
          <span class="card-title">Empresas</span>
        </div>
        <div class="card-content">
          <p>I am a very simple card. I am good at containing small bits of information.
            I am convenient because I require little markup to use effectively.</p>
        </div>
        <div class="card-action">
          <a href="#">This is a link</a>
        </div>
      </div>
    </div>

    <div class="col s4">
      <div class="card">
        <div class="card-image">
          <img src="images/sample-1.jpg">
          <span class="card-title">Estudiantes</span>
        </div>
        <div class="card-content">
          <p>I am a very simple card. I am good at containing small bits of information.
            I am convenient because I require little markup to use effectively.</p>
        </div>
        <div class="card-action">
          <a href="#">This is a link</a>
        </div>
      </div>
    </div>

    <div class="col s4">
      <div class="card">
        <div class="card-image">
          <img src="images/sample-1.jpg">
          <span class="card-title">Jefes y Asesores</span>
        </div>
        <div class="card-content">
          <p>I am a very simple card. I am good at containing small bits of information.
            I am convenient because I require little markup to use effectively.</p>
        </div>
        <div class="card-action">
          <a href="#">This is a link</a>
        </div>
      </div>
    </div>
  </div>
</div>
