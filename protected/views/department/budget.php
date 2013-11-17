
<table class="table">
	<?php foreach ($new_appro as $key => $code) { ?>
		<tr class="toggle-programs">	
			<td colspan=""><?php  echo $code->department_code; ?> </td> 
			<td colspan=""><?php  echo $code->department_desc; ?> </td> 
			<td colspan=""><?php  echo $code->owner_code; ?> </td> 
			<td colspan=""><?php  echo $code->owner_desc; ?> </td> 
		</tr>
		<?php if($code->programs) { ?>
			<?php foreach ($code->programs as $key => $programs) { ?>
				<?php if($programs) { ?>
					<tr >
						<td width="100">-></td><td><?php echo $programs->program_desc;?></td><td><?php echo ($programs->budget->ps+$programs->budget->mooe+$programs->budget->co); ?></td>
					</tr>	
				<?php } ?>	
			<?php } ?>
		<?php } ?>
	<?php } ?>
</table>