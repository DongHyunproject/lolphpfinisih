<?php
?>
<?php
/*
error_reporting( E_ALL );
ini_set( "display_errors", 1 );*/
session_start();
if(isset($_SESSION['status'])) {
	unset( $_SESSION['status'] );
}

?>

<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<title>Hello, world!</title>
</head>
<body>


<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 2: Separate Popper and Bootstrap JS -->

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
<script src ="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>

</body>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
                   <h4 style="text-align: center"> 프로필 수정하기</h4>
                        <button type="submit" name="update_image" style="float: right" class="btn btn-primary">비밀번호 수정하기</button>


                </div>
				<div class="card-body">

					<?php
					$loginid=$_SESSION['loginid'];
					$con=mysqli_connect("localhost","root","ehdgus48350","lol");

					$query="select * from lol.member where loginid='$loginid'";

					$query_run=mysqli_query($con,$query);


					if(mysqli_num_rows($query_run)>0){
					foreach ($query_run as $row){

					$idx=$row['idx'];
					$profile_img=$row['profile_img'];
					$signup_date=$row['signup_date'];
					$email=$row['email'];
					$password=$row['password'];

					?>
                        <div class="field image"  style="text-align: center" >
					<img src="<?php echo $row['profile_img']; ?>" style=" object-fit: cover;border-radius: 50%;"   width="300px" height="300px" alt="image가 없습니다">

                            <label style="margin-top: 30px">프로필 이미지:
                                <input type="file" name="profile_img" ></label>
                        </div>
                    <h1><?php echo "나의 아이뒤 :  $loginid"; ?></h1>

					<form action="Mypage_modify_ok.php" method="post"  enctype="multipart/form-data">
						<div class="form-group">
							<label for="">이메일</label>
							<input type="text" name="email"  class="form-control" value="<?php echo $row['email']; ?>" >

						</div>
                        비밀번호:
                        <input type="text" name="password"  class="form-control" >


				<div class="form-group" style="text-align: center; margin-top: 20px">

                    <button type="submit" name="update_image" class="btn btn-primary">수정완료</button>

				</div>
				</form>
				<?php
				}
				}else {
					echo "데이터가 없습니다";


				}

				?>








			</div>

		</div>

	</div>


</div>

</div>

</html>

