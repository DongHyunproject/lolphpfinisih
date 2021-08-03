<?php

# create database connection
$connect = mysqli_connect("localhost","root","ehdgus48350","lol");
$password = $_POST['password'];
$password2 = $_POST['password2'];
$loginid=$_POST['loginid'];


if(!empty($_POST["loginid"])) {
	$query = "SELECT * FROM lol.member WHERE loginid='$loginid'";
	$result = mysqli_query($connect,$query);
	$count = mysqli_num_rows($result);
	if($count>0) {
		echo "<span style='color:red'>이미 사용중인 아이뒤 입니다.</span>";
		echo "<script>$('#submit').prop('disabled',true);</script>";
	}else{
		echo "<span style='color:green'> 사용가능한 아이뒤 입니다.</span>";
		echo "<script>$('#submit').prop('disabled',false);</script>";
	}
}


if(!empty($_POST['password'])){
	/*비밀번호 유효성검사 */
	/*비밀번호가 있을 경우*/
	$pw = $_POST['password'];
	$num = preg_match('/[0-9]/u', $pw);
	$eng = preg_match('/[a-zA-z]/u', $pw);
	$spe = preg_match("/[\!\@\#\$\%\^\&\*]/u",$pw);

	if(strlen($pw) < 10 || strlen($pw) > 20)
	{
		echo "<span style='color:red'>비밀번호는 영문, 숫자, 특수문자를 혼합하여 최소 10자리 ~ 최대 20자리 이내로 입력해주세요.</span>";
		echo "<script>$('#submit').prop('disabled',true);</script>";
	}

	else if(preg_match("/\s/u", $pw) == true)
	{
		echo "<span style='color:red'>비밀번호는 공백없이 입력해주세요.</span>";
		echo "<script>$('#submit').prop('disabled',true);</script>";

	}

	else if( $num == 0 || $eng == 0 || $spe == 0)
	{
		echo "<span style='color:red'>영문, 숫자, 특수문자를 혼합하여 입력해주세요.</span>";
		echo "<script>$('#submit').prop('disabled',true);</script>";


	}

	else {

		echo "<span style='color:green'>사용가능한 비밀번호 입니다.</span>";
		echo "<script>$('#submit').prop('disabled',false);</script>";
		/*비밀번호 없을 경우*/
	}


}

/*if($_POST['password2']) {


	if($password==$_POST['password2'])
	{
		echo "<span style='color:green'>비밀번호가 일치합니다.</span>";
		echo "<script>$('#submit').prop('disabled',false);</script>";



	}else {
		echo "<span style='color:red'>비밀번호가 일치하지 않습니다.</span>";
		echo "<script>$('#submit').prop('disabled',true);</script>";
 }



}*/



if(!empty($_POST['email'])){
	$email_check=$_POST['email'];
	if(filter_var( $email_check, FILTER_VALIDATE_EMAIL )){
		echo "<span style='color:green'>$email_check(은/는) 사용가능한 이메일 형식입니다.</span>";
		echo "<script>$('#submit').prop('disabled',false);</script>";


	}else {
		echo "<span style='color:red'>$email_check(은/는) 이메일형식이 아닙니다.</span>";
		echo "<script>$('#submit').prop('disabled',true);</script>";
	}


}

?>