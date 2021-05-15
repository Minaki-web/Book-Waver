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
	<title>詳細ページ | Book Waver</title>
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
	<script src="../js/bookwaver.js"></script>
	<script src="../js/jquery.dropdown.js"></script>
	<script>
		$(window).on('load', function() {
			$('body').removeClass('preload');
		});
		$(document).ready(function() {
			$('#navi').dropdown();
		});
	</script>
</head>

<body>
	<header>
		<div class="header_flex">
			<div>
				<h1><a href="../index.php">Book Waver</a></h1>
				<h2 class="header_h2">みんなの書評を分かりやすく見たり、自分が直感的に書評できるサイト！</h2>
			</div>
			<nav>
				<?php if(isset($_SESSION["login_id"])){ ?>
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
				<?php }else{ ?>
				<a href="LoginFormController.php">ログイン・会員登録</a>
				<?php } ?>
			</nav>
		</div>
	</header>
	<main>
		<h3>詳細ページ</h3>
		<div class="book_info_box">
			<div class="book_info_box_inner-left">
				<?php foreach($posts as $post){
					$_SESSION["post"] = $post;
				?>
				<p class="meta-post_id"><?php print($post["post_id"]);?></p>
				<p class="meta-date-for-sp"><?php print($post["date"]); ?></p>
				<div class="info__meta">
					<p class="meta-cat"><?php print($post["category"]); ?></p>
					<p class="meta-author">投稿主：<?php print($post["login_id"]); ?></p>
				</div>
				<h4 class="info-ttl"><?php print(htmlentities($post["book_name"], ENT_QUOTES));?></h4>
				<h4 class="info-author"><?php print(htmlentities($post["author"], ENT_QUOTES)); ?></h4>
				<table class="info-desc">
					<tr>
						<td>価格</td>
						<td>：</td>
						<td class="info-val">&yen;<?php	print($post["price"]); ?></td>
					</tr>
					<tr>
						<td>初めて読んだ時の感想</td>
						<td>：</td>
						<td class="info-val"><?php print($post["Q1"]); ?></td>
					</tr>
					<tr>
						<td>繰り返し読みたいですか</td>
						<td>：</td>
						<td class="info-val"><?php print($post["Q2"]); ?></td>
					</tr>
					<tr>
						<td>それはどのくらいの間隔ですか</td>
						<td>：</td>
						<td class="info-val"><?php print($post["Q3"]); ?></td>
					</tr>
					<tr>
						<td>おすすめ度</td>
						<td>：</td>
						<td class="info-val"><?php if($post["Q4"] == "5"){ $star = "★★★★★"; }else if($post["Q4"] == "4"){ $star = "★★★★☆"; }else if($post["Q4"] == "3"){ $star = "★★★☆☆"; }else if($post["Q4"] == "2"){ $star = "★★☆☆☆"; }else if($post["Q4"] == "1"){ $star = "★☆☆☆☆"; } ?>
							<?php print($star); ?></td>
					</tr>
				</table>
			</div>
			<div class="book_info_box_inner-right">
				<div>
					<p class="meta-date"><?php print($post["date"]); ?></p>
					<a class="btn_type_big btn-search" href="https://www.amazon.co.jp/s?k=<?php print(htmlentities($post["book_name"], ENT_QUOTES)); ?>&i=stripbooks&__mk_ja_JP=%E3%82%AB%E3%82%BF%E3%82%AB%E3%83%8A&ref=nb_sb_noss_2" target="_blank">Amazonで見る<i class="fas fa-external-link-alt"></i></a>
					<a class="btn_type_big btn-search" href="https://books.rakuten.co.jp/search?sitem=<?php print(htmlentities($post["book_name"], ENT_QUOTES)); ?>&g=000&l-id=pc-search-box&x=0&y=0" target="_blank">楽天Booksで見る<i class="fas fa-external-link-alt"></i></a>
				</div>
				<div class="posting_controller">
					<?php if(isset($_SESSION["login_id"])){
						if($_SESSION["login_id"] == $post["login_id"]){?>
						<a href="PostingChangeFormController.php">投稿内容変更</a>
						<a href="PostingDeleteFormController.php">投稿削除</a>
					<?php }	else if($_SESSION["login_id"] == "admin"){ ?>
						<a href="PostingDeleteByAdminController.php">投稿削除</a>
					<?php } } ?>
				</div>
			</div>
			<?php } ?>
		</div>
	</main>
	<footer>
		<small>Copyright &copy; Book Waver All Rights Reserved.</small>
	</footer>
</body>

</html>