<div class="form">
	<div class="login">
		<div class="login-container">
			<img src="#" alt="#" height="30" width="30">
			<?php $form=$this->beginWidget('CActiveForm', array(
				'id'=>'registration-form',
				'enableClientValidation'=>true,
				'clientOptions'=>array(
					'validateOnSubmit'=>true,
				),
			)); ?>
				<div class="form-group">
					<div class="input-group">
						<span class="input-group-addon"><i class="icon-envelope"></i></span>
						<?php echo $form->textField($model,'username', array('class'=>'form-control', 'placeholder'=>'Username')); ?>	
					</div>
					<?php echo $form->error($model,'username'); ?>
				</div>

				<div class="form-group">
					<div class="input-group">
						<span class="input-group-addon"><i class="icon-lock"></i></span>
						<?php echo $form->passwordField($model,'password', array('class'=>'form-control', 'placeholder'=>'Password')); ?>
					</div>
					<?php echo $form->error($model,'password'); ?>
				</div>

				<div class="form-group">
					<div class="input-group">
						<span class="input-group-addon"><i class="icon-envelope"></i></span>
						<?php echo $form->textField($model,'full_name', array('class'=>'form-control', 'placeholder'=>'Full Name')); ?>
					</div>
					<?php echo $form->error($model,'full_name'); ?>
				</div>

				<div class="form-group">
					<div class="input-group">
						<span class="input-group-addon"><i class="icon-envelope"></i></span>
						<?php echo $form->textField($model,'email', array('class'=>'form-control', 'placeholder'=>'Email Address')); ?>
					</div>
					<?php echo $form->error($model,'email'); ?>
				</div>

				<div class="form-group">
					<?php echo CHtml::submitButton('Register',array('name'=>'btnRegister', 'class'=>'btn btn-primary login-submit')); ?>
				</div>
			
			<?php $this->endWidget(); ?>
		</div>
	</div>
</div>