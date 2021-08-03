
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Title</title>
</head>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="main.js"></script>
<script src="jquery_cookie.js"></script>

<body>
<?php if(!isset($_COOKIE['home_cookie_bar'])){?>



<div class="stringPopup">
	<div class="cookie-container" >
		<p>우리 "LoL Community" 사이트는 당신의 쾌적한 서비스 사용을 위해서 쿠키를 이용해서
			당신에 대한 정보를 수집할 것입니다.
			<br>이와 관련한
			<a href="#">개인정보관련정책</a>과  <a href="#">쿠키 관련 정책</a>을 확인하세요.</p>

		<button class="cookie-btn"><!-- onclick="setCookie('consnet','yes',1)"-->
			동의합니다.
		</button>
		<div class="btnWrap"><a href="javascript:void(0);" class="btn3 yesiagree">동의합니다</a>
			<a href="#" class="btn3">동의하지 않습니다</a>
		</div>
	</div>

</div>
<?php }?>

</body>
</html>
