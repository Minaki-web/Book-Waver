<?php session_start();?>
<?php
	require_once("../model/db.php");
	
	$account = read_account_by_LoginID($_POST["login_id"]);
	if($_POST["login_id"] == $account["login_id"] && $_POST["password"] == $account["password"]){
		$_SESSION["login_id"] = $account["login_id"];
		header("Location: MypageController.php");
		exit();
	} else {
		$_SESSION["message"] = "IDまたはパスワードが違います。";
		header("Location: LoginFormController.php");
		exit();
	}
?>