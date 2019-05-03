<?php
declare(strict_types = 1);

use yii\helpers\Html;

/* @var yii\web\View $this */
/* @var app\models\DataKinds $model */

$this->title = 'Update'.$model->name;
$this->params['breadcrumbs'][] = ['label' => 'Kinds', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="data-kinds-update">

	<h1><?= Html::encode($this->title) ?></h1>

	<?= $this->render('_form', [
		'model' => $model,
	]) ?>

</div>
