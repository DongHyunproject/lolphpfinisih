<?php
?>

<!-- login.php -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="default.css">
	<link rel="stylesheet" href="style2.css?ver=6">
	<title>Sung 영화 리뷰</title>
</head>
<body>
<header>
	<nav id="navBar">
		<div class="navBarCon">
			<div class="navBarleft">
				Sung`s 영화 리뷰
			</div>
			<div class="navBarItem">
				<ul>
					<a href="../main.php"><li>홈으로</li></a>
					<a href="../border/review.php"><li>리뷰 보기</li></a>
				</ul>
			</div>
			<div class="navBarRight"></div>
			<div class="navBarLogin">
				<a href="login.php">로그인</a>
			</div>
		</div>
	</nav>
</header>
<section>
	<div class="mainCon">
		<div class="loginTitle">로그인</div>
		<form action="member_process.php?mode=login" method="post" class="loginForm">
			<p class="loginId">아이디 : <input type="text" name="userid"></p>
			<p class="loginPw">비밀번호 : <input type="password" name="pw"></p>
			<div class="loginButton">
				<input type="submit" value="로그인">
				<input type="button" value="취소" onclick="location.href='../main.php'">
			</div>
		</form>
		<div class="registerAndFind">
			<a href="register.php">회원가입</a>&nbsp;|
			<a href="">아이디/비밀번호 찾기</a>
		</div>
	</div>
</section>
<footer></footer>
</body>
</html>
