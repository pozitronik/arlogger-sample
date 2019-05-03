<?php
declare(strict_types = 1);

use yii\grid\SerialColumn;
use yii\grid\ActionColumn;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DataKindsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kinds';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-kinds-index">

	<h1><?= Html::encode($this->title) ?></h1>

	<p>
		<?= Html::a('Create Data Kinds', ['create'], ['class' => 'btn btn-success']) ?>
	</p>

	<?php // echo $this->render('_search', ['model' => $searchModel]); ?>

	<?= GridView::widget([
		'dataProvider' => $dataProvider,
		'filterModel' => $searchModel,
		'columns' => [
			['class' => SerialColumn::class],

			'id',
			'name',
			'main:boolean',
			'deleted:boolean',

			['class' => ActionColumn::class],
		],
	]); ?>


</div>
