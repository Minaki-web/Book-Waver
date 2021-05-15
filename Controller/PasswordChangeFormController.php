<?php
	session_start();
	$message = isset($_SESSION["message"]) ? $_SESSION["message"] : "";
	unset($_SESSION["message"]);
	if(isset($_SESSION["login_id"])){
		include_once("../view/password_change_form.php");	
	}else{
		$_SESSION["message"] = "ログインしてください。";
		header("Location: LoginFormController.php");
		exit();
	}

?>