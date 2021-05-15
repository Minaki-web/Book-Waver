<?php
	session_start();
	require_once("../model/db.php");
	$posts = read_postinglists_by_post_id($_GET["post_id"]);
	include_once("../view/card_info.php");
?>