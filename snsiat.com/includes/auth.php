<?php 
    class Auth{
        static function islogged(){
            if (isset($_SESSION['Auth'])&& isset($_SESSION['Auth']['id'])&& isset($_SESSION['Auth']['user'])&& isset($_SESSION['Auth']['password'])){

                return true;
            }else{
                return false;
            }
        }
    }
?>