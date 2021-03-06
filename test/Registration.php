<?php
?>

<%@ page language="java" contentType="text/html; charset=UTF-8"
pageEncoding="UTF-8"%>
<!DOCTYPE html>

<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="<%=request.getContextPath()%>/resource/bootstrap-3.3.2-dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="<%=request.getContextPath()%>/resource/bootstrap-3.3.2-dist/css/bootstrap-theme.min.css" rel="stylesheet">
	<link href="<%=request.getContextPath()%>/resource/css/join.css" rel="stylesheet">

	<!-- IE8 에서 HTML5 요소와 미디어 쿼리를 위한 HTML5 shim 와 Respond.js -->
	<!-- WARNING: Respond.js 는 당신이 file:// 을 통해 페이지를 볼 때는 동작하지 않습니다. -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<title>회원가입</title>

	<script src="<%=request.getContextPath()%>/resource/js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript">
        $(function() {
            $('#joinBtn').click(function() {

                var userId = $('#userId');
                var userName = $('#userName');
                var userPw = $('#userPw');
                var pwCon = $('#pwCon');
                var userEmail = $('#userEmail');
                var address = $('#address');
                var phone = $('#phone');

                if(userId.val() == ''){
                    alert('아이디를 입력해주세요.')
                    userId.focus();
                    return;
                }
                if(userName.val() == ''){
                    alert('회원명을 입력해주세요.')
                    userName.focus();
                    return;
                }
                if(userPw.val() == ''){
                    alert('패스워드를 입력해주세요.')
                    userPw.focus();
                    return;
                }
                if(pwCon.val() == ''){
                    alert('패스워드확인을 입력해주세요.')
                    pwCon.focus();
                    return;
                }
                if(userPw.val() != pwCon.val()){
                    alert('패스워드가 일치하지 않습니다.')
                    userPw.val('');
                    pwCon.val('');
                    pw.focus();
                    return;
                }
                if(userEmail.val() == ''){
                    alert('이메일을 입력해주세요.')
                    userEmail.focus();
                    return;
                }
                if(address.val() == ''){
                    alert('주소를 입력해주세요.')
                    address.focus();
                    return;
                }
                if(phone.val() == ''){
                    alert('휴대전화번호를 입력해주세요.')
                    phone.focus();
                    return;
                }
                $('#join').submit();
            });
        });
	</script>
</head>
<body>
<!--
	실습1. 부트스트랩을 활용하여 회원가입폼을 작성하고 유효성 검사를 하여라.
		폼필드: 아이디, 회원명, 패스워드, 패스워드확인, 이메일, 주소, 휴대전화번호
  -->

<div class="container-fluid" >
	<div class="join-title"><h1>JOIN</h1></div>
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			<div class="panel panel-default">
				<div class="panel-body">
					<form id="join" action="<%=request.getContextPath()%>/join.jsp" method="post">
						<div class="form-group">
							<label for="userId">아이디</label>
							<input type="text" id="userId" name="userId" class="form-control" placeholder="아이디">
						</div>
						<div class="form-group">
							<label for="userName">회원명</label>
							<input type="text" id="userName" name="userName" class="form-control" placeholder="회원명">
						</div>
						<div class="form-group">
							<label for="userPw">패스워드</label>
							<input type="password" id="userPw" name="userPw" class="form-control" placeholder="패스워드">
						</div>
						<div class="form-group">
							<label for="pwCon">패스워드확인</label>
							<input type="password" id="pwCon" name="pwCon" class="form-control" placeholder="패스워드확인">
						</div>
						<div class="form-group">
							<label for="userEmail">이메일</label>
							<input type="text" id="userEmail" name="userEmail" class="form-control" placeholder="이메일">
						</div>
						<div class="form-group">
							<label for="address">주소</label>
							<input type="text" id="address" name="address" class="form-control" placeholder="주소">
						</div>
						<div class="form-group">
							<label for="phone">휴대전화번호</label>
							<input type="text" id="phone" name="phone" class="form-control" placeholder="휴대전화번호">
						</div>
						<button type="button" id="joinBtn" class="btn btn-info btn-lg btn-block">JOIN</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="footer-text">
			ksmart.or.kr 한국스마트정보교육원 35기
		</div>
	</div>
</div>

<script src="<%=request.getContextPath()%>/resource/bootstrap-3.3.2-dist/js/bootstrap.min.js"></script>
</body>
</html>