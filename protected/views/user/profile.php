<div class="row">
	<div class="col-md-4">
		<div class="widget-container fluid-height clearfix">
			<div class="widget-content padded">
				<div class="col-md-7">
					<img src="<?php echo Yii::app()->theme->baseUrl.'/library/images/avatar-male2-lg.png'; ?>" alt="" class="img col-md-12">
					<br>
					<br>
					<br>				
				</div>
				<div class="col-md-5">
					<?php echo $user->full_name; ?>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-8">
		<div class="widget-container scrollable list rating-widget">
			<div class="heading"><?php echo $user->full_name.'\'s National Budget'; ?></div>
			<div class="widget-content scrollbar">
				<ul>
					<?php foreach($budget['data'] as $budgets){ ?>
					<li>
						<div class="reviewer-info">
							<div class="pull-right">
								<span>
									<i class="icon-thumbs-up"></i>
									<span class="label label-info"><?php echo $budgets['likes']; ?></span>
								</span>&nbsp;&nbsp;&nbsp;
								<span>
									<i class="icon-thumbs-down"></i>
									<span class="label label-danger"><?php echo $budgets['dislikes']; ?></span>
								</span>
							</div>
							<a href="<?php echo $this->createUrl('vote/view', array('id'=>$budgets['id'])); ?>"><?php echo $budgets['full_name']; ?></a>
							<em> on <?php echo date('M d, Y', strtotime($budgets['date_created'])); ?></em>
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