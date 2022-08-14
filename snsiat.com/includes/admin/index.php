<?php
    session_start(); // Demarage de la sessions
    require_once('includes/connexion_db.php');

    if (isset($_POST['connexion']) && !empty($_POST["user"]) && !empty($_POST["password"])){   
        $user=htmlspecialchars($_POST['user']);
        $password=htmlspecialchars($_POST['password']);
        
        $sql=$conn->prepare(" select id, speudo, nom, pass from user where speudo=? AND pass=?");  
        $sql->execute(array($user,$password));
        $count=$sql->rowCount();
        if($count>=1){
            $fecth=$sql->fetch();
            $_SESSION['Auth']=array (
                'id'=>$fecth['id'],
                'user' => $user,
                'password' => $password,
            );
            $error="";
            $etat="Connecté";
            $date=date('Y-m-d H:m:s');
            $_SESSION['user'] = $_POST['user']; // recuperation du login
            
            header('location:profile.php'); // diriger vers le  tabeau de bord
        }else{
           $error=" Identifiants incorrects !!!!"; // En cas de mauvais login ou mot de pass
        }
    }else{
        $error="Veuillez renseigner toutes les informations.";
    }
     
?>
<!DOCTYPE html>
<html>
	
<!-- Mirrored from hacienda-victoria.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Aug 2022 01:42:02 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<title>Hacienda Victoria</title>
		<link rel="icon" href="img/favicon.png" type="img/png" />
		<link rel="apple-touch-icon" href="img/favicon.png">
		<link rel="stylesheet" href="css/main.css" type="text/css" />
		<link rel="stylesheet" href="css/home.css" type="text/css" />
		<link rel="stylesheet" href="lib/fancybox/jquery.fancybox.min.css" type="text/css" />
	</head>
	<body>
		<header>
			
		<div id="main_menu">
			<a href="index.html" id="logo_container" class="main_menu_item"><img src="img/logo.png" id="logo_img"></a>
			<a href="index.html" class="main_menu_item" name="home">Home</a>
			<div class="main_menu_item">
				<div name="about-us">About us</div>
				<div class="submenu">
					<a href="about-us.html#history" class="submenu_item">History</a>
					<a href="about-us.html#mission-vision" class="submenu_item">Mission - Vision</a>
					<a href="about-us.html#institutional-values" class="submenu_item">Institutional Values</a>
					<!--<a href="about-us#social-responsability" class="submenu_item">Social Responsability</a>-->
				</div>
			</div>
			<div class="main_menu_item">
				<div name="information">Information</div>
				<div class="submenu">
					<a href="information.html#statistics" class="submenu_item">Statistics</a>
					<a href="information.html#advisors" class="submenu_item">Advisors</a>
				</div>
			</div>
			<div class="main_menu_item">
				<a href="social-responsability.html" class="submenu_item">Social Responsability</a>
			</div>
			<div class="main_menu_item">
				<div name="gallery">Gallery</div>
				<div class="submenu">
					<a href="gallery.html#videos" class="submenu_item">Videos</a>
					<a href="gallery.html#photos" class="submenu_item">Photos</a>
				</div>
			</div>
			<div class="main_menu_item">
				<div name="contact-us">Contact us</div>
				<div class="submenu">
					<a href="contact-us.html#directors" class="submenu_item">Directors</a>
					<a href="contact-us.html#location" class="submenu_item">Location</a>
					<a href="contact-us.html#write-us" class="submenu_item">Write us</a>
				</div>
			</div>
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
			<a href="index.html" class="sm_menu_item">
				<img src="img/en_flag.png" class="language_flag">
			</a>
			<a href="es/index.html" class="sm_menu_item">
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
			<a href="index.html" class="mobile_menu_item" name="home">Home</a>
			<a href="about-us.html" class="mobile_menu_item" name="about-us">About us</a>
			<a href="information.html" class="mobile_menu_item" name="information">Information</a>
			<a href="social-responsability.html" class="mobile_menu_item" name="social-responsability">Social Responsability</a>
			<a href="gallery.html" class="mobile_menu_item" name="gallery">Gallery</a>
			<a href="contact-us.html" class="mobile_menu_item" name="contact-us">Contact us</a>
			<div id="language_mobile">
				<a href="index.html" class="language_mobile">
					<img src="img/en_flag.png" class="language_flag">
				</a>
				<a href="es/index.html" class="language_mobile">
					<img src="img/es_flag.png" class="language_flag">
				</a>
			</div>
		</div>
		<div class="header_wave"></div>
			</header>
		<!--=====================================================
		MAIN BANNER / SLIDER
		======================================================-->
		<div id="main_banner" class="main_banner_full">
			<div class="main_banner_slide">
				<div class="main_banner_slide_info">
					<div class="main_banner_slide_text1">Welcome to</div>
					<div class="main_banner_slide_title">Hacienda Victoria</div>
					<div class="main_banner_slide_text2">Cocoa of fine aroma variety Arriba</div>
				</div>
			</div>
		</div>
		
		<!--=====================================================
		FOOTER
		======================================================-->
		<footer>
			
		<div id="footer_content">
			<div class="footer_text">Victoria Cocoa © 2018 - All Rights Reserved<br>Developed by POCKET.EC</div>
		</div>
			</footer>
	</body>
	<script type="text/javascript" src="lib/jquery-2.2.0.js"></script>
    <script type="text/javascript" src="lib/jquery-ui.js"></script>
    <script type="text/javascript" src="lib/gsap/uncompressed/TweenLite.js"></script>
    <script type="text/javascript" src="lib/gsap/uncompressed/TweenMax.js"></script>
    <script type="text/javascript" src="lib/gsap/uncompressed/plugins/CSSPlugin.js"></script>
    <script type="text/javascript" src="lib/gsap/minified/plugins/ScrollToPlugin.min.js"></script>
    <script type="text/javascript" src="lib/fancybox/jquery.fancybox.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="js/video_principal.js"></script>
 	<script type="text/javascript">var video_path = "";</script>

<!-- Mirrored from hacienda-victoria.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Aug 2022 01:42:22 GMT -->
</html>