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
      
      <div class="input-field col s12">
        <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
      </div>
        

        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'waves-effect waves-light btn red lighten-1' : 'waves-effect waves-light btn red lighten-1']) ?>
        </div>

      <?php ActiveForm::end(); ?>    
    </div>
  </div>
</div>
