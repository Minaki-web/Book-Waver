<?php
	session_start();
	if(isset($_SESSION["login_id"])){
		$post_id = $_SESSION["post"]["post_id"];
		$book_name = $_SESSION["post"]["book_name"];
		$author = $_SESSION["post"]["author"];
		$price = $_SESSION["post"]["price"];
		$category = $_SESSION["post"]["category"];
		$message = isset($_SESSION["message"]) ? $_SESSION["message"] : "";
		unset($_SESSION["message"]);
		include_once("../view/posting_change_form.php");
	}else{
		header("Location: MypageController.php");
		exit();
	}
?>