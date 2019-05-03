<?php
declare(strict_types = 1);

use yii\helpers\Html;

/* @var yii\web\View $this */
/* @var app\models\DataTypes $model */

$this->title = 'Create item type';
$this->params['breadcrumbs'][] = ['label' => 'Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-types-create">

	<h1><?= Html::encode($this->title) ?></h1>

	<?= $this->render('_form', [
		'model' => $model
	]) ?>

</div>
