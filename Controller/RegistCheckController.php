<?php
	session_start();
	$login_id = $_POST["login_id"];
	$password = $_POST["password"];
	$length_login_id = strlen($login_id);
	$length_password = strlen($password);
	require_once("../model/db.php");
	if(isset($login_id)){
		if(preg_match("/^[a-zA-Z0-9]+$/",$login_id) && preg_match("/^[a-zA-Z0-9]+$/",$password)){
			if($length_login_id > 16 ){
				$_SESSION["message"] = "16文字を超過しています。";
				header( "Location: RegistFormController.php" );
				exit();
			}
			if($length_password > 30 ){
				$_SESSION["message"] = "30文字を超過しています。";
				header( "Location: RegistFormController.php" );
				exit();
			}
			// ログインIDの重複チェック
			$account = read_account_by_LoginID($_POST["login_id"]);
			if ($account) {
				$_SESSION["message"] = "登録済みのIDです。";
				header( "Location: RegistFormController.php" );
				exit();
			}
			include_once("../view/regist_check.php");
		}else{
			$_SESSION["message"] = "使用できない文字が含まれています。";
			header("Location: RegistFormController.php");
			exit();
		}
	}else{
		$_SESSION["message"] = "登録してください。";
		header("Location: RegistFormController.php");
		exit();
	}
?>