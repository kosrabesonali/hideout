<!DOCTYPE html>
<html lang="en">
<head>
	<!--<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">	
	<base href="<?php //echo $base_url; ?>" />

	<title><?php // echo $page_title; ?></title>
	-->
	<meta charset="utf-8" />
	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<meta name="author" content="Egprojets">
	<meta name="description" content="" />
	<title>Food Lover HTML</title>
	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

	<?php
		/*foreach ($meta_data as $name => $content)
		{
			if (!empty($content))
				echo "<meta name='$name' content='$content'>".PHP_EOL;
		}

		foreach ($stylesheets as $media => $files)
		{
			foreach ($files as $file)
			{
				$url = starts_with($file, 'http') ? $file : base_url($file);
				echo "<link href='$url' rel='stylesheet' media='$media'>".PHP_EOL;	
			}
		}
		
		foreach ($scripts['head'] as $file)
		{
			$url = starts_with($file, 'http') ? $file : base_url($file);
			echo "<script src='$url'></script>".PHP_EOL;
		}*/
	?>
	<!-- Google Fonts -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:400,700,300" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Architects+Daughter" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,300" />
	<!-- End Google Fonts -->


	<!-- Contribute CSS Files -->
	<link href="<?php  echo asset_url('css/bootstrap.min.css');?>" rel='stylesheet'>
	<link href="<?php  echo asset_url('css/font-awesome.min.css');?>" rel='stylesheet'>
	<link href="<?php  echo asset_url('css/flaticon.css');?>" rel='stylesheet'>
	<!-- Contribute End CSS Files -->

	<!-- Custom CSS Files -->
	<link href="<?php  echo asset_url('css/style.css');?>" rel='stylesheet'>
	<link href="<?php  echo asset_url('css/responsive.css');?>" rel='stylesheet'>
	<!-- Custom End CSS Files -->


	<!--[if lt IE 9]>
		<script src="assets/js/html5shiv.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<div class="bg-danger">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="highlight">upgrade your browser</a> to improve your experience.</div>
	<![endif]-->

	
</head>
<body class="<?php //echo $body_class; ?>">
<!-- Loader Bloc -->
	<!--div class="site-loader">
		<div class="loading"></div>
	</div-->
	<!-- End Loader Bloc -->