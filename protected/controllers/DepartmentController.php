<?php
	class DepartmentController extends Controller {

		public function actionBudget(){
			if(isset($_POST['diy_submit'])){

				$new_appro = $_POST['data_new_appro'];
				$auto_appro = $_POST['data_auto_appro'];

				$save_data = DiyBudgets::saveDIY(1,$new_appro,$auto_appro);
				
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