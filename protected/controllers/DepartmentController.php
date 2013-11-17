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
			//Common::pre($gaa);exit;
			$dateAPI = Curl::dataTotal();
			$auto = ($gaa != NULL)? $gaa->data{0}->auto_appro : NULL;
			$new = ($gaa != NULL)? $gaa->data{1}->new_appro : NULL;
			$subtotal_new = 0;
			$subtotal_auto = 0;
			//Common::pre($auto);exit;
			if($new){
				foreach ($new as $key => $code) {
					if($code->programs){
						foreach ($code->programs as $key => $programs) {
							$subtotal_new = $subtotal_new+($programs->budget->ps+$programs->budget->mooe+$programs->budget->co);
						}
					}
				}
			}
			if($auto){
				foreach ($auto as $key => $code) {
					if($code->programs){
						foreach ($code->programs as $key => $programs) {
							$subtotal_auto = $subtotal_auto+($programs->budget->ps+$programs->budget->mooe+$programs->budget->co);
						}
					}
				}	
			}
			

			$total = $subtotal_new+$subtotal_auto;
			
			$this->render('budget',array(
					'auto_appro' => $auto,
					'new_appro' => $new,
					'total' => $total,
				));
		}
	}

?>