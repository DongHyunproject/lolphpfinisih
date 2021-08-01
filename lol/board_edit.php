<?php
error_reporting( E_ALL );
ini_set( "display_errors", 1 );
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
					<h4> 수정하기</h4>
				</div>
				<div class="card-body">

					<?php
					$con=mysqli_connect("localhost","root","ehdgus48350","lol");

					$idx=$_GET['idx'];
					$query="select * from lol.board where idx='$idx'";
					$query_run=mysqli_query($con,$query);

					if(mysqli_num_rows($query_run)>0){
					foreach ($query_run as $row){
					?>
					<form action="board_curd_ok.php" method="post"  enctype="multipart/form-data">
						<input type="hidden" name="idx"  value="<?php echo $row['idx']; ?>">
                        <div class="form-group">
                            <label for="">제목</label>
                            <input type="text" name="title" required class="form-control" value="<?php echo $row['title']; ?>" >

                        </div>

						<!--textarea-->
						<div class="form-group">
							<label for="exampleFormControlTextarea1">내용 </label>
							<textarea class="form-control rounded-0" name="content"  rows="10"><?php echo $row['content']; ?></textarea>
						</div>




						<div class="form-group">
							<label for="">작성자</label>
							<input type="text" name="writer"  required class="form-control" value="<?php echo $row['writer']; ?>" placeholder="전번을 입력하세요.">

						</div>
						<div class="form-group">
							<label for="">프로필</label>
							<input type="file" name="new_image" value="<?php echo $row['img']; ?>" class="form-control" >
							<input type="hidden" name="image_old" value="<?php echo $row['img']; ?>">
						</div>
						<div class="form-group" style="text-align: center" ">
						<img src="<?php echo $row['img']; ?>"   width="300px" height="300px" alt="image가 없습니다">


				</div>


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
