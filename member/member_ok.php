<?php
include  $_SERVER['DOCUMENT_ROOT']."/howtoboard/db.php";
error_reporting( E_ALL );
ini_set( "display_errors", 1 );


$userid = $_POST['userid'];
$userpw = $_POST['userpw'];
$email = $_POST['email'].'@'.$_POST['emadress'];

$sql = query("insert into member (id,pw,email) values('".$userid."','".$userpw."','".$email."')");

?>
<!DOCTYPE html>
<head>
	<meta charset="utf-8" />
	<title>회원가입 및 로그인 사이트</title>
	<link rel="stylesheet" type="text/css" href="/member/common.css" />
</head>
<body>
<meta charset="utf-8" />
<script type="text/javascript">alert('회원가입이 완료되었습니다.');</script>
<meta http-equiv="refresh" content="0 url=/member/login.php">
</body>
</html>