<?php

class ProjectsController extends Controller
{
	public function actionIndex(){
		$getBudget = Curl::dataBudget();
		//$this->render('index');
		Common::pre($getBudget);
		echo "test";
	}
}