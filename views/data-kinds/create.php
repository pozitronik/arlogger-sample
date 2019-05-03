<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DataKinds */

$this->title = 'Create Data Kinds';
$this->params['breadcrumbs'][] = ['label' => 'Data Kinds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-kinds-create">

	<h1><?= Html::encode($this->title) ?></h1>

	<?= $this->render('_form', [
		'model' => $model,
	]) ?>

</div>
