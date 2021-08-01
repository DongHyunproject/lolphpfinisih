<?php
error_reporting( E_ALL );
ini_set( "display_errors", 1 );
session_start();
$con=mysqli_connect("localhost","root","ehdgus48350","adminpanel");

/*if ($con){
	echo "DB 연결 성공<p>";
} else {
	echo "DB 연결 실패<p>";
	mysqli_connect_error();
	$con -> connect_error;
}
*/

echo "1. ";

if(isset($_POST['save_stud_image'])){

	$name=$_POST['stud_name'];
	$class=$_POST['stud_class'];
	$phone=$_POST['stud_phone'];
	$image=$_FILES['stud_image']['name'];
	$image_path="./upload/".$image;

/* 이미지 확장자 'glf','png','jpg','jpeg' 만 허용 */
	$allowed_extension=array('glf','png','jpg','jpeg');
	$filename=$image;
	$file_extension=pathinfo($filename,PATHINFO_EXTENSION);
	if(!in_array($file_extension,$allowed_extension)){
		/* 이미지 확장자 'glf','png','jpg','jpeg' 가 아닐경우 */

     $_SESSION['status']="'glf','png','jpg','jpeg'만 등록가능합니다.";
		header('Location: create.php');

	}else {
		/* 이미지 확장자 'glf','png','jpg','jpeg' 일 경우 */


	/*이미지 중복체크*/
		$sql="SELECT * FROM adminpanel.student where stud_image='{$image}' ";
		$res=$con->query($sql);
		if($res->num_rows>0){
			/*중복되는 이미지 파일이 있을 경우*/

			$filename=$_FILES['stud_image']['name'];
			$_SESSION['status']="이미 존재하는 이미지입니다".$filename;
			header('Location: create.php');

		}


	else {	/*중복되는 이미지 파일이 없을 경우*/


		$query="INSERT INTO adminpanel.student
    ( stud_name, stud_class, stud_phone, stud_image) 
    values ('$name','$class','$phone','$image_path')";


		$query_run=mysqli_query($con,$query);


		if($query_run){
			move_uploaded_file($_FILES["stud_image"]["tmp_name"],$image_path);
			$_SESSION['status']="이미지 저장 완료";
			header('Location: create.php');

		}
		else {
			$_SESSION['status']="이미지 저장 실패";
			header('Location: create.php');

		}

	}

	}

}

/*업데이트*/
         if(isset($_POST['update_stud_image'])){
         	$stud_id=$_POST['stud_id'];
	         $name=$_POST['stud_name'];
	         $class=$_POST['stud_class'];
	         $phone=$_POST['stud_phone'];

	         $new_image=$_FILES['stud_image']['name'];
	         $old_image=$_POST['stud_image_old'];
	         $new_image_path="./upload/".$new_image;

	         if($new_image!=''){
	         	$update_filename=$_FILES['stud_image']['name'];
          }else {
	         	$update_filename=$old_image;

          }
	         	$query_update="UPDATE adminpanel.student SET stud_name='$name',stud_class='$class' ,stud_phone='$phone', stud_image='$update_filename' where id='$stud_id'";
	         	$query_update_run=mysqli_query($con,$query_update);

	         	if($query_update_run){
	         		if($_FILES['stud_image']['name']!=''){
			            move_uploaded_file($_FILES["stud_image"]["tmp_name"],$new_image);
			           unlink("upload/".$old_image);
            }


               $_SESSION['status']="수정이 완료되었습니다.";
		            header('Location: index.php');
           }else {
		            $_SESSION['status']="수정을 실패했습니다.";
		            header('Location: index.php');
           }




         }


         if(isset($_POST['delete_stud_image'])){
         	$id=$_POST['delete_id'];
	         $del_stud_image=$_POST['del_stud_image'];

	         $query_delete="delete from adminpanel.student where id = '$id'";
	         $query_delete_run=mysqli_query($con,$query_delete);

	         if($query_delete_run){
	         	unlink("upload/".$del_stud_image);
		         $_SESSION['status']="삭제가 완료되었습니다.";
		         header('Location: index.php');
          }else {
		         $_SESSION['status']="삭제를 실패했습니다.";
		         header('Location: index.php');
          }

         }

?>