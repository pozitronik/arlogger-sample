<?php
declare(strict_types = 1);

use app\models\DataKinds;
use app\models\DataTypes;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var yii\web\View $this */
/* @var app\models\Data $model */
/* @var yii\widgets\ActiveForm $form */
?>

<div class="data-form">

	<?php $form = ActiveForm::begin(); ?>

	<?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

	<?= $form->field($model, 'type_id')->dropDownList(ArrayHelper::map(DataTypes::find()->all(), 'id', 'value')); ?>

	<?= $form->field($model, 'dataKinds')->checkboxList(ArrayHelper::map(DataKinds::find()->all(), 'id', 'name')); ?>

	<div class="form-group">
		<?= Html::submitButton($model->isNewRecord?'Save':'Update', ['class' => 'btn btn-success']) ?>
	</div>

	<?php ActiveForm::end(); ?>

</div>
