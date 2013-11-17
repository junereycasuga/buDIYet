<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="language" content="en" />

		<!-- blueprint CSS framework -->
		<link href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700" media="all" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/library/stylesheets/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/library/stylesheets/application.css" />
		<!-- <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/library/stylesheets/excanvas.min.css"/> -->
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/library/stylesheets/classyscroll.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/library/stylesheets/bootstrap.min.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/library/stylesheets/css.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/library/stylesheets/datatables.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/library/stylesheets/fontawesome.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/library/stylesheets/fullcalendar.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/library/stylesheets/color/gray.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/library/stylesheets/color/green.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/library/stylesheets/isotope.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/library/stylesheets/jquery.fancybox.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/library/stylesheets/color/magenta.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/library/stylesheets/normalize.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/library/stylesheets/color/orange.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/library/stylesheets/prettify.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/library/stylesheets/select2.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/library/stylesheets/style.css"/>
		<style type="text/css">.fancybox-margin{margin-right:17px;}</style>

		<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	</head>

	<body>
		<?php $this->renderPartial('//layouts/headers/header'); ?>
		<div class="container-fluid">
			<?php echo $content; ?>
		</div>

		<!-- javascripts -->
		<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/library/javascripts/jquery-1.10.1.min.js');?>
		<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/library/javascripts/bootstrap.min.js');?>
		<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/library/javascripts/excanvas.min.js');?>
		<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/library/javascripts/fullcalendar.min.js');?>
		<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/library/javascripts/gcal.js');?>
		<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/library/javascripts/jquery-ui.js');?>
		<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/library/javascripts/jquery.classyscroll.js');?>
		<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/library/javascripts/jquery.dataTables.min.js');?>
		<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/library/javascripts/jquery.easy-pie-chart.js');?>
		<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/library/javascripts/jquery.fancybox.pack.js');?>
		<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/library/javascripts/jquery.isotope.min.js');?>
		<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/library/javascripts/jquery.mousewheel.js');?>
		<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/library/javascripts/jquery.sparkline.min.js');?>
		<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/library/javascripts/jquery.sparkline.min.js');?>
		<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/library/javascripts/jquery.vmap.min.js');?>
		<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/library/javascripts/jquery.vmap.sampledata.js');?>
		<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/library/javascripts/jquery.vmap.world.js');?>
		<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/library/javascripts/main.js');?>
		<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/library/javascripts/modernizer.custom.js');?>
		<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/library/javascripts/prettify.js');?>
		<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/library/javascripts/select2.js');?>
		<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/library/javascripts/stylewitcher.js');?>
	</body>
</html>
