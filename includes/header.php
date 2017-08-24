<?php ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title><?php echo $pageTitle; ?></title>
	<meta name="description" content="<?php echo $pageDescription; ?>">
	<?php
		// If canonical URL is specified, include canonical link element
		if($pageCanonical)
		{
			echo '<link rel="canonical" href="' . $pageCanonical . '">';
		}
		// If meta robots content is specified, include robots meta tag
		if($pageRobots)
		{
			echo '<meta name="robots" content="' . $pageRobots . '">';
		}
	?>
	<link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="bower_components/animate.css/animate.min.css">
	<link rel="stylesheet" href="bower_components/lightgallery/dist/css/lightgallery.min.css" />
	<link rel="stylesheet" href="style.css">
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/manifest.json">
	<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="theme-color" content="#ffffff">
	<script src="bower_components/jquery/dist/jquery.min.js"></script>
	<script src="js/dist/scripts.js"></script>
	<!-- <script src='https://www.google.com/recaptcha/api.js'></script> -->
</head>
<body id="top">