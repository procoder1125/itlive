<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */
/* @var $model common\models\UserProfile */

$this->title = 'Update User Profile: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'User Profiles', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';


$data = [
    'not active' => 'not active',
    'active' => 'active',
    'graduate' => 'graduate',
];


?>
<div class="user-profile-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php $form = ActiveForm::begin()?>
        <?=$form->field($model, 'first')?>
        <?=$form->field($model, 'last')?>
        <?=$form->field($model, 'phone')?>
        <?=$form->field($model, 'description')->textarea()?>
        <?=$form->field($model, 'user_id')?>
        <?=$form->field($model, 'data')?>
        <?=$form->field($model, 'student_status')->dropDownList($data, [  'prompt'=>'- STATUS tanlang -', 'browser-default custom-select'])?>

        <button class= 'btn btn-success'>save</button>
    <?php activeForm::end()?>

</div>
