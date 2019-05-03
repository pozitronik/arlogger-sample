<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DataTypesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Data Types';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-types-index">

	<h1><?= Html::encode($this->title) ?></h1>

	<p>
		<?= Html::a('Create Data Types', ['create'], ['class' => 'btn btn-success']) ?>
	</p>

	<?php // echo $this->render('_search', ['model' => $searchModel]); ?>

	<?= GridView::widget([
		'dataProvider' => $dataProvider,
		'filterModel' => $searchModel,
		'columns' => [
			['class' => 'yii\grid\SerialColumn'],

			'id',
			'value',
			'deleted',

			['class' => 'yii\grid\ActionColumn'],
		],
	]); ?>


</div>