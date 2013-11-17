<div class="row-fluid">
	<?php foreach ($model['data'] as $key => $value) { ?>
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="widget-container fluid-height clearfix">
        			<div class="widget-content padded">
		              	<div class="reviewer-info">
	                		<a href="<?php echo $this->createUrl('vote/'.$value['id']); ?>"><?php echo $value['full_name']; ?></a>
	                		<em> on <?php echo date('M d, Y',strtotime($value['date_created'])); ?></em>
	              			<div class="review-text">
	                			<blockquote><?php echo $value['comment']; ?></blockquote>
	                		</div>
	                		<div class="pull-right">
	                			<span><i class="icon-thumbs-up"></i><span class="label label-info"><?php echo $value['likes']; ?></span></span>&nbsp;&nbsp;&nbsp;
	                			<span><i class="icon-thumbs-down"></i><span class="label label-danger"><?php echo $value['dislikes']; ?></span></span>
	                		</div>
	                	</div><br>
        			</div>
				</div>
			</div>
		</div>
		<br>
	<?php } ?>
	<?php if($pages!=" "){ ?>
		<div class="widget-content padded text-center">
          	<ul class="pagination pagination-lg" style="margin-top:-20px;padding-bottom:20px">
	            <?php $this->widget('CLinkPager', array(
	                    'pages'         =>  $pages,
	                    'header'        =>  '',
	                    'nextPageLabel' =>  Yii::t('yii','Next →'),
	                    'prevPageLabel' =>  Yii::t('yii','← Prev'),
	                )) ?>
	        </div>
	    <?php } ?>
	</div>	