<form name="frm" method="POST">
<div class="row">
	<h3>New Appro</h3>
	<div class="panel-group col-md-6" id="accordion1">
		<?php foreach ($new_appro as $key => $code) { ?>
			<div class="panel panel-default">

			    <div class="panel-heading">
			    <a data-toggle="collapse" data-parent="#accordion1" href="#collapse<?php echo $code->owner_code; ?>">
			      <h4 class="panel-title">
			        	
						<b><?php  echo $code->department_desc." (".$code->department_code.")"; ?></b>
						 - <?php  echo $code->owner_code; ?>
					
			      </h4>
			      </a>
			    </div>
			    
			<?php if($code->programs) { ?>
				<div id="collapse<?php echo $code->owner_code; ?>" class="panel-collapse collapse">
	      			<div class="panel-body">
						<?php foreach ($code->programs as $key => $programs) { ?>
							<?php if($programs) { ?>
								<div class="row">
									<div class="col-md-7">
										<i class="glyphicon glyphicon-chevron-right"></i>&nbsp;&nbsp;<?php echo $programs->program_desc;?>
									</div>
									<div class="col-md-4">
										Php <?php echo ($programs->budget->ps+$programs->budget->mooe+$programs->budget->co); ?>
									</div>
									<div class="col-md-1">
										<input type="checkbox" name="data_new_appro[<?php echo $code->owner_code; ?>]" value="<?php echo $code->department_code."|".$code->owner_code."|".$programs->program_desc."|".($programs->budget->ps+$programs->budget->mooe+$programs->budget->co); ?>">
									</div>
								</div>
							<?php } ?>	
						<?php } ?>
					</div>
				</div>
			<?php } ?>
			</div>
		<?php } ?>
	</div>

	<div class="col-md-4 col-md-offset-6" style="position:fixed !important;">
	
	</div>

</div>
<div class="row">
	<h3>Auto Appro</h3>	
	<div class="panel-group col-md-6" id="accordion2">
		<?php foreach ($auto_appro as $key => $code) { ?>
			<div class="panel panel-default">

			    <div class="panel-heading">
			    <a data-toggle="collapse" data-parent="#accordion2" href="#collapse<?php echo $code->owner_code; ?>">
			      <h4 class="panel-title">
			        	
						<b><?php  echo $code->department_desc." (".$code->department_code.")"; ?></b>
						 - <?php  echo $code->owner_code; ?>
					
			      </h4>
			      </a>
			    </div>
			    
			<?php if($code->programs) { ?>
				<div id="collapse<?php echo $code->owner_code; ?>" class="panel-collapse collapse">
	      			<div class="panel-body">
						<?php foreach ($code->programs as $key => $programs) { ?>
							<?php if($programs) { ?>
								<div class="row">
									<div class="col-md-7">
										<i class="glyphicon glyphicon-chevron-right"></i>&nbsp;&nbsp;<?php echo $programs->program_desc;?>
									</div>
									<div class="col-md-4">
										Php <?php echo ($programs->budget->ps+$programs->budget->mooe+$programs->budget->co); ?>
									</div>
									<div class="col-md-1">
										<input type="checkbox" name="data_auto_appro[<?php echo $code->owner_code; ?>]" value="<?php echo $code->department_code."|".$code->owner_code."|".$programs->program_desc."|".($programs->budget->ps+$programs->budget->mooe+$programs->budget->co); ?>">
									</div>
								</div>
							<?php } ?>	
						<?php } ?>
					</div>
				</div>
			<?php } ?>
			</div>
		<?php } ?>
	</div>
</div>
<input type="submit" name="diy_submit" value="send">
</form>
<script type="text/javascript">
	$(document).ready(function(){
		
	})
</script>
