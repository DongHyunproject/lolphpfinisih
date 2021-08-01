<?php include "../db.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<style>
        form{
            position: absolute;
            left: 30%;}

	</style>
	<meta charset="utf-8" />
	<title>회원가입</title>
	<script>
        function checkid(){
            var userid = document.getElementById("uid").value;
            if(userid)
            {
                url = "check.php?userid="+userid;
                window.open(url,"chkid","width=300,height=100");
            }else{
                alert("아이디를 입력하세요");
            }
        }
	</script>
</head>
<body>
<form class="form" method="post" action="/howtoboard/member_ok.php" name="memform">
	<h1 style="text-align: center">회원가입 폼</h1>
	<fieldset>
		<legend style="text-align: center">입력사항</legend>
		<table>
			<tr>
				<td>아이디 : </td>
				<td><input type="text" size="35" name="userid" id="uid" placeholder="아이디" required>
					<input type="button" value="중복검사" onclick="checkid();" />
					<input type="hidden" value="0" name="chs" />
				</td>
			</tr>
			<tr>
				<td>비밀번호</td>
				<td><input type="password" size="35" name="userpw" placeholder="비밀번호" required></td>
			</tr>

			<tr>
				<td>이메일</td>
				<td><input type="text" name="email" required>@<select name="emadress"><option value="naver.com">naver.com</option><option value="nate.com">nate.com</option>
						<option value="hanmail.com">hanmail.com</option></select></td>
			</tr>
		</table>
		<input  type="submit" value="가입하기" />
		<button onClick="history.back(-1)">취소</button>
	</fieldset>
</form>
</body>
</html>