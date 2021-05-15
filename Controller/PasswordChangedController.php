<?php
	session_start();
	$after_pwd = $_POST["after_pwd"];
	$length_after_pwd = strlen($after_pwd);
	$before_pwd = $_POST["before_pwd"];

	if(isset($after_pwd)){
		if(preg_match("/^[a-zA-Z0-9]+$/",$after_pwd)){
			require_once("../model/db.php");
			$account = read_account_by_LoginID($_SESSION["login_id"]);
			if($length_after_pwd > 30 ){
				$_SESSION["message"] = "30文字を超過しています。";
				header( "Location: PasswordChangeFormController.php" );
				exit();
			}
			if($before_pwd == $account["password"]){
				update_password($after_pwd, $_SESSION["login_id"]);
				include_once("../view/password_changed.php");
				exit();
			} else {
				$_SESSION["message"] = "変更前パスワードが違います。";
				header("Location: PasswordChangeFormController.php");
				exit();
			}
		}else{
			$_SESSION["message"] = "使用できない文字が含まれています。";
			header("Location: PasswordChangeFormController.php");
			exit();
		}
	}else{
		header("Location: PasswordChangeFormController.php");
		exit();
	}
?>