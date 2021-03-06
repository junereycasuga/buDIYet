<?php
	class DepartmentController extends Controller {

		public function actionBudget(){
			if(isset($_POST['diy_submit'])){

				if(isset($_POST['data_new_appro'])){
					$new_appro = $_POST['data_new_appro'];
				}else{
					$new_appro = NULL;
				}
				if(isset($_POST['data_auto_appro'])){
					$auto_appro = $_POST['data_auto_appro'];
				}else{
					$auto_appro = NULL;
				}
				if(isset($_POST['comment'])){
					$comment = $_POST['comment'];
				}else{
					$comment = NULL;
				}
				$save_data = DiyBudgets::saveDIY(Yii::app()->user->id,$new_appro,$auto_appro,$comment);
				$this->redirect('budget');
			}
			$date = date('Y');
			$gaa = Curl::dataBudget(null,null,null,null,$date);
			$dataAPI = Curl::dataTotal();

			foreach($dataAPI->data as $data){
				$gaa_total = str_replace(",","",$data->gaa_total);
				$new_appro = str_replace(",","",$data->new_appro_total);
			}
			$total_budget = $gaa_total + $new_appro;
			$auto = ($gaa != NULL)? $gaa->data{0}->auto_appro : NULL;
			$new = ($gaa != NULL)? $gaa->data{1}->new_appro : NULL;
			$total = ($dataAPI != NULL)? $dataAPI->data{0}->gaa_total : NULL;
			$this->render('budget',array(
					'auto_appro' => $auto,
					'new_appro' => $new,
					'total' => $total_budget,	
				));
		}
	}

?>
