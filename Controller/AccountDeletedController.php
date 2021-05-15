<?php session_start();?>
<?php
	if(isset($_POST["password"])){
		require_once("../model/db.php");
		$account = read_account_by_LoginID($_SESSION["login_id"]);
		if($_POST["password"] == $account["password"]){
			delete_account($_SESSION["login_id"]);
			unset($_SESSION["login_id"]);
			include_once("../view/account_deleted.php");
			exit();
		} else {
			$_SESSION["message"] = "パスワードが違います。";
			header("Location: AccountDeleteFormController.php");
			exit();
		}
	}else{
		header("Location: MypageController.php");
		exit();
	}
?>