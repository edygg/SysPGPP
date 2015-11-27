<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Faculties;

/* @var $this yii\web\View */
/* @var $model app\models\Majors */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="majors-form">
  <div class="container">
    <div class="row">
      <?php $form = ActiveForm::begin(); ?>

      <div class="input-field col s12">
        <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
      </div>
      
      <div class="input-field col s12">
        <?= Html::activeDropDownList($model, 'faculty_id', ArrayHelper::map(Faculties::find()->all(), 'id', 'name')) ?>
        <?= Html::tag('label', 'Facultad') ?>
      </div>

      <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Guardar' : 'Actualizar', ['class' => $model->isNewRecord ? 'waves-effect waves-light btn red lighten-1' : 'waves-effect waves-light btn red lighten-1']) ?>
      </div>

      <?php ActiveForm::end(); ?>
    </div>
  </div>
</div>
