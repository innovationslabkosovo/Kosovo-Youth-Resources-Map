<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<SCRIPT language="JavaScript">
var browserName=navigator.appName; 
if (browserName=="Microsoft Internet Explorer")
{
 alert("Hi, Explorer User! This website is best viewed with a standards-compliant browser (e.g. Firefox, Chrome or Opera)!");
}
</SCRIPT>

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
	echo "<script src=\"http://maps.google.com/maps?file=api&amp;v=2&amp;key=ABQIAAAAPicCDTar3zB4WqTFApVNRxRfQNFj4LU-XP-_Hi02SC6hTYSxnBTW58nCNOqMK8yb4Ee2K-1uCpJI7Q\" type=\"text/javascript\"></script>";
		
	echo "<script type=\"text/javascript\" src=\"http://www.openstreetmap.org/openlayers/OpenStreetMap.js\"></script>";
	echo"<script type=\"text/javascript\">
			OpenLayers.ImgPath = '".url::base().'media/img/openlayers/'."';
			</script>";
	?>
        <script type="text/javascript" src="./lmcbutton.js"></script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-22191757-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>

<body id="page">
	<!-- wrapper -->
	<div class="rapidxwpr floatholder">

		<!-- header -->
		<div id="header">

			<!-- searchbox -->
			<div id="searchbox">
				<pre><b>     Change Language:     Search Youth Resources:</b></pre>
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
				<a align="right" href="http://www.kosovoinnovations.org" target="_blank"><img src="http://82.114.84.33:70/sites/default/files/logo-final.png"></a> 
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
