<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Faculties */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="faculties-form">
  
  <div class="container">
    <div class="row">
      <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'waves-effect waves-light btn red lighten-1' : 'waves-effect waves-light btn red lighten-1']) ?>
        </div>

      <?php ActiveForm::end(); ?>    
    </div>
  </div>
</div>
