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
		<p class="errormessage"><?php print($message);?></p>
		<div class="recommend_form_box">
			<form action="RecommendCheckController.php" method="post" class="recommend_form">
				<div class="column_flex">
					<section class="recommend_book_name recommend_form_section">
						<p class="recommend_form_heading">本の名前<span class="required">※必須,100文字以内</span></p>
						<input type="text" name="book_name" placeholder="例)こころ" maxlength="100" required>
					</section>
					<section class="recommend_book_author recommend_form_section">
						<p class="recommend_form_heading">著者<span class="required">※必須,100文字以内</span></p>
						<input type="text" name="author" placeholder="例)夏目漱石" maxlength="100" required>
					</section>
					<section class="recommend_price recommend_form_section">
						<p class="recommend_form_heading">価格<span class="required">※必須,半角数字のみ</span></p>
						<input type="text" name="price" placeholder="例)600" required>
					</section>
					<section class="recommend_category recommend_form_section">
						<p class="recommend_form_heading">ジャンル<span class="required">※必須</span></p>
						<select name="category" required>
							<option value="">ジャンルを選んでください</option>
							<option value="文芸">文芸</option>
							<option value="実用書">実用書</option>
							<option value="専門書">専門書</option>
							<option value="ビジネス">ビジネス</option>
							<option value="ライトノベル">ライトノベル</option>
							<option value="絵本">絵本</option>
							<option value="コミック">コミック</option>
							<option value="アート・スポーツ">アート・スポーツ</option>
						</select>
					</section>
					<section class="q1 recommend_form_section">
						<p class="recommend_form_heading">初めて読んだ時の感想<span class="required">※必須</span></p>
						<div class="q1_checkbox">
							<div class="q1_parts">
								<input type="checkbox" name="Q1[]" value="面白かった" id="fun">
								<label for="fun">面白かった</label>
							</div>
							<div class="q1_parts">
								<input type="checkbox" name="Q1[]" value="感動した" id="emotion">
								<label for="emotion">感動した</label>
							</div>
							<div class="q1_parts">
								<input type="checkbox" name="Q1[]" value="ワクワクした" id="excite">
								<label for="excite">ワクワクした</label>
							</div>
							<div class="q1_parts">
								<input type="checkbox" name="Q1[]" value="参考になった" id="reference">
								<label for="reference">参考になった</label>
							</div>
							<div class="q1_parts">
								<input type="checkbox" name="Q1[]" value="怖かった" id="scary">
								<label for="scary">怖かった</label>
							</div>
							<div class="q1_parts">
								<input type="checkbox" name="Q1[]" value="キュンキュンした" id="heart">
								<label for="heart">キュンキュンした</label>
							</div>
							<div class="q1_parts">
								<input type="checkbox" name="Q1[]" value="美しかった" id="beautiful">
								<label for="beautiful">美しかった</label>
							</div>
							<div class="q1_parts">
								<input type="checkbox" name="Q1[]" value="あまり面白くなかった" id="notgood">
								<label for="notgood">あまり面白くなかった</label>
							</div>
							<div class="q1_parts">
								<input type="checkbox" name="Q1[]" value="つまらなかった" id="bad">
								<label for="bad">つまらなかった</label>
							</div>
						</div>
					</section>
					<section class="q2 recommend_form_section">
						<p class="recommend_form_heading">繰り返し読みたいですか<span class="required">※必須</span></p>
						<div class="q2_radio">
							<div class="q2-parts">
								<input type="radio" name="Q2" value="そう思う" id="agree" required checked>
								<label for="agree">そう思う</label>
							</div>
							<div class="q2_parts">
								<input type="radio" name="Q2" value="そうでもない" id="notagree" required>
								<label for="notagree">そうでもない</label>
							</div>
						</div>
					</section>
					<section class="q3 recommend_form_section">
						<p class="recommend_form_heading">それはどのくらいの間隔ですか</p>
						<div class="q3_radio">
							<div class="q3_parts">
								<input type="radio" name="Q3" value="" id="none" checked>
								<label for="none">なし</label>
							</div>
							<div class="q3_parts">
								<input type="radio" name="Q3" value="明日にでも" id="tomorrow">
								<label for="tomorrow">明日にでも</label>
							</div>
							<div class="q3_parts">
								<input type="radio" name="Q3" value="1,2週間おき" id="afewweek">
								<label for="afewweek">1,2週間おき</label>
							</div>
							<div class="q3_parts">
								<input type="radio" name="Q3" value="1ヶ月おき" id="amonth">
								<label for="amonth">1ヶ月おき</label>
							</div>
							<div class="q3_parts">
								<input type="radio" name="Q3" value="半年おき" id="halfyear">
								<label for="halfyear">半年おき</label>
							</div>
							<div class="q3_parts">
								<input type="radio" name="Q3" value="1年おき" id="ayear">
								<label for="ayear">1年おき</label>
							</div>
						</div>
					</section>
					<section class="q4 recommend_form_section">
						<p class="recommend_form_heading">おすすめ度<span class="required">※必須,5が最大</span></p>
						<div class="q4_parts">
							<input type="radio" name="Q4" value="5" id="5" required>
							<label for="5">5</label>
							<input type="radio" name="Q4" value="4" id="4" required>
							<label for="4">4</label>
							<input type="radio" name="Q4" value="3" id="3" required checked>
							<label for="3">3</label>
							<input type="radio" name="Q4" value="2" id="2" required>
							<label for="2">2</label>
							<input type="radio" name="Q4" value="1" id="1" required>
							<label for="1">1</label>
						</div>
					</section>
					<input type="submit" value="入力確認画面に進む→" class="btn_type_submit recommend_form_btn">
				</div>
			</form>
		</div>
		<div class="formbox_below">
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