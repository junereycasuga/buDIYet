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
		<div class="widget-container scrollable list rating-widget">
			<div class="heading">My National Budgets</div>
			<div class="widget-content scrollbar">
				<ul>
					<?php foreach($myBudget['data'] as $budget){ ?>
					<li>
						<div class="reviewer-info">
							<div class="pull-right">
								<span>
									<i class="icon-thumbs-up"></i>
									<span class="label label-primary"><?php echo $budget['likes']; ?></span>
								</span>&nbsp;&nbsp;&nbsp;
								<span>
									<i class="icon-thumbs-down"></i>
									<span class="label label-danger"><?php echo $budget['dislikes']; ?></span>
								</span>
							</div>
							<a href="<?php echo $this->createUrl('vote/view', array('id'=>$budget['id'])); ?>"><?php echo $budget['full_name']; ?></a>
							<em> on <?php echo date('M d, Y', strtotime($budget['date_created'])); ?></em>
							<div class="review-text">
								<blockquote><?php echo $budget['comment']; ?></blockquote>
							</div>
						</div>	
					</li>
					<?php } ?>
				</ul>
			</div>
		</div>
	</div>
</div>