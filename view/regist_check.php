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
	<title>登録確認 | Book Waver</title>
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
	<script>
		$(function() {
			$(".toggle-password").on("click", function() {
				$(this).toggleClass("fa-eye-slash");
				let input = $(this).parent().prev("input");
				if (input.attr("type") == "password") {
					input.attr("type", "text");
				} else {
					input.attr("type", "password");
				}
			});
		});
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
				<a href="LoginFormController.php">ログイン・会員登録</a>
			</nav>
		</div>
	</header>
	<main>
		<h3>登録確認画面</h3>
		<form action="RegistController.php" method="post" class="formbox regist_form">
			<input type="text" name="login_id" autocomplete="off" value="<?php print($login_id); ?>" readonly>
			<div class="password_area">
				<input type="password" name="password" autocomplete="off" value="<?php print($password); ?>" readonly>
				<span class="field-icon">
					<i toggle="password-field" class="fas fa-eye toggle-password"></i>
				</span>
			</div>
			<input type="submit" value="登録する" class="btn_type_submit">
		</form>
		<div class="formbox_below">
			<div class="formbox_below_inner">
				<i class="far fa-arrow-alt-circle-right"></i>
				<a href="RegistFormController.php">登録画面に戻る</a>
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