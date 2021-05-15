<?php
	session_start();
	if(isset($_SESSION["login_id"])){	
		$post_id = $_SESSION["post"]["post_id"];
		$book_name = $_SESSION["post"]["book_name"];
		$message = isset($_SESSION["message"]) ? $_SESSION["message"] : "";
		unset($_SESSION["message"]);
		include_once("../view/posting_delete_check_form.php");	
	}else{
		header("Location: MypageController.php"); 
		exit();
	}
?>