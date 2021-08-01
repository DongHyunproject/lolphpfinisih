<?php
session_start();
/*echo "php파일로부터 데이터 들고옴";*/

$connection=mysqli_connect("localhost", "root","ehdgus48350","chatapp");



$fname =$_POST['fname'];
$lname   =$_POST['lname'];
$email =$_POST['email'];
$password=$_POST['password'];

$img=$_FILES['profile_img']['name'];

if(!empty($fname) && !empty($lname) && !empty($email) && !empty($password)) {
	if ( ( filter_var( $email, FILTER_VALIDATE_EMAIL ) ) ) {/*이메일 형식일 경우*/
		/*이메일 중복확인 유무 체크*/
		$sql = mysqli_query( $connection, "SELECT email FROM chatapp.users WHERE email='{$email}'" );
		if ( mysqli_num_rows( $sql ) > 0 ) {
			/*이메일 중복일 경우 */
			echo "$email(은/는) 이미 존재합니다";
		} else {/*이메일 중복 아닐 경우 */


			if ( isset( $img ) ) {/*이미지가 있는 경우*/


				$fname    = $_POST['fname'];
				$lname    = $_POST['lname'];
				$email    = $_POST['email'];
				$password = $_POST['password'];

				$img = $_FILES['profile_img']['name'];

				$image_path = "upload/" . $img;
				$write_date = date( "Y-m-d h:i:s" );

				/* 이미지 확장자 'glf','png','jpg','jpeg' 만 허용 */
				$allowed_extension = array( 'glf', 'png', 'jpg', 'jpeg' );
				$filename          = $img;
				$file_extension    = pathinfo( $filename, PATHINFO_EXTENSION );
				if ( ! in_array( $file_extension, $allowed_extension ) ) {
					/* 이미지 확장자 'glf','png','jpg','jpeg' 가 아닐경우 */


					/*		$_SESSION['status']="'glf','png','jpg','jpeg'만 등록가능합니다.";*/
					/*		header('Location: board_create.php');*/

				} else {
					/* 이미지 확장자 'glf','png','jpg','jpeg' 일 경우 */

					$query = "INSERT INTO chatapp.users
    ( fname, lname, email, password, img,user_date)
    values ('$fname','$lname ','$email ','$password','$image_path','$write_date')";


					$query_run = mysqli_query( $connection, $query );


					if ( $query_run ) {
						move_uploaded_file( $_FILES["profile_img"]["tmp_name"], $image_path );
						echo "이미지 저장 완료";
						/*	$_SESSION['status']="이미지 저장 완료";
							header('Location: board.php');*/

					} else {
						echo "이미지 저장 실패";
						/*	$_SESSION['status']="이미지 저장 실패";
							header('Location: board_create.php');*/

					}


				}

			}
		}
	}else {/*	if((filter_var($email,FILTER_VALIDATE_EMAIL))){
*/
		echo "이메일 형식이 아닙니다. 이메일 형식으로 쓰세요";
	}
}
	else {/*!empty($fname) && !empty($lname) && !empty($email) && !empty($password)*/
		echo "모든 입력칸에 입력하세요";
	}




	?>