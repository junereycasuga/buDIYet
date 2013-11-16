<?php

/**
 * 
 */
class UserController extends Controller
{
	public function filters()
	{
		return array(
			'accessControl',
		);
	}

	public function accessRules()
	{
		return array(
			array(
				'allow',
				'actions'=>array('dashboard'),
				'expression'=>function(){
					if(Yii::app()->user->isGuest){
						return false;
					}
					return true;
				}
			),

			array('deny'),
		);
	}

    public function actiondashboard()
    {
    	$myBudget = DiyBudgets::getCustomUserBudget(Yii::app()->user->userId);
        $this->render('dashboard', array(
        	'myBudget'=>$myBudget
        	)
        );
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