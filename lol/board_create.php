<?php
/*error_reporting( E_ALL );
ini_set( "display_errors", 1 );*/
session_start();
if(isset($_SESSION['status'])) {
	unset( $_SESSION['status'] );
}
$writer=$_SESSION['loginid'];

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

<div class="container" style="margin-top: 100px">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h4> 글쓰기 </h4>
				</div>
				<div class="card-body">

					<?php
					if(isset($_SESSION['status']) && $_SESSION !=''){
						?>
						<div class="alert alert-warning alert-dismissible fade show" role="alert">
							<strong>저장 결과 : </strong> <?php echo $_SESSION['status'];  ?>
							<button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>

						<?php
						unset($_SESSION['status']);
					}


					?>


					<form action="board_curd_ok.php" method="post"  enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="">제목</label>
                            <input type="text" name="title"  required class="form-control" placeholder="제목을 입력하세요.">

                        </div>
						<div class="form-group">
							<label for="exampleFormControlTextarea1">내용</label>
							<textarea class="form-control rounded-0" name="content" rows="10" placeholder="내용을 입력하세요"></textarea>
						</div>
						<!--	<div class="form-group" >
								<label for="">이름</label>
								<input type="text" name="stud_name" required class="form-control" placeholder="이름을 입력하세요.">

							</div>-->

						<div class="form-group">
							<label for=""></label>
							<input type="hidden" name="writer"value="<?php echo $_SESSION['loginid']; ?>" required class="form-control" placeholder="작성자">

						</div>
						<div class="form-group">
							<label for="">프로필</label>
							<input type="file" name="profile_img"  class="form-control" >

						</div>
						<div class="form-group" style="text-align: center; margin-top: 20px">
							<button type="submit"  name="save_image"  class="btn btn-primary">글쓰기 완료</button>

						</div>

					</form>




				</div>

			</div>

		</div>


	</div>

</div>

</html>
