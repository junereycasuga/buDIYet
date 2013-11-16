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
    	$myBudget = DiyBudgets::listAllUserBudget(Yii::app()->user->userId);
        $this->render('dashboard', array(
        	'myBudget'=>$myBudget,
        	'pages'=>$myBudget['pages'],
        	)
        );
    }

    public function actionSettings()
    {
    	// $model = User::model()->findByPk(Yii::app()->user->userId);

    	// if(isset($_POST['Users']))
    	$this->render('settings', array('model'=>$model));
    }
}