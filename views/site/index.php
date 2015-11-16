<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;

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
      <?= Html::img('@web/img/img-3-dark.jpg') ?>
      <div class="caption right-align">
        <h3>Registrados más de #{contador} estudiantes</h3>
        <h5 class="light grey-text text-lighten-3">Asesores y jefes académicos serán tus guías en esta estapa de tu carrera.</h5>
      </div>
    </li>
  </ul>
</div>

<div class="container">
  <div class="row">
    <div class="col s12">
      <p class="flow-text center-align">¿Eres estudiante, representate de una empresa, jefe académico o asesor? Regístrate para poder usar el Gestor de Prácticas Profesionales y Proyectos de Graduación.</p>
      <div class="col s2 offset-s5"><?= Html::a('Registrate', Url::toRoute('site/registration-choice'), ['class' => 'waves-effect waves-light btn-large red lighten-1']) ?></div>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col m4 s12">
      <div class="card">
        <div class="card-image">
          <?= Html::img('@web/img/card-1-crop.jpg') ?>
          <span class="card-title">Empresas</span>
        </div>
        <div class="card-content">
          <p>Registra tu empresa para postular plazas donde estudiantes puedan realizar su práctica profesional o proyecto de graduación.</p>
        </div>
        <div class="card-action">
          <a href="#">Publica una propuesta</a>
        </div>
      </div>
    </div>

    <div class="col m4 s12">
      <div class="card">
        <div class="card-image">
          <?= Html::img('@web/img/card-2-crop.jpg') ?>
          <span class="card-title">Estudiantes</span>
        </div>
        <div class="card-content">
          <p>Puedes buscar el lugar donde realizarás tu práctica profesional o el proyecto de graduación, ver registros de asesoramiento y más.</p>
        </div>
        <div class="card-action">
          <a href="#">Entrar</a>
        </div>
      </div>
    </div>

    <div class="col m4 s12">
      <div class="card">
        <div class="card-image">
          <?= Html::img('@web/img/card-3-crop.jpg') ?>
          <span class="card-title">Jefes y Asesores</span>
        </div>
        <div class="card-content">
          <p>Conócelos, son los encargados de vincular los estudiantes con prácticas profesionales o proyectos de graduación.</p>
        </div>
        <div class="card-action">
          <a href="#">Ver perfiles</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="parallax-container">
  <div class="parallax"><?= Html::img('@web/img/parallax-1.jpg') ?></div>
</div>

<footer class="page-footer  red lighten-1">
  <div class="container">
    <div class="row">
      <div class="col l3 s12">
        <?= Html::img('@web/img/edilson-375x375.jpg', ['class' => 'responsive-img'] ) ?>
      </div>
      
      <div class="col l5 s12">
        <h5 class="white-text">Objetivo de la plataforma</h5>
        <p class="grey-text text-lighten-4">Desarrollar una aplicación web que pueda gestionar, almacenar y presentar a un estudiante un conjunto o portafolio de proyectos de graduación que empresas se han solicitado para su desarrollo, además poder obtener estadísticas e información relevante de todos los procesos de desarrollo de proyectos individualmente o en conjunto para facilitar la toma de decisiones a las autoridades universitarias.</p>
      </div>
      <div class="col l4 s12">
        <h5 class="white-text">UNITEC</h5>
        <ul>
          <li><a class="grey-text text-lighten-3" href="http://www.unitec.edu/">Página principal</a></li>
          <li><a class="grey-text text-lighten-3" href="http://www.unitec.edu/academicos/">Carreras</a></li>
          <li><a class="grey-text text-lighten-3" href="https://portal.unitec.edu/">Portal</a></li>
          <li><a class="grey-text text-lighten-3" href="http://www.unitec.edu/bcrai/">CRAI</a></li>
          <li><a class="grey-text text-lighten-3" href="http://www.unitec.edu/cap/">CAP</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="footer-copyright">
    <div class="container">
      © 2015 Todos los derechos reservados 
      <span class="grey-text text-lighten-4 right">Edilson F. González</span>
    </div>
  </div>
</footer>
