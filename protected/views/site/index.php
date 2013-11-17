<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<div class="row-fluid" style="background:url('<?php echo Yii::app()->request->baseUrl.'/images/billsd.jpg'; ?>');background-size:100%;padding:10px;margin-top:-20px;padding-bottom:100px;">
	<div class="row">
		<div class="col-md-6">
			<br><br><br><br><br><br><br><br>
		</div>
	</div>
	<div class="row" style="opacity:.8 !important;">
		<div class="col-md-6">
		</div>
		<div class="col-md-6">
			<div class="widget-container fluid-height clearfix">
				<div class="widget-content padded">
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu sollicitudin nunc. Aliquam mauris mi, vulputate vitae elementum quis, varius et mauris. Ut erat lacus, pretium vel diam iaculis, imperdiet congue mi. Aenean vel est lacus. Morbi fermentum dapibus velit. Praesent in dui lobortis, tincidunt enim id, pellentesque augue. Curabitur in nunc luctus, scelerisque diam non, lobortis nunc. Aenean eleifend, risus non lacinia interdum, nunc ipsum varius velit, eget varius mauris magna id augue.
					</p>
					<div class="pull-right">
						<a href="<?php echo $this->createAbsoluteUrl('department/budget'); ?>" class="btn btn-primary btn-lg">Make your own National Budget</a>
						<a href="<?php echo $this->createAbsoluteUrl('#'); ?>" class="btn btn-primary btn-lg"><i class="glyphicon glyphicon-thumbs-up"></i> Vote other Budgets</a>
					</div>
				</div>
			</div>	
		</div>
	</div>	
</div>
