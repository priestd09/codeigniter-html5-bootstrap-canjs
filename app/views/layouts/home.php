<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// In case you run CI from subfolder
$project = base_url();
?><!DOCTYPE html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title><?php echo $layout_company.$layout_title; ?></title>
	<meta name="description" content="">
	<meta name="author" content="Ivan Mayes">

	<meta name="viewport" content="width=device-width">
<?php /* You can pick one of these links if you need specific touch icon
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $project; ?>apple-touch-icon-114x114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $project; ?>apple-touch-icon-72x72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php echo $project; ?>apple-touch-icon-57x57-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="<?php echo $project; ?>apple-touch-icon-precomposed.png">
	<link rel="apple-touch-icon" href="<?php echo $project; ?>apple-touch-icon.png"/>
	<link rel="shortcut icon" href="<?php echo $project; ?>favicon.ico"/>
	*/?>
	<meta http-equiv="cleartype" content="on">

	<link rel="stylesheet/less" type="text/css" href="<?php echo $project; ?>css/bootstrap/bootstrap.less">
	<link rel="stylesheet/less" type="text/css" href="<?php echo $project; ?>css/style.less">

	<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.5.3/modernizr.min.js"></script>
	
	<?php /* Respond is a polyfill for min/max-width CSS3 Media Queries */ ?>
	<!--<script src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.1.0/respond.min.js"></script>-->
	
	<script src="http://cdnjs.cloudflare.com/ajax/libs/less.js/1.3.0/less-1.3.0.min.js"></script>

</head>
<body>
	
	<div id="main" role="main" class="container">
		<?php echo $layout_content; ?>
    </div>
	
	<hr>
	
	<footer>
		<p><?php echo $layout_year.' &copy; '.$layout_company; ?></p>
	</footer>
	
    <!-- Grab Google CDN's jQuery. fall back to local if necessary -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.js"></script>
    <script>!window.jQuery && document.write(unescape('%3Cscript src="/js/libs/jquery-1.6.2.js"%3E%3C/script%3E'))</script>
	
	<!-- Main JS -->	 	
 	 <script src="<?php echo $project; ?>js/home/home.js"></script>

	<!--[if lt IE 7 ]>
		<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
		<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
	<![endif]-->

	<script>
		var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
		(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
		g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
		s.parentNode.insertBefore(g,s)}(document,'script'));
  </script>

</body>
</html>