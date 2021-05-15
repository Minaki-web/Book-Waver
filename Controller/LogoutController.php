<?php session_start();?>
<?php 
	unset($_SESSION["login_id"]);
	header('Location: ../index.php');
	exit();
?>