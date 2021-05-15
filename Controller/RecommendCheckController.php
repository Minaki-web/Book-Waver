<?php
	session_start();

	$login_id = $_SESSION["login_id"];
	$book_name = htmlentities($_POST["book_name"], ENT_QUOTES);
	$author = htmlentities($_POST["author"], ENT_QUOTES);
	$price = $_POST["price"];
	$category = $_POST["category"];
	$Q2 = $_POST["Q2"];
	$Q4 = $_POST["Q4"];
	if(isset($_POST["book_name"])){
		require_once("../model/db.php");
		recommend_empty($book_name, $author, $price, $category, $Q2, $Q4);
		recommend_length($book_name, $author);
		if($_POST["Q1"] ==""){
			$_SESSION["message"] = "感想をどれか一つ選んでください。";
			header("Location: RecommendFormController.php");
			exit();
		}else if(preg_match("/^[0-9]+$/",$_POST["price"])){
			$Q1 = implode("、",$_POST["Q1"]);
			if(empty($_POST["Q3"])){
				$Q3 = "未選択";
			}else{
				$Q3 = $_POST["Q3"];
			}
			include_once("../view/recommend_check.php");
		}else{
			$_SESSION["message"] = "価格の表記が間違っています。※半角数字のみ";
			header("Location: RecommendFormController.php");
			exit();
		}
	}else{
		$_SESSION["message"] = "フォームへの入力をお願いします。";
		header("Location: RecommendFormController.php");
		exit();
	}
?>