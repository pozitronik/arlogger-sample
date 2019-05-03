<?php
declare(strict_types = 1);

use yii\grid\ActionColumn;
use yii\grid\SerialColumn;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var yii\web\View $this */
/* @var app\models\DataTypesSearch $searchModel */
/* @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Item types';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-types-index">

	<h1><?= Html::encode($this->title) ?></h1>

	<p>
		<?= Html::a('Create type', ['create'], ['class' => 'btn btn-success']) ?>
	</p>

	<?php // echo $this->render('_search', ['model' => $searchModel]); ?>

	<?= GridView::widget([
		'dataProvider' => $dataProvider,
		'filterModel' => $searchModel,
		'columns' => [
			['class' => SerialColumn::class],

			'id',
			'value',
			'deleted:boolean',

			['class' => ActionColumn::class],
		],
	]); ?>


</div>
