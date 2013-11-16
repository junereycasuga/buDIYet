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
				$save_data = DiyBudgets::saveDIY(1,$new_appro,$auto_appro,$comment);
				$this->redirect('budget');
			}
			$date = date('Y');
			$gaa = Curl::dataBudget(null,null,null,null,$date);
			$dateAPI = Curl::dataTotal();
			$auto = ($gaa != NULL)? $gaa->data{0}->auto_appro : NULL;
			$new = ($gaa != NULL)? $gaa->data{1}->new_appro : NULL;
			$total = ($dateAPI != NULL)? $dateAPI->data{0}->gaa_total : NULL;
			$this->render('budget',array(
					'auto_appro' => $auto,
					'new_appro' => $new,
					'total' => $total,
				));
		}
	}

?>