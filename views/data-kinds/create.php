<?php
declare(strict_types = 1);

use yii\helpers\Html;

/* @var yii\web\View $this */
/* @var app\models\DataKinds $model */

$this->title = 'Create item kind';
$this->params['breadcrumbs'][] = ['label' => 'Kinds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-kinds-create">

	<h1><?= Html::encode($this->title) ?></h1>

	<?= $this->render('_form', [
		'model' => $model,
	]) ?>

</div>
