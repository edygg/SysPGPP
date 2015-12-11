<?php
/*
 * This file is part of the Dektrium project.
 *
 * (c) Dektrium project <http://github.com/dektrium>
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */
use dektrium\user\widgets\Connect;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
/**
 * @var yii\web\View                   $this
 * @var dektrium\user\models\LoginForm $model
 * @var dektrium\user\Module           $module
 */
$this->title = Yii::t('user', 'Entrar');
$this->params['breadcrumbs'][] = $this->title;
?>

<header class="indigo lighten-1 page-header">
  <div class="container">
    <h1 class="page-title white-text"><?= Html::encode($this->title) ?></h1>
  </div>
</header>
<?= $this->render('/_alert', ['module' => Yii::$app->getModule('user')]) ?>
<div class="container">
  <div class="row">
    <div class="col s8">
        <?php $form = ActiveForm::begin([
          'id'                     => 'login-form',
          'enableAjaxValidation'   => true,
          'enableClientValidation' => false,
          'validateOnBlur'         => false,
          'validateOnType'         => false,
          'validateOnChange'       => false,
        ]) ?>
      <div class="input-field">
        <?= $form->field($model, 'login', ['inputOptions' => ['autofocus' => 'autofocus', 'tabindex' => '1']])->label('Usuario', ['class' => 'active']) ?>
      </div>
      <div class="input-field">
        <?= $form->field($model, 'password', ['inputOptions' => ['class' => 'form-control', 'tabindex' => '2']])->passwordInput()->label(Yii::t('user', 'Contraseña') . ($module->enablePasswordRecovery ? ' (' . Html::a(Yii::t('user', '¿Ha olvidado su contraseña?'), ['/user/recovery/request'], ['tabindex' => '5']) . ')' : '')) ?>
      </div>

        <?= $form->field($model, 'rememberMe')->checkbox(['tabindex' => '4'], false) ?>

        <?= Html::submitButton(Yii::t('user', 'Entrar'), ['class' => 'waves-effect waves-light btn red lighten-1', 'tabindex' => '3'], false) ?>

        <?php ActiveForm::end(); ?>

        <?php if ($module->enableConfirmation): ?>
        <p class="text-center">
          <?= Html::a(Yii::t('user', '¿No has recibido el mensaje de confirmación?'), ['/user/registration/resend']) ?>
        </p>
        <?php endif ?>
        <?php if ($module->enableRegistration): ?>
        <p class="text-center">
          <?= Html::a(Yii::t('user', '¿No tienes una cuenta? Regístrate'), ['/user/registration/register']) ?>
        </p>
        <?php endif ?>
        <?= Connect::widget([
        'baseAuthUrl' => ['/user/security/auth'],
      ]) ?>
    </div>
  </div>
</div>