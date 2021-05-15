<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta name="robots" content="none,noindex,nofollow">
	<meta name="description" content="ポチポチ選択するだけで書評ができます！">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Caudex&family=Noto+Sans+JP:wght@100;300;400;500;700&display=swap" rel="stylesheet">
	<link rel="shortcut icon" type="image/vnd.microsoft.icon" href="img/favicon.ico">
	<link rel="icon" type="image/vnd.microsoft.icon" href="img/favicon.ico">
	<link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="512x512" href="img/icon-512x512.png">
	<title>Book Waver</title>
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
	<script src="js/bookwaver.js"></script>
	<script src="js/jquery.dropdown.js"></script>
	<script>
		$(window).on('load', function() {
			$('body').removeClass('preload');
		});
		$(document).ready(function() {
			$('#navi').dropdown();
		});
	</script>
</head>

<body class="preload">
	<header>
		<div class="header_flex">
			<div>
				<h1><a href="index.php">Book Waver</a></h1>
				<h2 class="header_h2">みんなの書評を分かりやすく見たり、自分が直感的に書評できるサイト！</h2>
			</div>
			<nav>
				<?php if (isset($_SESSION["login_id"])) { ?>
					<a href='Controller/RecommendFormController.php' class="nav-for-pc">感想を投稿する</a>
					<ul id="navi">
						<li><a href="javascript:void(0);" class="dropdown_btn"><?php print($_SESSION["login_id"]); ?></a>
							<ul class="dropdown">
								<li><a href='Controller/MypageController.php'>マイページ</a></li>
								<li><a href='Controller/LogoutController.php'>ログアウト</a></li>
								<li class="nav-for-sp"><a href='Controller/RecommendFormController.php'>感想を投稿する</a></li>
							</ul>
						</li>
					</ul>
				<?php } else { ?>
					<a href="Controller/LoginFormController.php">ログイン・会員登録</a>
				<?php } ?>
			</nav>
		</div>
	</header>
	<main>
		<div class="content-1">
			<h3>ジャンル</h3>
			<ul class="upper_list flex-bb10 list-cat" role="list">
				<li>
					<a href="Controller/CategoryListController.php?category=文芸"><img src="img/Literature.png" alt="文芸"></a>
				</li>
				<li>
					<a href="Controller/CategoryListController.php?category=実用書"><img src="img/howto.png" alt="実用書"></a>
				</li>
				<li class="bookrack-for-sp"></li>
				<li>
					<a href="Controller/CategoryListController.php?category=専門書"><img src="img/Specializedbook.png" alt="専門書"></a>
				</li>
				<li class="bookrack-for-tb"></li>
				<li>
					<a href="Controller/CategoryListController.php?category=ビジネス"><img src="img/Business.png" alt="ビジネス"></a>
				</li>
			</ul>
			<ul class="under_list flex-bb10 list-cat" role="list">
				<li>
					<a href="Controller/CategoryListController.php?category=ライトノベル"><img src="img/Lightnovel.png" alt="ライトノベル"></a>
				</li>
				<li>
					<a href="Controller/CategoryListController.php?category=絵本"><img src="img/Picturebook.png" alt="絵本"></a>
				</li>
				<div class="bookrack-for-sp"></div>
				<li>
					<a href="Controller/CategoryListController.php?category=コミック"><img src="img/Comic.png" alt="コミック"></a>
				</li>
				<li class="bookrack-for-tb"></li>
				<li>
					<a href="Controller/CategoryListController.php?category=アート・スポーツ"><img src="img/ArtSports.png" alt="アート・スポーツ"></a>
				</li>
			</ul>
		</div>
		<?php
			if (isset($_SESSION["login_id"])) {
			} else { ?>
				<div class="content-2">
					<h3>会員登録してみんなへ自分の書評を投稿しよう！！</h3>
					<a href="Controller/RegistFormController.php" class="btn_type_big">会員登録ページに進む→</a>
				</div>
		<?php } ?>
	</main>
	<footer>
		<small>Copyright &copy; Book Waver All Rights Reserved.</small>
	</footer>
</body>

</html>