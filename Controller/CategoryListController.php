<?php

	if(isset($_SESSION["post"])){
		unset($_SESSION["post"]);
	}

	session_start();
	$title = $_GET["category"];
	require_once("../model/db.php");
	$posts = read_postinglists_by_category($_GET["category"]);
	include_once("../view/category_list.php")
?>