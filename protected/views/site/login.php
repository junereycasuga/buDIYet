<?php 
$login = true;
if($login){ ?>
<style type="text/css">
  .navbar {
    display:none;
  }
</style>

  <?php } ?>
<center><h1 class="loading">Loading</h1></center>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>
<div class="login">
    <div class="login-container"><img alt="Logo login@2x" height="30" src="images/logo-login_2x.png" width="100">
      <form id="my_form">
        <div class="form-group">
          <div class="input-group"><span class="input-group-addon"><i class="icon-envelope"></i></span>
            <?php echo $form->textField($model,'username', array('class'=>'form-control','placeholder'=>"Username")); ?>
          </div>
          <?php echo $form->error($model,'username'); ?>
        </div>
        <div class="form-group">
          <div class="input-group"><span class="input-group-addon"><i class="icon-lock"></i></span>
            <?php echo $form->passwordField($model,'password', array('class'=>'form-control','placeholder'=>"Password")); ?>
          </div>
          <?php echo $form->error($model,'password'); ?>
        </div>
<!--         <div class="form-group">
          <label class="checkbox">
            <input type="checkbox">
            Remember me</label>
        </div> -->
        <?php echo CHtml::submitButton('Login', array('class'=>'btn btn-primary login-submit')); ?> 
      </form>
      <a href="index.html#">Forgot password?</a></div>
  </div>	
<script>
  $(document).ready(function () {
      var okToSubmit = false;
      $('form').submit(function (e) {
          if ( ! okToSubmit) {
              e.preventDefault();
              var $form = $(this);
              setTimeout(function () {
                  okToSubmit = true;
                  $('.loading').fadeOut(1000).text("Authenticating").fadeIn(100);
                  $form.submit();
              }, 2000);
          }
      });
  });
</script>

<?php $this->endWidget(); ?>
</div><!-- form -->
