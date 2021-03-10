<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Teachers;
/* @var $this yii\web\View */
/* @var $model common\models\Kurslar */

$this->title = 'Create Kurslar';
$this->params['breadcrumbs'][] = ['label' => 'Kurslars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

$teachers = Teachers::find()->all();
$data = [];
foreach ($teachers as $teacher){
    $data[$teacher->id] = $teacher->last.' '.  $teacher->name;
}
?>
<div class="kurslar-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php $form = ActiveForm::begin();?>
        <?=$form->field($model, 'title')?>
        <?=$form->field($model, 'kurs_davomilik')->textInput(['type' => 'number'])?>
        <?=$form->field($model, 'description')->textarea()->label('Qisqa ma`lumot')?>
        <?=$form->field($model, 'foto')->fileInput()->label('Rasm kiriting')?>
        <?=$form->field($model, 'teacher_id')->dropdownList($data, ['browser-default custom-select'])?>

        <button class="btn btn-success"  name="">добавить</button>
    <?php ActiveForm::end();?>    
</div>
