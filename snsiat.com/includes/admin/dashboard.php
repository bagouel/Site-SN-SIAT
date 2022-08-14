<?php
session_start();   // Démarrage de la session
require('includes/auth.php');
if (Auth::islogged()){  //vérification que l'admin est bien logué
    require_once('.../includes/header.php'); 
?>

<?php
        require_once('.../includes/footer.php');
    }else{
        header('location:.../.../account.php'); // redirection à la page de connexion si l'admin ne s'est pas logué!
    }
?>
