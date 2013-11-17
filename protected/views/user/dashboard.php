<div class="row">
	<div class="col-md-4">
		<div class="widget-container fluid-height clearfix">
			<div class="heading">My Profile</div>
			<div class="widget-content padded">
				<div class="col-md-7">
					<img src="<?php echo Yii::app()->theme->baseUrl.'/library/images/avatar-male2-lg.png'; ?>"  alt="" class="img col-md-12">
					<br>
					<br>
					<br>
				</div>
				<div class="col-md-5">
					<?php echo Yii::app()->user->userFullname; ?>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-8">
		<div class="widget-container fluid-height clearfix">
			<div class="heading">My National Budgets</div>
			<div class="widget-content padded">
				<ul>
				<?php foreach($myBudget as $budget){ ?>
					<?php 
					$details = DiyBreakdown::getDiyDetails($budget['id']);
					foreach($details as $value){
					?>
					<li>
						<div class="reviewer-info">
							<a href="#"><?php echo $value['project_name']; ?></a>
						</div>
						<div class="reviewer-text">
							
						</div>
					</li>
					<?php } ?>
				<?php } ?>
				</ul>
			</div>
		</div>
	</div>
</div>