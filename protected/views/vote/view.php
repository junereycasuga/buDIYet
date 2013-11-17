<div class="row">
	<div class="col-lg-6">
		<div class="col-lg-12">
          <div class="widget-container fluid-height">
            <div class="heading"><i class="icon-collapse"></i>Budget Comparison </div>
            <div class="widget-content">
            		<center><div id="divForGraph"></div></center>
            		<?php if($voted){?>
            		<hr>
            		<center><a href="<?php echo $this->createUrl('vote/voteup',array('id'=>$_GET['id']));?>" class="btn btn-info"><i class="icon-thumbs-up-alt"></i>Vote up</a><a href="<?php echo $this->createUrl('vote/votedown',array('id'=>$_GET['id']));?>" class="btn btn-info"><i class="icon-thumbs-down-alt"></i>Vote down</a></center>
	         		<?php }else{echo '<br>';} ?>
	         		<!-- AddThis Button BEGIN -->
					<br><div class="addthis_toolbox addthis_default_style addthis_32x32_style" style="margin-left: 25%;">
					<a class="addthis_button_preferred_1" addthis:url="<?php echo $this->createAbsoluteUrl('vote/'.$_GET['id']) ;?>" addthis:description="Android Of The Philppines Mabuhay! Special Edition Industry "></a>
					<a class="addthis_button_preferred_2"></a>
					<a class="addthis_button_preferred_3"></a>
					<a class="addthis_button_preferred_4"></a>
					<a class="addthis_button_compact"></a>
					<a class="addthis_counter addthis_bubble_style"></a>
					</div>
					<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=xa-52882ad963199de8"></script>
					<!-- AddThis Button END -->
	          </div> 
	        </div>
		</div>
	</div>
	<div class="col-lg-6">
		<div class="col-lg-12">
          <div class="widget-container fluid-height">
            <div class="heading"><i class="icon-collapse"></i>Programs		<div class="pull-right"> <span class="text-info"><i class="icon-thumbs-up-alt"></i><?php echo number_format($vote['likes']);?>	</span><span class="text-error"><i class="icon-thumbs-down-alt"></i><?php echo number_format($vote['dislikes']);?>	</span></div></div>
            <div class="widget-content">
              <div class="panel-group" id="accordion">
              <?php $i=0;foreach ($model as $key => $value) { ?>
                <div class="panel">
                  <div class="panel-heading">
                    <div class="panel-title panels"><a class="accordion-toggle collapsed" data-parent="#accordion" data-toggle="collapse" href="components-2.html#collapse<?php echo $i;?>"><?php echo $value['project_name'];?></a></div>
                  </div>
                    <div class="panel-collapse collapse" id="collapse<?php echo $i;?>" style="height: 0px;">
	                    <div class="panel-body">
	                      <h2> <?php echo $value['department'];?> </h2>
	                      <small class="mini muted"><?php echo $value['owner'];?></small><br>
							<h3>Budget Amount : <?php echo $value['budget_amt'];?> <a href="#" data-amount="<?php echo $value['budget_amt'];?>" class="view pull-right">View</a></h3>
	                 	</div>
                	</div>
	                <?php $i++;} ?>
	              </div>
	            </div>
	          </div>
	        </div>
		</div>
	</div>
</div>
<script>	
		$(document).ready(function(){
			arrayOfData = new Array(
			  	 [<?php echo str_replace( ',', '', $total);?>,'National Budget','#222222'],
			  	 [<?php echo $customTotal; ?>,'Custom Budget','#007AFF']
			);
			$('#divForGraph').jqBarGraph({ data: arrayOfData });
			$('.view').click(function(){
				arrayOfData2 = new Array(
			  	 [<?php echo str_replace( ',', '', $total);?>,'National Budget','#222222'],
			  	 [parseInt($(this).data("amount")),'Custom Budget','#007AFF']
					);
				$('#divForGraph').empty().jqBarGraph({ data: arrayOfData2 });
			})
		})
</script>