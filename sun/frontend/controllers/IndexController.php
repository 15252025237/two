<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
class IndexController extends Controller
{
	public $enableCsrfValidation = false;
	public $layout = 'aa.php';
	public function actionIndex()
	{
		return $this->render('index');
	}
}