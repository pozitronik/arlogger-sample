<?php
declare(strict_types = 1);

use yii\grid\ActionColumn;
use yii\grid\SerialColumn;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DataSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'All items';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-index">

	<h1><?= Html::encode($this->title) ?></h1>

	<p>
		<?= Html::a('Create item', ['create'], ['class' => 'btn btn-success']) ?>
	</p>

	<?php // echo $this->render('_search', ['model' => $searchModel]); ?>

	<?= GridView::widget([
		'dataProvider' => $dataProvider,
		'filterModel' => $searchModel,
		'columns' => [
			[
				'class' => SerialColumn::class
			],
			'id',
			'name',
			'create_time',
			[
				'attribute' => 'type_id',
				'value' => function(\app\models\Data $model) {
					return $model->type_id??$model->dataType->value;
				}
			],
			'deleted:boolean',

			[
				'class' => ActionColumn::class
			],
		],
	]); ?>


</div>
