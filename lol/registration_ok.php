<?php

session_start();
/*echo "php파일로부터 데이터 들고옴";*/

$connection=mysqli_connect("localhost", "root","ehdgus48350","lol");



$loginid   = $_POST['loginid'];

$email    = $_POST['email'];
$password = $_POST['password'];
$password2=$_POST['password2'];
$isuser=$_POST['isuser'];//유저인지? 관리자인지? 구분
$img = $_FILES['profile_img']['name'];

$image_path = "upload/".$img;
date_default_timezone_set('Asia/Seoul');

$write_date = date( "Y-m-d H:i:s");


$password_hash=hash("sha256",$password);

if($isuser==1){
	/*관리자일 때*/
	echo "관리자입니다.";
}else {/*유저일때 */



	if(!empty($loginid)  && !empty($email) && !empty($password)) {
		if ( ( filter_var( $email, FILTER_VALIDATE_EMAIL ) ) ) {/*이메일 형식일 경우*/
			/*이메일 중복확인 유무 체크*/
			$sql = mysqli_query( $connection, "SELECT loginid FROM lol.member WHERE loginid='{$loginid}'" );
			if ( mysqli_num_rows( $sql ) > 0 ) {
				/*이메일 중복일 경우 */
				echo "$email(은/는) 이미 존재합니다";
			} else {/*이메일 중복 아닐 경우 */
				if ( $password !== $password2 ) { /*비밀번호 중복확인 실패한 경우*/
					echo "비밀번호가 일치하지 않습니다. 다시 확인해주세요";

				} else {   /*비밀번호 중복확인 성공한 경우*/





					if ( $img ) {
						/*이미지가 있는 경우*/


						/* 이미지 확장자 'glf','png','jpg','jpeg' 만 허용 */
						$allowed_extension = array( 'glf', 'png', 'jpg', 'jpeg' );
						$filename          = $img;
						$file_extension    = pathinfo( $filename, PATHINFO_EXTENSION );
						if ( ! in_array( $file_extension, $allowed_extension ) ) {
							/* 이미지 확장자 'glf','png','jpg','jpeg' 가 아닐경우 */
							echo "이미지 파일은 'glf','png','jpg','jpeg'만 등록가능합니다.";

							/*		$_SESSION['status']="'glf','png','jpg','jpeg'만 등록가능합니다.";*/
							/*		header('Location: board_create.php');*/

						} else {
							/* 이미지 확장자 'glf','png','jpg','jpeg' 일 경우 */

							$query = "INSERT INTO lol.member
    ( loginid, password, profile_img, signup_date, isuser)
    values ('$loginid','$password_hash','$image_path','$write_date','$isuser')";


							$query_run = mysqli_query( $connection, $query );


							if ( $query_run ) {
								move_uploaded_file( $_FILES["profile_img"]["tmp_name"], $image_path );
								echo "회원가입이 성공하였습니다.";

								/*	$_SESSION['status']="이미지 저장 완료";
									header('Location: board.php');*/

							} else {
								echo "이미지 저장 실패";
								/*	$_SESSION['status']="이미지 저장 실패";
									header('Location: board_create.php');*/

							}


						}

					} else {/*이미지 없을 경우*/
						$image_path='';
						$query = "INSERT INTO lol.member
    ( loginid, password, profile_img, signup_date, isuser)
    values ('$loginid','$password_hash','$image_path','$write_date','$isuser')";


						$query_run = mysqli_query( $connection, $query );
						if ( $query_run ) {
							echo "회원가입이 성공하였습니다.";
						} else {
							echo "데이터 처리부분이 잘못되었습니다.";
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





}








?>