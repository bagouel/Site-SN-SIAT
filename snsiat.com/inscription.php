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
				<div class="content_block_title_white">Inscription</div>
				<div class="content_block_half">
					<div class="content_block_half_white">
						<div class="content_block_internal_info">
							
							<div class="content_block_info">
								<?php 
								?>
							</div>
							<form id="register_form">
							    <input class="input_half" type="text" name="user" placeholder="NOM">
							    <input class="input_half" type="text" name="lastname" placeholder="PRENOM">
							    <input class="input_half" type="text" name="phone" placeholder="CONTACT">
							    <input class="input_half" type="email" name="email" placeholder="EMAIL">
							    <input id="form_btn" type="submit" name="submir" class="main_menu_item" value="S'INSCRIRE" id="send_btn">
							    <input id="form_btn" type="reset" name="reset" class="main_menu_item" value="ANNULER" id="send_btn">
							</form>
							<div class="content_block_info">
								<h4>
									Déjà un compte sur SNSIAT ? <a href="connexion.php" class="main_menu_item">Se connecter</a>.
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