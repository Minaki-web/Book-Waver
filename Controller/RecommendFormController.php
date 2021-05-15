<?php
	session_start();
	if(isset($_SESSION["login_id"])){
		$login_id = $_SESSION["login_id"];
		$message = isset($_SESSION["message"]) ? $_SESSION["message"] : "";
		unset($_SESSION["message"]);
		include_once("../view/recommend_form.php");	
	}else{
		$_SESSION["message"] = "ログインしてください。";
		header("Location: LoginFormController.php");
		exit();
	}
?>