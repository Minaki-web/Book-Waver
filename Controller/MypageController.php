<?php
	session_start();
	if(isset($_SESSION["login_id"])){
		$login_id = $_SESSION["login_id"];
		require_once("../model/db.php");
		$myposts = read_postinglists_by_login_id($login_id);
		if(isset($_SESSION["post"])){
			unset($_SESSION["post"]);
		}
		include_once("../view/mypage.php");
	}else{
		$_SESSION["message"] = "ログインしてください。";
		header("Location: LoginFormController.php");
		exit();
	}

?>