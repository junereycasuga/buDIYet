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
    	$total = 0;
    	$gaa = Curl::getTotal();
    	$model = DiyBreakdown::getDiyDetails($id);	
    	foreach ($model as $key => $value) {
    		$total += $value['budget_amt'];
    	}
    	$voteup = DiyBudgets::model()->findByPk($id);
    	$voted = UserComments::checkUser($id);
    	$this->render('view',array('model'=>$model,'total'=>$gaa,'vote'=>$voteup,'voted'=>$voted,'customTotal'=>$total));
    }
    public function actionVoteup($id){
    	if(Yii::app()->user->isGuest){
    		$this->redirect(array('site/login'));
    	}
    	if(UserComments::checkUser($id)){
    		if(UserComments::Voteup($id,Yii::app()->user->id)){
				Yii::app()->user->setFlash('msg','Vote successfully');
                Yii::app()->user->setFlash('msgClass','alert alert-success');
    		}
    	}
    	$this->redirect(array('vote/view/'.$id));
    }
    public function actionVotedown($id){
    	if(Yii::app()->user->isGuest){
    		$this->redirect('site/login');
    	}
    	if(UserComments::checkUser($id)){
    		if(UserComments::Votedown($id,Yii::app()->user->id)){
				Yii::app()->user->setFlash('msg','Vote successfully');
                Yii::app()->user->setFlash('msgClass','alert alert-success');
    		}
    	}
    	$this->redirect(array('vote/view/'.$id));
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