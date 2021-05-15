<?php
	session_start();
	$message = "";
	$message = isset($_SESSION["message"]) ? $_SESSION["message"] : "";
	unset($_SESSION["message"]);
	include_once("../view/regist_form.php");
?>