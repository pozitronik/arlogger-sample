<?php
declare(strict_types = 1);

namespace app\controllers;

use Throwable;
use Yii;
use app\models\DataTypes;
use app\models\DataTypesSearch;
use yii\db\StaleObjectException;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DataTypesController implements the CRUD actions for DataTypes model.
 */
class DataTypesController extends Controller {
	/**
	 * {@inheritdoc}
	 */
	public function behaviors():array {
		return [
			'verbs' => [
				'class' => VerbFilter::class,
				'actions' => [
					'delete' => ['POST']
				]
			]
		];
	}

	/**
	 * Lists all DataTypes models.
	 * @return mixed
	 */
	public function actionIndex() {
		$searchModel = new DataTypesSearch();
		$dataProvider = $searchModel->search(Yii::$app->request->queryParams);

		return $this->render('index', compact('searchModel', 'dataProvider'));
	}

	/**
	 * Displays a single DataTypes model.
	 * @param integer $id
	 * @return mixed
	 * @throws NotFoundHttpException if the model cannot be found
	 */
	public function actionView($id) {
		return $this->render('view', [
			'model' => $this->findModel($id)
		]);
	}

	/**
	 * Creates a new DataTypes model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 * @return mixed
	 */
	public function actionCreate() {
		$model = new DataTypes();

		if ($model->load(Yii::$app->request->post()) && $model->save()) {
			return $this->redirect(['view', 'id' => $model->id]);
		}

		return $this->render('create', [
			'model' => $model
		]);
	}

	/**
	 * Updates an existing DataTypes model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id
	 * @return mixed
	 * @throws NotFoundHttpException if the model cannot be found
	 */
	public function actionUpdate($id) {
		$model = $this->findModel($id);

		if ($model->load(Yii::$app->request->post()) && $model->save()) {
			return $this->redirect(['view', 'id' => $model->id]);
		}

		return $this->render('update', [
			'model' => $model
		]);
	}

	/**
	 * Deletes an existing DataTypes model.
	 * If deletion is successful, the browser will be redirected to the 'index' page.
	 * @param integer $id
	 * @return mixed
	 * @throws NotFoundHttpException if the model cannot be found
	 * @throws Throwable
	 * @throws StaleObjectException
	 */
	public function actionDelete($id) {
		$this->findModel($id)->delete();

		return $this->redirect(['index']);
	}

	/**
	 * Finds the DataTypes model based on its primary key value.
	 * If the model is not found, a 404 HTTP exception will be thrown.
	 * @param integer $id
	 * @return DataTypes the loaded model
	 * @throws NotFoundHttpException if the model cannot be found
	 */
	protected function findModel($id):DataTypes {
		if (null !== ($model = DataTypes::findOne($id))) {
			return $model;
		}

		throw new NotFoundHttpException('The requested page does not exist.');
	}
}
