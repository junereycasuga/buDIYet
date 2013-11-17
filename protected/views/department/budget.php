<h3>New Appro</h3>
<div class="panel-group" id="accordion1">
	<?php foreach ($new_appro as $key => $code) { ?>
		<div class="panel panel-default">
		    <a data-toggle="collapse" data-parent="#accordion1" href="#collapse<?php echo $code->owner_code; ?>">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        	
					<b><?php  echo $code->department_desc." (".$code->department_code.")"; ?></b>
			<!-- <td colspan=""><?php  echo $code->department_desc; ?> </td>  -->
					 - <?php  echo $code->owner_code; ?>
			<!-- <td colspan=""><?php  echo $code->owner_desc; ?> </td> --> 
				
		      </h4>
		    </div>
		    </a>
		<?php if($code->programs) { ?>
			<div id="collapse<?php echo $code->owner_code; ?>" class="panel-collapse collapse">
      			<div class="panel-body">
					<?php foreach ($code->programs as $key => $programs) { ?>
						<?php if($programs) { ?>
							<?php echo $programs->program_desc;?>
							<br/>
							<?php echo ($programs->budget->ps+$programs->budget->mooe+$programs->budget->co); ?>
							
						<?php } ?>	
					<?php } ?>
				</div>
			</div>
		<?php } ?>
		</div>
	<?php } ?>
</div>
<h3>Auto Appro</h3>	
<div class="panel-group" id="accordion2">
	<?php foreach ($auto_appro as $key => $code) { ?>
		<div class="panel panel-default">
		    <a data-toggle="collapse" data-parent="#accordion2" href="#collapse<?php echo $code->owner_code; ?>">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        	
					<b><?php  echo $code->department_desc." (".$code->department_code.")"; ?></b>
			<!-- <td colspan=""><?php  echo $code->department_desc; ?> </td>  -->
					 - <?php  echo $code->owner_code; ?>
			<!-- <td colspan=""><?php  echo $code->owner_desc; ?> </td> --> 
				
		      </h4>
		    </div>
		    </a>
		<?php if($code->programs) { ?>
			<div id="collapse<?php echo $code->owner_code; ?>" class="panel-collapse collapse">
      			<div class="panel-body">
					<?php foreach ($code->programs as $key => $programs) { ?>
						<?php if($programs) { ?>
							<?php echo $programs->program_desc;?>
							<br/>
							<?php echo ($programs->budget->ps+$programs->budget->mooe+$programs->budget->co); ?>
							
						<?php } ?>	
					<?php } ?>
				</div>
			</div>
		<?php } ?>
		</div>
	<?php } ?>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		
	})
</script>
