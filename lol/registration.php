<?php
?>

<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<title>채팅</title>
	<link rel="stylesheet"href="style.css">
	<link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">


</head>
<body>

<div class="wrapper">
	<section class="form signup">
		<header>LOL Community 회원가입 </header>
		<form action="registration_ok.php" method="post" enctype="multipart/form-data">
			            <div class="error-text"></div>
			                <div class="name-details">
				<div class="field input">
					<label>이름: </label>
					<input type="text" name="fname"  placeholder="이름을 입력하세요" required>
				</div>
				<div class="field input">
					<label>성: </label>
					<input type="text" name="lname" placeholder="성을 입력하세요" required>
				</div>
			</div>

			<div class="field input">
				<label>이메일: </label>
				<input type="text" name="email"  placeholder="이메일을 입력하세요" required>
			</div>
			<div class="field input">
				<label>비밀번호: </label>
				<i class="fas fa-eye"></i><!--패스워드 비밀번호 눈알 감시표시-->

				<input type="password" name="password" placeholder="비밀번호를 입력하세요" required>
			</div>
			<div class="field image"  >
				<label>프로필 이미지: </label>
				<input type="file" name="profile_img" >
			</div>
			<div class="field button">

				<input type="submit" value="회원가입" required name="save_image" >
			</div>

		</form>
		<div class="link">회원가입을 하셨나요?  <a href="login.php" <!--style="color: blue"-->>로그인하기</div>


	</section>
</div>
<script src="registration.js"></script>

</body>

</html>
