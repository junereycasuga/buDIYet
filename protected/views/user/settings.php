<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<div class="widget-container fluid-height clearfix">
			<div class="heading">Change Password</div>
			<div class="widget-content padded">
				<?php $form=$this->beginWidget('CActiveForm', array(
					'id'=>'settings-form',
					'enableClientValidation'=>true,
					'clientOptions'=>array(
						'validateOnSubmit'=>true,
					),
				)); ?>
				<div class="form-group">
					<?php echo $form->labelEx($model,'') ?>
				</div>
				<?php $this->endWidget(); ?>
			</div>
		</div>
	</div>
</div>