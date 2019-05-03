<?php
declare(strict_types = 1);

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var yii\web\View $this */
/* @var app\models\DataTypesSearch $model */
/* @var yii\widgets\ActiveForm $form */
?>

<div class="data-types-search">

	<?php $form = ActiveForm::begin([
		'action' => ['index'],
		'method' => 'get',
	]); ?>

	<?= $form->field($model, 'id') ?>

	<?= $form->field($model, 'value') ?>

	<?= $form->field($model, 'deleted') ?>

	<div class="form-group">
		<?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
		<?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
	</div>

	<?php ActiveForm::end(); ?>

</div>
