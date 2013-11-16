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
				$save_data = DiyBudgets::saveDIY(1,$new_appro,$auto_appro);
				$this->redirect('budget');
			}
			$gaa = Curl::dataBudget(null,null,null,null,null);
			$auto = $gaa->data{0}->auto_appro;
			$new = $gaa->data{1}->new_appro;
			// Common::pre($auto,true);
			$this->render('budget',array(
					'model' => $gaa->data,
					'auto_appro' => $auto,
					'new_appro' => $new,
				));
		}
	}

?>