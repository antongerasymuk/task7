<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use \app\helpers\ModelMapHelper;
/* @var $this yii\web\View */
/* @var $model app\models\Country */

$this->title = 'Update University: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Countries', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="country-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="country-form">

    	<?php $form = ActiveForm::begin(); ?>

    	<?= $form->field($model, 'code')->textInput(['maxlength' => true]) ?>

    	<?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    	<?= $form->field($model, 'population')->textInput() ?>

    	<div class="form-group">
    		<?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    	</div>

    	<?php ActiveForm::end(); ?>

    </div>

</div>
