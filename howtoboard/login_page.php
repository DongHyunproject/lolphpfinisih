<?php
include "/db.php"; ?>
<!DOCTYPE html>
<head>
	<meta charset="utf-8" />

	<link rel="stylesheet" type="text/css" href="/howtoboard/common.css" />
</head>
<body>
<div id="login_box" style="margin-top: 50px">
	<h1 style="text-align: center; margin-top: 20px">로그인</h1>
	<form method="post" action="/member/login_ok.php">
		<table align="center" border="0" cellspacing="0" width="300">
			<tr>
				<td width="130" colspan="1">
				<input type="text" placeholder="아이뒤를 입력하세요" name="userid" class="inph">
				</td>
				<td rowspan="2" align="center" width="100" >
					<button type="submit" id="btn" >로그인</button>
				</td>
			</tr>
			<tr>
				<td width="130" colspan="1">
					<input type="password" placeholder="비밀번호를 입력하세요" name="userpw" class="inph">
				</td>
			</tr>
			<tr>
				<td colspan="3" align="center" class="mem">
					<a href="/member/member.php">회원가입</a>
				</td>
			</tr>
		</table>
	</form>
</div>
</body>
</html>