<?php
error_reporting( E_ALL );
ini_set( "display_errors", 1 );
session_start();
$con=mysqli_connect("localhost","root","ehdgus48350","lol");

/*if ($con){
	echo "DB 연결 성공<p>";
} else {
	echo "DB 연결 실패<p>";
	mysqli_connect_error();
	$con -> connect_error;
}
*/

echo "1. ";

if(isset($_POST['save_image'])){


	$content =$_POST['content'];
	$title   =$_POST['title'];
	$writer =$_POST['writer'];

	$img=$_FILES['profile_img']['name'];
	$image_path="upload/".$img;
	$write_date=date("Y-m-d h:i:s");

	/* 이미지 확장자 'glf','png','jpg','jpeg' 만 허용 */
	$allowed_extension=array('glf','png','jpg','jpeg');
	$filename=$img;
	$file_extension=pathinfo($filename,PATHINFO_EXTENSION);
	if(!in_array($file_extension,$allowed_extension)){
		/* 이미지 확장자 'glf','png','jpg','jpeg' 가 아닐경우 */

echo "<script>
    alert('glf,png,jpg,jpeg만 등록가능합니다.');
    location.href='board_create.php';</script>";

/*		$_SESSION['status']="'glf','png','jpg','jpeg'만 등록가능합니다.";*/
/*		header('Location: board_create.php');*/

	}else {
		/* 이미지 확장자 'glf','png','jpg','jpeg' 일 경우 */

			$query="INSERT INTO lol.board
    ( title, content, writer, wrtie_date, img)
    values ('$title','$content ','$writer ','$write_date','$image_path')";


			$query_run=mysqli_query($con,$query);


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

/*업데이트*/
if(isset($_POST['update_image'])){
	$idx=$_POST['idx'];
	$title=$_POST['title'];
	$content=$_POST['content'];
	$update_date=date("Y-m-d h:i:s");

	$new_image=$_FILES['new_image']['name'];
	$old_image=$_POST['image_old'];
	$new_image_path="./upload/".$new_image;

	if($new_image!=''){
		$update_filename=$_FILES['new_image']['name'];
	}else {
		$update_filename=$old_image;

	}
	$query_update="UPDATE lol.board SET title='$title',content='$content' ,update_date='$update_date', img='$update_filename' where idx='$idx'";
	$query_update_run=mysqli_query($con,$query_update);

	if($query_update_run){
		if($_FILES['new_image']['name']!=''){
			move_uploaded_file($_FILES["new_image"]["tmp_name"],$new_image);
			unlink("upload/".$old_image);
		}

		echo "<script>
    alert('수정이 완료되었습니다.');
    location.href='board.php';</script>";
		/*$_SESSION['status']="수정이 완료되었습니다.";
		header('Location: board.php');*/
	}else {
		echo "<script>
    alert('수정을 실패했습니다.');
    location.href='board.php';</script>";
	/*	$_SESSION['status']="수정을 실패했습니다.";
		header('Location: board.php');*/
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