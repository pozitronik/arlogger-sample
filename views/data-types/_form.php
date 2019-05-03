<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DataTypes */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="data-types-form">

	<?php $form = ActiveForm::begin(); ?>

	<?= $form->field($model, 'value')->textInput(['maxlength' => true]) ?>

	<?= $form->field($model, 'deleted')->textInput() ?>

	<div class="form-group">
		<?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
	</div>

	<?php ActiveForm::end(); ?>

</div>
