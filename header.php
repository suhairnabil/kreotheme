<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="<?= get_locale()?>" dir="<?=is_rtl()?'rtl':'ltr'?>"> <!--<![endif]-->
<head>

   <meta charset="utf-8">
	
	<meta name="description" content="">  
	<meta name="author" content="">
     <meta name="robots" content="noindex, nofollow">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <?php wp_head(); ?>
	<link rel="stylesheet" href="<?php echo get_theme_file_uri('assets/css/main.css')?>">  
	<link rel="shortcut icon" href="<?php echo get_theme_file_uri('favicon.png')?>" >

</head>

<body id='main_page'>
<?php $textdomain='kreo'; ?>
   <header id="main-header">

   	<div class="row">

	      <div class="logo">
			  <!--	<?php the_custom_logo();?>-->
	      <a href="<?=site_url()?>"><?php bloginfo('title') ?> </a> 
	      </div>
		  <?php
			wp_nav_menu([
				'theme_location'=>'main-menu',
				'menu_class'=>'nav',
				'menu_id'=>'nav',
				'container'=>'nav',
				'container_class'=>'nav-wrap',
				'container_id'=>'nav-wrap',
				'depth'=>4
				
			]);

			?>



	      <ul class="header-social">
	        	<li><a href="#"><i class="fa fa-facebook"></i></a></li>
	        	<li><a href="#"><i class="fa fa-twitter"></i></a></li>
	        	<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
	      </ul>      

	   </div>

   </header> <!-- end header -->