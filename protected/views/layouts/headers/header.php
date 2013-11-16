<!-- <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
		    </button>
			<a class="navbar-brand" href="#">WatchOut</a>
		</div>
		qwe
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav">
			    <li><a href="#">Home</a></li>
			    <li><a href="#about">About</a></li>
			    <li><a href="#contact">Contact</a></li>
			</ul>

			<ul class="nav navbar-nav navbar-right">
			  	<li><a href="<?php echo Yii::app()->createUrl('login'); ?>">Login</a></li>
			</ul>
		</div>
	</div>
</div> -->
<div class="row-fluid">
	<div class="span12 header-top span12">
		<ul class="nav navbar-nav pull-right">
		    <li><a href="#">Home</a></li>
		    <li><a href="#about">About</a></li>
		    <li><a href="#contact">Contact</a></li>
		</ul>
	</div>
</div>
<script>
$(document).ready(function(){

	counter = 0;
	$(document).scroll(function(){
		$header = $('.header-top')
		if($(window).scrollTop()==0){
			$header.animate({'paddingTop':'50px',height:'150px'},'medium')
		}else if($(window).scrollTop()>=500){
			if(counter<=500){
				$header.animate({'paddingTop':'0px',height:'50px'},'medium')
			}
		}
		counter = $(window).scrollTop() ;
	})
})
</script>
