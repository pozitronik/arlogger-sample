<?php
declare(strict_types = 1);

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var yii\web\View $this */
/* @var app\models\DataTypes $model */
/* @var yii\widgets\ActiveForm $form */
?>

<div class="data-types-form">

	<?php $form = ActiveForm::begin(); ?>

	<?= $form->field($model, 'value')->textInput(['maxlength' => true]) ?>


	<div class="form-group">
		<?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
	</div>

	<?php ActiveForm::end(); ?>

</div>
