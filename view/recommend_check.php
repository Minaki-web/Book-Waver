<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta name="robots" content="none,noindex,nofollow">
	<meta name="description" content="ポチポチ選択するだけで書評ができます！">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" href="../css/reset.css">
	<link rel="stylesheet" href="../css/style.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Caudex&family=Noto+Sans+JP:wght@100;300;400;500;700&display=swap" rel="stylesheet">
	<link href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" rel="stylesheet">
	<link rel="shortcut icon" type="image/vnd.microsoft.icon" href="../img/favicon.ico">
	<link rel="icon" type="image/vnd.microsoft.icon" href="../img/favicon.ico">
	<link rel="apple-touch-icon" sizes="180x180" href="../img/apple-touch-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="512x512" href="../img/icon-512x512.png">
	<title>書評してみよう！ | Book Waver</title>
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
	<script>
		$(window).on('load', function() {
			$('body').removeClass('preload');
		});
	</script>
</head>

<body class="preload">
	<header>
		<div class="header_flex">
			<div>
				<h1><a href="../index.php">Book Waver</a></h1>
				<h2 class="header_h2">みんなの書評を分かりやすく見たり、自分が直感的に書評できるサイト！</h2>
			</div>
			<nav>
				<a href='RecommendFormController.php' class="nav-for-pc">感想を投稿する</a>
				<ul id="navi">
					<li><a href="javascript:void(0);" class="dropdown_btn"><?php print($_SESSION["login_id"]); ?></a>
						<ul class="dropdown">
							<li><a href='MypageController.php'>マイページ</a></li>
							<li><a href='LogoutController.php'>ログアウト</a></li>
							<li class="nav-for-sp"><a href='RecommendFormController.php'>感想を投稿する</a></li>
						</ul>
					</li>
				</ul>
			</nav>
		</div>
	</header>
	<main>
		<h3>本を自分なりに評価してみよう！</h3>
		<div class="recommend_form_box">
			<div class="column_flex recommend_check">
				<p class="check_message">投稿します。よろしいですか？</p>
				<p>投稿主：<?php print($login_id); ?></p>
				<p>本の名前：<?php print($book_name); ?></p>
				<p>著者：<?php print($author); ?></p>
				<p>価格：<?php print($price); ?></p>
				<p>ジャンル：<?php print($category); ?></p>
				<p>初めて読んだ時の感想：<?php print($Q1); ?></p>
				<p>繰り返し読みたいですか：<?php print($Q2); ?></p>
				<p>それはどのくらいの間隔ですか：<?php print($Q3); ?></p>
				<p>おすすめ度：<?php print($Q4); ?></p>
				<form action="RecommendController.php" method="post">
					<input type="hidden" name="login_id" value="<?php print($login_id); ?>">
					<input type="hidden" name="book_name" value="<?php print($book_name); ?>">
					<input type="hidden" name="author" value="<?php print($author); ?>">
					<input type="hidden" name="price" value="<?php print($price); ?>">
					<input type="hidden" name="Q1" value="<?php print($Q1); ?>">
					<input type="hidden" name="Q2" value="<?php print($Q2); ?>">
					<input type="hidden" name="Q3" value="<?php print($Q3); ?>">
					<input type="hidden" name="Q4" value="<?php print($Q4); ?>">
					<input type="hidden" name="category" value="<?php print($category); ?>">
					<input type="submit" class="btn_type_submit recommend_form_btn" value="投稿する">
				</form>
			</div>
		</div>
		<div class="formbox_below">
			<div class="formbox_below_inner">
				<i class="far fa-arrow-alt-circle-right"></i>
				<a href="RecommendformController.php">投稿フォームに戻る</a>
			</div>
			<div class="formbox_below_inner">
				<i class="far fa-arrow-alt-circle-right"></i>
				<a href="MypageController.php">マイページに戻る</a>
			</div>
			<div class="formbox_below_inner">
				<i class="far fa-arrow-alt-circle-right"></i>
				<a href="../index.php">ホームに戻る</a>
			</div>
		</div>
	</main>
	<footer>
		<small>Copyright &copy; Book Waver All Rights Reserved.</small>
	</footer>
</body>

</html>