<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'registration-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>
	<div class="row">
		<div class="well col-md-5 col-sm-10">
			<div class="form-group">
				<?php echo $form->labelEx($model,'username'); ?>
				<?php echo $form->textField($model,'username', array('class'=>'form-control')); ?>
				<?php echo $form->error($model,'username'); ?>
			</div>

			<div class="form-group">
				<?php echo $form->labelEx($model,'password'); ?>
				<?php echo $form->passwordField($model,'password', array('class'=>'form-control')); ?>
				<?php echo $form->error($model,'password'); ?>
			</div>

			<div class="form-group">
				<?php echo $form->labelEx($model,'first_name'); ?>
				<?php echo $form->textField($model,'first_name', array('class'=>'form-control')); ?>
				<?php echo $form->error($model,'first_name'); ?>
			</div>

			<div class="form-group">
				<?php echo $form->labelEx($model,'last_name'); ?>
				<?php echo $form->textField($model,'last_name', array('class'=>'form-control')); ?>
				<?php echo $form->error($model,'last_name'); ?>
			</div>

			<div class="form-group">
				<?php echo $form->labelEx($model,'email'); ?>
				<?php echo $form->textField($model,'email', array('class'=>'form-control')); ?>
				<?php echo $form->error($model,'email'); ?>
			</div>

			<div class="form-group">
				<?php echo CHtml::submitButton('Reigster',array('name'=>'btnRegister', 'class'=>'btn btn-primary')); ?>
			</div>
		</div>
	</div>

<?php $this->endWidget(); ?>