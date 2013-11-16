<?php

class ProjectsController extends Controller
{
	public function actionIndex(){
		$type = "new_appro";
		$getBudget = Curl::dataBudget($type);
		//$this->render('index');
		Common::pre($getBudget);
	}
}