<div class="navbar navbar-fixed-top">
	<div class="container-fluid top-bar">
		<div class="pull-right">
			<?php if(!Yii::app()->user->isGuest){ ?>
			<ul class="nav navbar-nav pull-right">
				<li class="dropdown user hidden-xs">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<img src="#" alt="" height="34" width="34">
						<?php echo Yii::app()->user->username ?> 
						<b class="caret"></b>
					</a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo Yii::app()->createUrl('site/logout'); ?>">Logout</a></li>
					</ul>
					<?php } ?>
				</li>
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
				<li class="dashboard"><a href="index.html"><span></span> Home</a></li>
				<li class="charts"><a href="#"><span></span> DIY Budget</a></li>
			</ul>
		</div>
	</div>
</div>