<?php if($new_appro || $auto_appro){ ?>
	<div class="row">
		<div class="col-md-6">
			<div class="hidden-xs pie-chart1 pie-chart pie-number easyPieChart" data-percent="100" style="width: 50px; height: 50px; line-height: 50px;">
                100%
                <canvas width="50" height="50"></canvas>
            </div>
            <br/>
            <center>
            	<h1>National Budget</h1>
				<h1 class="natl">Php <?php echo $total; ?></h1>
			</center>
		</div>
		<div class="col-md-6">
			<div class="hidden-xs pie-chart1 pie-chart pie-number easyPieChart diy_pct" data-percent="0" style="width: 100px; height: 100px; line-height: 100px;">
                    0%
                  <canvas width="50" height="50"></canvas></div>
		</div>
		<center>
        	<h1>DIY Budget</h1>
			<h1 class="diy">Php 0</h1>
		</center>
	</div>
	<br/>
	<form name="frm" method="POST">
	<div class="row">
		<div class="col-lg-6">
			<div class="widget-container fluid-height">
				<div class="heading"><i class="icon-collapse"></i>New General Appropriations</div>
			</div>
			<div class="widget-content">
				<div class="white panel-group" id="accordion1">
					<?php foreach ($new_appro as $key => $code) { ?>
						<div class="panel">
						    <div class="panel-heading">
						    	<div class="panel-title">
						    		<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapse<?php echo $code->owner_code; ?>1">
						    		
									<b><?php  echo $code->department_desc." (".$code->department_code.")"; ?></b> - <?php  echo $code->owner_code; ?>
									</a>
								</div>
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
													<label>
													<input type="checkbox" name="data_new_appro[]" data-id="<?php echo ($programs->budget->ps+$programs->budget->mooe+$programs->budget->co); ?>" value="<?php echo $code->department_code."|".$code->owner_code."|".$programs->program_desc."|".($programs->budget->ps+$programs->budget->mooe+$programs->budget->co); ?>" class="task-input">
													<span class="task-checkbox"></span>
													</label>
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
		<div class="col-md-6">
			<div class="widget-container fluid-height">
				<div class="heading"><i class="icon-collapse"></i>New General Appropriations</div>
			</div>	
			<div class="white panel-group" id="accordion2">
				<?php foreach ($auto_appro as $key => $code) { ?>
					<div class="panel panel-default">
					    <div class="panel-heading">
					    	<div class="panel-title">
					    		<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse<?php echo $code->owner_code; ?>2">
								<b><?php  echo $code->department_desc." (".$code->department_code.")"; ?></b> - <?php  echo $code->owner_code; ?>
								</a>
							</div>
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
													<label>
													<input type="checkbox" name="data_new_appro[]" data-id="<?php echo ($programs->budget->ps+$programs->budget->mooe+$programs->budget->co); ?>" value="<?php echo $code->department_code."|".$code->owner_code."|".$programs->program_desc."|".($programs->budget->ps+$programs->budget->mooe+$programs->budget->co); ?>" class="task-input">
													<span class="task-checkbox"></span>
													</label>
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
	<div class="row">
		<div class="form-group">
		<textarea class="col-md-8 form-control" placeholder="Enter Your Comment Here"></textarea>
		</div>
	</div>
	<center>
	<input type="submit" name="diy_submit" class="btn btn-lg btn-primary post_btn" value="POST">
	</center>
	</form>
<?php }else{ ?>
	<div class="row">
		<div class="alert alert-danger col-md-12">
			Server failed to fetch data. Please try reloading the page.
	    </div>
    </div>
<?php } ?>
<script type="text/javascript">
	$(document).ready(function(){
		$totalBudget = 0;
		$('.task-input').click(function(){
			$ntlBudget = parseInt($('.natl').text());
			if($(this).is(':checked')){
				$totalBudget = $totalBudget+parseInt($(this).attr('data-id'));	
			}else{
				$totalBudget = $totalBudget-parseInt($(this).attr('data-id'));	
			}
			$percentage = ($totalBudget/$ntlBudget)*100;
			alert($percentage);
			$('.diy_pct').html($percentage+"%<canvas width='50' height='50'></canvas>");
		});
	});
</script>
<style>
.panel-body{
	max-height:300px;
	overflow-y:scroll;
}
.panel-body::-webkit-scrollbar {
    width: 6px;
}
.panel-body::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
}

.panel-body::-webkit-scrollbar-thumb {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.5); 
}
.white{
	background-color:white;
	border:2px solid #E6E6E6;
	border-top:none;
}
.post_btn{
	width:200px;
	margin-top:10px;
}
</style>
