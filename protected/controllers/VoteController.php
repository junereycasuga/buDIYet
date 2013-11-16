<?php

/**
 * 
 */
class VoteController extends Controller
{
    public function actionIndex()
    {
    	$model = DiyBudgets::listAll();
    	//Common::pre($model);true;

    	$this->render('index',array('model'=>$model,'pages'=>$model['pages']));   
    }

    public function actionView($id){
    	$gaa = Curl::getTotal();
    	$model = DiyBreakdown::getDiyDetails($id);
    	$this->render('view',array('model'=>$model,'total'=>$gaa));
    }

	// -----------------------------------------------------------
	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}