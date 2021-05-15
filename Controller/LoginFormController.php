<?php
	session_start();
	$message = isset($_SESSION["message"]) ? $_SESSION["message"] : "";
	unset($_SESSION["message"]);
	include_once("../view/login_form.php");
?>