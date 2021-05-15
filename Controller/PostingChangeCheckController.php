<?php
	session_start();

	$post_id = $_SESSION["post"]["post_id"];
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
		if($_POST["Q1"]==""){
			$_SESSION["message"] = "感想をどれか一つ選んでください。";
			header("Location: PostingChangeFormController.php");
			exit();
		}else if(preg_match("/^[0-9]+$/",$_POST["price"])){
			$Q1 = implode("、",$_POST["Q1"]);
			if(empty($_POST["Q3"])){
				$Q3 = "未選択";
			}else{
				$Q3 = $_POST["Q3"];
			}
			date_default_timezone_set('Asia/Tokyo');
			$date = date("Y-m-d H:i:s");
			require_once("../model/db.php");
			update_post($post_id, $book_name, $author, $price, $Q1, $Q2, $Q3, $Q4, $category, $date);
			unset($_SESSION["post"]);
			include_once("../view/posting_changed.php");
		}else{
			$_SESSION["message"] = "価格の表記が間違っています。※半角数字のみ";
			header("Location: PostingChangeFormController.php");
			exit();
		}
	}else{
		$_SESSION["message"] = "フォームへの入力をお願いします。";
		header("Location: PostingChangeFormController.php");
		exit();
	}
?>