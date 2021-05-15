<?php
	session_start();
	if(isset($_POST["book_name"])){
		$login_id = $_SESSION["login_id"];
		$book_name = $_POST["book_name"];
		$author = $_POST["author"];
		$price = $_POST["price"];
		$Q1 = $_POST["Q1"];
		$Q2 = $_POST["Q2"];
		$Q3 = $_POST["Q3"];
		$Q4 = $_POST["Q4"];
		$category = $_POST["category"];
		date_default_timezone_set('Asia/Tokyo');
		$date = date("Y-m-d H:i:s");
		require_once("../model/db.php");
		insert_postinglists($login_id, $book_name, $author, $price, $Q1, $Q2, $Q3, $Q4, $category, $date);
		include_once("../view/recommended.php");	
	}else{
		$_SESSION["message"] = "フォームへの入力をお願いします。";
		header("Location: RecommendFormController.php");
		exit();
	}
?>