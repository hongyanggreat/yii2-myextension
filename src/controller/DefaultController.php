<?php
/**
 * Created by Navatech.
 * @project yii2-user-role
 * @author  Phuong
 * @email   phuong17889[at]gmail.com
 * @date    26/02/2016
 * @time    11:50 PM
 */

namespace navatech\role\controllers;
use yii\web\Controller;
use yii\filters\VerbFilter;

/**
 * DefaultController implements the CRUD actions for Role model.
 */
class DefaultController extends Controller {

	/**
	 * @inheritdoc
	 */
	public function behaviors() {
		return [
			'verbs' => [
				'class'   => VerbFilter::className(),
				'actions' => [
					'delete' => ['POST'],
				],
			],
		];
	}

	public function actionIndex() {
		echo '<pre>';
		print_r("xxx");
		die;
	}

	public function actionCreate() {
		echo '<pre>';
		print_r("actionCreate");
		die;
	}

	public function actionUpdate($id) {
		echo '<pre>';
		print_r("actionUpdate");
		die;
	}

	protected function findModel($id) {
		echo '<pre>';
		print_r("findModel");
		die;
	}

	public function actionDelete($id) {
		echo '<pre>';
		print_r("actionDelete");
		die;
	}
}
