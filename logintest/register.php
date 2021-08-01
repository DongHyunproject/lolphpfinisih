<?php
include './howtoboard/navbar.php';
?>
<!DOCTYPE html>
<html lnag="ko">
<head>
	<meta charset="UTF-8">
	<title>회원가입</title>
	<link rel="stylesheet" href="/example/new_main.css">

</head>
<body>


<!-- wrapper -->
<div id="wrapper">

	<!-- content-->
	<div id="content">
		<form action="/howtoboard/login.php" method="post">
			<!-- ID -->
			<div>
				<h1 class="registration_title">회원가입</h1>
				<h3 class="join_title">
					<label for="id">아이디</label>
				</h3>
				<span class="box int_id">
                        <input type="text" id="id" class="int" maxlength="20"
                               name="id"
                        ><input type="button" value="중복확인"></td>

					<span class="step_url"><!--@naver.com--></span>
                    </span>
				<span class="error_next_box"></span>
			</div>

			<!-- PW1 -->
			<div>
				<h3 class="join_title"><label for="pswd1">비밀번호</label></h3>
				<span class="box int_pass">
                        <input type="password" id="pswd1" class="int" maxlength="20"
                               name="pswd1"
                        >
                        <span id="alertTxt">사용불가</span>
					<!--    <img src="m_icon_pass.png" id="pswd1_img1" class="pswdImg">-->
                    </span>
				<span class="error_next_box"></span>
			</div>

			<!-- PW2 -->
			<div>
				<h3 class="join_title"><label for="pswd2">비밀번호 재확인</label></h3>
				<span class="box int_pass_check">
                        <input type="password" name="pswd2" id="pswd2" class="int" maxlength="20">
					<!--
											<img src="m_icon_check_disable.png" id="pswd2_img1" class="pswdImg">
					-->
                    </span>
				<span class="error_next_box"></span>
			</div>
			<div class="btn_area">
				<input type="submit" value="가입하기" id="btnJoin"
				       onclick="location.href='/howtoboard/login.php'"
				>
				<!--  <button type="button"  id="btnJoin"
						  onclick="location.href='/example/real_login.html'"
				  >-->
				<span><!--가입하기--></span>
				</button>
			</div>
		</form>
	</div>

	<!-- content-->

</div>



<!-- wrapper -->
<script src="main.js"></script>
</body>
</html>
m>