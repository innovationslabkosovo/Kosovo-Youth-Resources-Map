<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
	<title><?php echo $site_name; ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<?php echo $header_block; ?>
	<?php
	// Action::header_scripts - Additional Inline Scripts from Plugins
	Event::run('ushahidi_action.header_scripts');
	
	//This is the code (that did not work properly for now) if we were not to hard code the google map API
	//$settings = ORM::factory('settings', 1);
	//$api_google = $settings->api_google;
	//echo "<script src=\"http://maps.google.com/maps?file=api&amp;v=2&amp;key=' . $api_google . ' type=\"text/javascript\"></script>";

	echo html::script('media/js/OpenLayers', true);
	echo "<script src=\"http://maps.google.com/maps?file=api&amp;v=2&amp;key=ABQIAAAAPicCDTar3zB4WqTFApVNRxQmqIEdhUP7ag1jqwW0EaRJTuQ0PhSigW9nyNfxIRtCO6_wPAu20m_ZrQ\" type=\"text/javascript\"></script>";
		
	echo "<script type=\"text/javascript\" src=\"http://www.openstreetmap.org/openlayers/OpenStreetMap.js\"></script>";
	echo"<script type=\"text/javascript\">
			OpenLayers.ImgPath = '".url::base().'media/img/openlayers/'."';
			</script>";
	?>
</head>

<body id="page">
	<!-- wrapper -->
	<div class="rapidxwpr floatholder">

		<!-- header -->
		<div id="header">

			<!-- searchbox -->
			<div id="searchbox">
				<!-- languages -->
				<?php echo $languages;?>
				<!-- / languages -->

				<!-- searchform -->
				<?php echo $search; ?>
				<!-- / searchform -->

			</div>
			<!-- / searchbox -->

			<!-- logo -->
			<div id="logo">
				<h1><?php echo "<a href='/kosovoyouthmap'> $site_name </a>"; ?></h1>
				<span><?php echo $site_tagline; ?></span>
			</div>
			<!-- / logo -->
			
			
			
		</div>
		<!-- / header -->

		<!-- main body -->
		<div id="middle">
			<div class="background layoutleft">

				<!-- mainmenu -->
				<div id="mainmenu" class="clearingfix">
					<ul>
						<?php nav::main_tabs($this_page); ?>
					</ul>

				</div>
				<!-- / mainmenu -->
