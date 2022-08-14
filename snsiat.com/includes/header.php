<!DOCTYPE html>
<html>
	
<!-- Mirrored from hacienda-victoria.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Aug 2022 01:42:02 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<title><?=$title;?></title>
		<link rel="icon" href="img/logo.jpg" type="img/png" />
		<link rel="apple-touch-icon" href="img/favicon.png">
		<link rel="stylesheet" href="css/main.css" type="text/css" />
		<link rel="stylesheet" href="css/home.css" type="text/css" />
		<link rel="stylesheet" href="lib/fancybox/jquery.fancybox.min.css" type="text/css" />
	</head>
	<body>
		<header>
			
		<div id="main_menu">
			<a href="index.php" id="logo_container" class="main_menu_item"><img src="img/logo.jpg" id="logo_img"></a>
			<a href="index.php" class="main_menu_item" name="home">Accueil</a>
			<div class="main_menu_item">
				<div name="about-us">A Propos</div>
				<div class="submenu">
					<a href="about-us.php#history" class="submenu_item">Notre Histoire</a>
					<a href="about-us.php#mission-vision" class="submenu_item">Mission - Vision</a>
					<a href="about-us.php#institutional-values" class="submenu_item">Valeurs Institutionnelles</a>
					<!--<a href="about-us#social-responsability" class="submenu_item">Social Responsability</a>-->
				</div>
			</div>
			<div class="main_menu_item">
				<div name="information">Information</div>
				<div class="submenu">
					<a href="information.php#statistics" class="submenu_item">Statistiques</a>
					<a href="information.php#advisors" class="submenu_item">Advisors</a>
				</div>
			</div>
			<div class="main_menu_item">
				<a href="social-responsability.php" class="submenu_item">Responsabilités Sociales</a>
			</div>
			<div class="main_menu_item">
				<div name="gallery">Gallerie</div>
				<div class="submenu">
					<a href="gallery.php#videos" class="submenu_item">Videos</a>
					<a href="gallery.php#photos" class="submenu_item">Photos</a>
				</div>
			</div>
			<div class="main_menu_item">
				<div name="contact-us">Contact</div>
				<div class="submenu">
					<a href="contact-us.php#directors" class="submenu_item">Directions</a>
					<a href="contact-us.php#location" class="submenu_item">Localisation</a>
					<a href="contact-us.php#write-us" class="submenu_item">Contactez-Nous</a>
				</div>
			</div>
			<a href="connexion.php" class="main_menu_item" name="account">Compte</a>
			<!--
			<div class="main_menu_item">
				<div name="language">Language</div>
				<div class="submenu">
					<a href="./" class="submenu_item">
						<img src="img/en_flag.png" class="language_flag">
					</a>
					<a href="es" class="submenu_item">
						<img src="img/es_flag.png" class="language_flag">
					</a>
				</div>
			</div>
			-->
		</div>
		<div id="language_menu">
			<a href="index.php" class="sm_menu_item">
				<img src="img/fr_flag.png" class="language_flag">
			</a>
			<a href="en/index.php" class="sm_menu_item">
				<img src="img/en_flag.png" class="language_flag">
			</a>
			<a href="es/index.php" class="sm_menu_item">
				<img src="img/es_flag.png" class="language_flag">
			</a>
		</div>
		<div id="sm_menu">
			<a href="https://www.facebook.com/Hacienda-Victoria-879429135526130" target="_blank"><i class="icon-facebook sm_menu_item"></i></a>
			<a href="https://twitter.com/HcdaVictoria" target="_blank"><i class="icon-twitter sm_menu_item"></i></a>
			<a href="https://www.instagram.com/hacienda_victoria_ecu" target="_blank"><i class="icon-instagram sm_menu_item"></i></a>
			<a href="https://www.youtube.com/channel/UCzlmDkkLv5TCUr_OhBBlJtQ" target="_blank"><i class="icon-youtube sm_menu_item"></i></a>
		</div>
		<i id="mobile_menu_btn" class="icon-menu" data-fancybox data-src="#mobile_menu"></i>
		<div id="mobile_menu">
			<a href="index.php" class="mobile_menu_item" name="home">Accueil</a>
			<a href="about-us.php" class="mobile_menu_item" name="about-us">A Propos</a>
			<a href="information.php" class="mobile_menu_item" name="information">Information</a>
			<a href="social-responsability.php" class="mobile_menu_item" name="social-responsability">Responsabilité Sociale</a>
			<a href="gallery.php" class="mobile_menu_item" name="gallery">Gallerie</a>
			<a href="contact-us.php" class="mobile_menu_item" name="contact-us">Contact</a>
			<a href="account.php" class="mobile_menu_item" name="contact-us">Compte</a>
			<div id="language_mobile">
				<a href="index.php" class="language_mobile">
					<img src="img/fr_flag.png" class="language_flag">
				</a>
				<a href="en/index.php" class="language_mobile">
					<img src="img/en_flag.png" class="language_flag">
				</a>
				<a href="es/index.php" class="language_mobile">
					<img src="img/es_flag.png" class="language_flag">
				</a>
			</div>
		</div>
		<div class="header_wave"></div>
			</header>
	<?php 
		if($title=='SN SIAT'){
	?>
		<!--=====================================================
		MAIN BANNER / SLIDER
		======================================================-->
		<div id="main_banner" class="main_banner_full">
			<div class="main_banner_slide">
				<div class="main_banner_slide_info">
					<div class="main_banner_slide_text1">Bienvenue à</div>
					<div class="main_banner_slide_title">SN SIAT</div>
					<div class="main_banner_slide_text2">Cacao d'arôme fin variété Arriba</div>
				</div>
			</div>
		</div>
	<?php 
		}else{
	?>
		<!--=====================================================
		MAIN BANNER / SLIDER
		======================================================-->
		<div id="main_banner" class="main_banner_half">
			<div class="main_banner_slide">
				<div class="main_banner_slide_info">
					<div class="main_banner_slide_title"><?=$slide_title;?></div>
				</div>
			</div>
		</div>
	<?php 
		}
	?>
	</body>
</html>