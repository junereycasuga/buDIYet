<form name="frm" method="POST">
<div class="row">
	<div class="col-md-6">
		<h3>New General Appropriations</h3>
		<div class="panel-group" id="accordion1">
			<?php foreach ($new_appro as $key => $code) { ?>
				<div class="panel panel-default">
				    <div class="panel-heading">
				    <a data-toggle="collapse" data-parent="#accordion1" href="#collapse<?php echo $code->owner_code; ?>1">
				    	<h5 class="panel-title">	
							<b><?php  echo $code->department_desc." (".$code->department_code.")"; ?></b> - <?php  echo $code->owner_code; ?>
						</h5>
				    </a>
				    </div>
				<?php if($code->programs) { ?>
					<div id="collapse<?php echo $code->owner_code; ?>1" class="panel-collapse collapse">
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
											<input type="checkbox" name="data_new_appro[]" value="<?php echo $code->department_code."|".$code->owner_code."|".$programs->program_desc."|".($programs->budget->ps+$programs->budget->mooe+$programs->budget->co); ?>">
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
	<div class="col-md-6">
		<h3>Automatic Appropriations</h3>	
		<div class="panel-group" id="accordion2">
			<?php foreach ($auto_appro as $key => $code) { ?>
				<div class="panel panel-default">
					<div class="panel-heading">
				    <a data-toggle="collapse" data-parent="#accordion2" href="#collapse<?php echo $code->owner_code; ?>2">
				    	<h5 class="panel-title">
				        	<b><?php  echo $code->department_desc." (".$code->department_code.")"; ?></b> - <?php  echo $code->owner_code; ?>
						</h5>
				    </a>
				    </div>
				    <?php if($code->programs) { ?>
					<div id="collapse<?php echo $code->owner_code; ?>2" class="panel-collapse collapse">
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
											<input type="checkbox" name="data_auto_appro[]" value="<?php echo $code->department_code."|".$code->owner_code."|".$programs->program_desc."|".($programs->budget->ps+$programs->budget->mooe+$programs->budget->co); ?>">
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
</div>
<input type="submit" name="diy_submit" value="send">
</form>
<script type="text/javascript">
	$(document).ready(function(){
		
	});
</script>
<style>
.panel-title{
	font-size:14px !important;
}
.panel-body{
	max-height:200px;
	overflow:scroll;
}
</style>
