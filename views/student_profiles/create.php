<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\StudentProfiles */

$this->title = 'Create Student Profiles';
$this->params['breadcrumbs'][] = ['label' => 'Student Profiles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="student-profiles-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
