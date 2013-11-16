<div class="navbar navbar-fixed-top">
	<div class="container-fluid top-bar">
		<div class="pull-right">
			<ul class="nav navbar-nav pull-right">
			<?php if(!Yii::app()->user->isGuest){ ?>
				<li class="dropdown user hidden-xs">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<img src="<?php echo Yii::app()->theme->baseUrl.'/library/images/avatar-male2.png'; ?>" alt="" height="34" width="34">
						<?php echo Yii::app()->user->username ?> 
						<b class="caret"></b>
					</a>
					<ul class="dropdown-menu">
						<!-- <li><a href="<?php echo Yii::app()->createUrl('user/settings'); ?>"><i class="icon-gear"></i>Settings</a></li> -->
						<li><a href="<?php echo Yii::app()->createUrl('site/logout'); ?>"><i class="icon-signout"></i>Logout</a></li>
					</ul>
				</li>
			<?php } else { ?>
				<a href="<?php echo Yii::app()->createUrl('login'); ?>" class="btn btn-default-outline" style="margin-top: 5px;">
					Login / Register
				</a>
			<?php } ?>
			</ul>
		</div>
		<button class="navbar-toggle">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a href="<?php echo Yii::app()->createUrl('site/index'); ?>" class="logo">buDIYet</a>
	</div>
	<div class="container-fluid main-nav cleafix">
		<div class="nav-collapse">
			<ul class="nav">
				<?php if(Yii::app()->user->isGuest){ ?>
				<li class="dashboard"><a href="<?php echo Yii::app()->createUrl('site/index'); ?>"><span></span> Home</a></li>
				<?php } else { ?>
				<li class="dashboard"><a href="<?php echo Yii::app()->createUrl('user/dashboard'); ?>"><span></span>Dashboard</a></li>
				<?php } ?>
				<li class="charts"><a href="<?php echo Yii::app()->createUrl('vote'); ?>"><span></span> DIY Budget</a></li>
			</ul>
		</div>
	</div>
</div>