<?php
	$title="SNSIAT - Mon Compte";
	$slide_title="Mon Compte";
    session_start(); // Demarage de la sessions
    require_once('includes/connect_db.php');

    if (isset($_POST['login']) && !empty($_POST["user"]) && !empty($_POST["password"])){   
        $user=htmlspecialchars($_POST['user']);
        $password=htmlspecialchars($_POST['password']);
        
        $sql=$conn->prepare(" select * from user where email=? AND pass=?");  
        $sql->execute(array($user,$password));
        $count=$sql->rowCount();
        if($count>=1){
            $fecth=$sql->fetch();
            $_SESSION['Auth']=array (
                'id'=>$fecth['userid'],
                'rule' => $fecth['rule'],
                
            );
            $error="";
            if($_SESSION['rule']=="FOURNISSEUR"){
            	header('location:includes/admin/supplier/dashboard.php');
            }
            header('location:includes/admin/customer/dashboard.php'); // diriger vers le  tabeau de bord
        }else{
           $error=" Identifiants incorrects !!!!"; // En cas de mauvais login ou mot de pass
        }
    }else{
        $error="Veuillez renseigner toutes les informations.";
    }
    require_once('includes/header.php');
     
?>
		<!--=====================================================
		CONTENT
		======================================================-->
		<div id="content">
			<!--=====================================================
			MAIN CONTENT
			======================================================-->
			<div class="content_block content_bg2 anchor" id="login">
				<img src="img/cacao_light.png" class="title_icon">
				<div class="content_block_title_white">Connexion</div>
				<div class="content_block_half">
					<div class="content_block_half_white">
						<div class="content_block_internal_info">
							<div class="content_block_info">
								<?php 
								?>
							</div>
							<form id="login_form">
							    <input class="input_half" type="text" name="user" placeholder="NOM ou EMAIL">
							    <input class="input_half" type="password" name="password" placeholder="MOT DE PASSE">
							    <input id="form_btn" type="submit" name="login" value="CONNEXION" id="send_btn">
							</form>
							<div class="content_block_info">
								<h4>
									Vous débutez sur SNSIAT ? <a href="inscription.php" class="main_menu_item">S’inscrire</a> <a href="inscription_f.php">.</a>
								</h4>
							</div>
							
						</div>
					</div>
				</div>
			</div>
			
		</div>

<?php
    require_once('includes/footer.php');
?>