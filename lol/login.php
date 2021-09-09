<?php

?>

<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<title>롤 커뮤니티 로그인</title>
	<link rel="stylesheet"href="/lol/style.css">
	<link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">


</head>
<body>

<div class="wrapper">
	<section class="form login">
		<header>LOL Community 로그인 </header>
		<form action="login_ok.php" method="post" enctype="multipart/form-data" >
			<!--	<div class="error-text"></div>-->


			<div class="field input">
				<label>아이디
					<input type="text" name="loginid" placeholder="아아디를 입력하세요"> </label>
			</div>
			<div class="field input">
				<label>비밀번호
					<input type="password" name="password"  placeholder="비밀번호를 입력하세요"> </label>
				<i class="fas fa-eye"></i><!--패스워드 비밀번호 눈알 감시표시-->
			</div>

			<div class="field button" >

				<input type="submit"  value="로그인">
			</div>

		</form>
		<div class="link">회원가입을 아직 안 하셨나요? <a href="registration.php" style="color: blue">회원가입하기</div>
        <div class="link"> <a href="home.php" style="color: blue">메인페이지로 가기</div>



	</section>

</div>
<!--<script src="pass-show-hide.js"></script>
-->

<script src="login.js"></script>

</body>

</html>

