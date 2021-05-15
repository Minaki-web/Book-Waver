<?php
	session_start();
	if(isset($_POST["login_id"])){
		require_once("../model/db.php");
		insert_account($_POST["login_id"], $_POST["password"]);
		include_once("../view/registed.php");
	}else{
		$_SESSION["message"] = "登録してください。";
		header("Location: RegistFormController.php");
		exit();
	}
?>