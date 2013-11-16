<!-- <div class="row-fluid">
	<div class="span12 header-top span12">
		<ul class="nav navbar-nav pull-right">
		    <li><a href="#">Home</a></li>
		    <li><a href="#about">About</a></li>
		    <li><a href="#contact">Contact</a></li>
		</ul>
	</div>
</div> -->
<script>
$(document).ready(function(){

	counter = 0;
	$(document).scroll(function(){
		$header = $('.header-top')
		if($(window).scrollTop()==0){
			$header.animate({'paddingTop':'50px',height:'150px'},'medium')
		}else if($(window).scrollTop()>=300){
			if(counter<=300){
				$header.animate({'paddingTop':'0px',height:'50px'},'medium')
			}
		}
		counter = $(window).scrollTop() ;
	})
})
</script>
