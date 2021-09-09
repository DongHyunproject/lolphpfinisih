
<?php
session_start();
$con=mysqli_connect("localhost","root","ehdgus48350","lol");
$password=$_POST['password'];
$password_hash=hash("sha256",$password);
$email=$_POST['email'];
if(isset($_POST['update_image'])){
	$loginid=$_SESSION['loginid'];
	$update_date=date("Y-m-d h:i:s");

	$new_image=$_FILES['new_image']['name'];
	$old_image=$_POST['image_old'];
	$new_image_path="./upload/".$new_image;

	if(!empty($loginid)&&!empty($password_hash)){
		$sql=mysqli_query($con, "SELECT * FROM lol.member where loginid='{$loginid}' AND password='{$password_hash}'");
		if(mysqli_num_rows($sql)>0){
			$row=mysqli_fetch_assoc($sql);
			$_SESSION['loginid']=$loginid;
			$_SESSION['email']=$row['email'];

			if(isset($_SESSION['loginid'])&& isset($_SESSION['loginid'])){

				if($new_image!=''){
					$update_filename=$_FILES['new_image']['name'];
				}else {
					$update_filename=$old_image;

				}
				$query_update="UPDATE lol.member SET email='$email',signup_update='$update_date', profile_img='$update_filename' where loginid='$loginid'";
				$query_update_run=mysqli_query($con,$query_update);

				if($query_update_run){
					if($_FILES['new_image']['name']!=''){
						move_uploaded_file($_FILES["new_image"]["tmp_name"],$new_image);
						unlink("upload/".$old_image);
					}

					echo "<script>
    alert('수정이 완료되었습니다.');
    location.href='Mypage.php';</script>";
					/*$_SESSION['status']="수정이 완료되었습니다.";
					header('Location: board.php');*/
				}else {
					echo "<script>
    alert('수정을 실패했습니다.');
    location.href='Mypage.php';</script>";
					/*	$_SESSION['status']="수정을 실패했습니다.";
						header('Location: board.php');*/
				}

			}else {
				echo "세션문제가 발생했습니다. ".$_SESSION['loginid'].$_SESSION['loginid'];
			}



		}else {echo "<script>
    alert('비밀번호가 틀렸습니다');
    location.href='Mypage.php';</script>";

		}
	}else {echo "<script>
    alert('비밀번호를 입력하세요')</script>";

	}





}
/*삭제 */

if(isset($_POST['delete_image'])){
	$idx=$_POST['delete_idx'];
	$delete_hidden_image=$_POST['delete_hidden_image'];

	$query_delete="delete from lol.board where idx = '$idx'";
	$query_delete_run=mysqli_query($con,$query_delete);

	if($query_delete_run){
		unlink("upload/".$delete_hidden_image);

		echo "<script>
    alert('삭제가 완료되었습니다.');
    location.href='board.php';</script>";

		/*	$_SESSION['status']="삭제가 완료되었습니다.";
			header('Location: board.php');*/
	}else {

		echo "<script>
    alert('삭제를 실패했습니다.');
    location.href='board.php';</script>";
		/*
				$_SESSION['status']="삭제를 실패했습니다.";
				header('Location: board.php');*/
	}

}


?>