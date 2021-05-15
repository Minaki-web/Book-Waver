<?php session_start();?>
<?php
	if(isset($_POST["password"])){
		require_once("../model/db.php");
		$account = read_account_by_LoginID($_SESSION["login_id"]);
		if($_POST["password"] == $account["password"]){
			delete_post($_SESSION["post"]["post_id"]);
			unset($_SESSION["post"]);
			include_once("../view/posting_deleted.php");
			exit();
		} else {
			$_SESSION["message"] = "パスワードが違います。";
			header("Location: PostingDeleteFormController.php");
			exit();
		}
	}else{
		header("Location: MypageController.php");
		exit();
	}
?>