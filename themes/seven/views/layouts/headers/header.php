<div class="navbar navbar-fixed-top">
	<div class="container-fluid top-bar">
		<div class="pull-right">
			<ul class="nav navbar-nav pull-right">
			<?php if(!Yii::app()->user->isGuest){ ?>
				<li class="dropdown user hidden-xs">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<img src="#" alt="" height="34" width="34">
						<?php echo Yii::app()->user->username ?> 
						<b class="caret"></b>
					</a>
					<ul class="dropdown-menu">
						<li><a href="#"><i class="icon-gear"></i>Settings</a></li>
						<li><a href="<?php echo Yii::app()->createUrl('site/logout'); ?>"><i class="icon-signout"></i>Logout</a></li>
					</ul>
				</li>
			<?php } else { ?>
				<li><a href="<?php echo Yii::app()->createUrl('login'); ?>">Login</a></li>
			<?php } ?>
			</ul>
		</div>
		<button class="navbar-toggle">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a href="#" class="logo"></a>
	</div>
	<div class="container-fluid main-nav cleafix">
		<div class="nav-collapse">
			<ul class="nav">
				<?php if(Yii::app()->user->isGuest){ ?>
				<li class="dashboard"><a href="<?php echo Yii::app()->createUrl('site/index'); ?>"><span></span> Home</a></li>
				<?php } else { ?>
				<li class="dashboard"><a href="<?php echo Yii::app()->createUrl('user/dashboard'); ?>"></a></li>
				<?php } ?>
				<li class="charts"><a href="<?php echo Yii::app()->createUrl('vote'); ?>"><span></span> DIY Budget</a></li>
			</ul>
		</div>
	</div>
</div>