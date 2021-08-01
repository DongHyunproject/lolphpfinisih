<?php
session_start();
/*echo "php파일로부터 데이터 들고옴";*/

$connection=mysqli_connect("localhost", "root","ehdgus48350","chatapp");



$fname =$_POST['fname'];
$lname   =$_POST['lname'];
$email =$_POST['email'];
$password=$_POST['password'];

$img=$_FILES['profile_img']['name'];


if($img&$fname&$lname){


	$fname =$_POST['fname'];
	$lname   =$_POST['lname'];
	$email =$_POST['email'];
	$password=$_POST['password'];

	$img=$_FILES['profile_img']['name'];

	$image_path="upload/".$img;
	$write_date=date("Y-m-d h:i:s");

	/* 이미지 확장자 'glf','png','jpg','jpeg' 만 허용 */
	$allowed_extension=array('glf','png','jpg','jpeg');
	$filename=$img;
	$file_extension=pathinfo($filename,PATHINFO_EXTENSION);
	if(!in_array($file_extension,$allowed_extension)){
		/* 이미지 확장자 'glf','png','jpg','jpeg' 가 아닐경우 */

		?> echo "<script>
            alert('glf,png,jpg,jpeg만 등록가능합니다.');
            location.href='registration.php';</script>";
		<?php

		/*		$_SESSION['status']="'glf','png','jpg','jpeg'만 등록가능합니다.";*/
		/*		header('Location: board_create.php');*/

	}else {
		/* 이미지 확장자 'glf','png','jpg','jpeg' 일 경우 */

		$query="INSERT INTO chatapp.users
    ( fname, lname, email, password, img,user_date)
    values ('$fname','$lname ','$email ','$password','$image_path','$write_date')";


		$query_run=mysqli_query($connection,$query);


		if($query_run){
			move_uploaded_file($_FILES["profile_img"]["tmp_name"],$image_path);
			echo "<script>
    alert('이미지 저장을 완료했습니다');</script>";
			/*	$_SESSION['status']="이미지 저장 완료";
				header('Location: board.php');*/

		}
		else {
			echo "<script>
    alert('이미지 저장을 실패했습니다');
   </script>";
			/*	$_SESSION['status']="이미지 저장 실패";
				header('Location: board_create.php');*/

		}



	}

}



else {/*!empty($fname) && !empty($lname) && !empty($email) && !empty($password)*/
	echo "모든 입력칸에 입력하세요";
}








?>