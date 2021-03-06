<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use \app\helpers\ModelMapHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Country */

$this->title = 'Update student: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Students', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="country-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="country-form">

		<?php $form = ActiveForm::begin(); ?>

		<?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
		<?= $form->field($model, 'surname')->textInput(['maxlength' => true]) ?>
		<?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
		<?= $form->field($model, 'telephone')->textInput(['maxlength' => true]) ?>

		<?= $form->field($model, 'department_id')->widget(Select2::classname(), [
			'data'          => ModelMapHelper::getIdTitleMap(\app\models\Department::class),
			'language'      => 'en',
			'options'       => ['placeholder' => 'Select a state ...'],
			'pluginOptions' => [
			'allowClear' => true
			],
			])->label('Departament');
		?>
		

		<div class="form-group">
			<?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
		</div>

		<?php ActiveForm::end(); ?>

	</div>

</div>
