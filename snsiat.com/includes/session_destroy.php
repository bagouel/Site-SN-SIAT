<?php
	session_start();
	require_once('connect_db.php');
	$_SESSION=array();
    session_destroy();
    header('location: ../index.php');
?>