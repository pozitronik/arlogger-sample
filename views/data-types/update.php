<?php
declare(strict_types = 1);

use yii\helpers\Html;

/* @var yii\web\View $this */
/* @var app\models\DataTypes $model */

$this->title = 'Update Data Types: '.$model->value;
$this->params['breadcrumbs'][] = ['label' => 'Data Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="data-types-update">

	<h1><?= Html::encode($this->title) ?></h1>

	<?= $this->render('_form', [
		'model' => $model,
	]) ?>

</div>
