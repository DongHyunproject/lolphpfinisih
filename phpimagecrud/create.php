<?php
error_reporting( E_ALL );
ini_set( "display_errors", 1 );
session_start();

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
					<h4> php image curd test</h4>
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


					<form action="code.php" method="post"  enctype="multipart/form-data">

                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Large textarea</label>
                            <textarea class="form-control rounded-0" name="stud_name" rows="10"></textarea>
                        </div>
				<!--	<div class="form-group" >
						<label for="">이름</label>
						<input type="text" name="stud_name" required class="form-control" placeholder="이름을 입력하세요.">

					</div>-->
					<div class="form-group">
						<label for="">반</label>
						<input type="text" name="stud_class"  required class="form-control" placeholder="반을 입력하세요.">

					</div>
					<div class="form-group">
						<label for="">전번</label>
						<input type="text" name="stud_phone" required class="form-control" placeholder="전번을 입력하세요.">

					</div>
					<div class="form-group">
						<label for="">프로필</label>
						<input type="file" name="stud_image" required class="form-control" >

					</div>
					<div class="form-group">
						<button type="submit" name="save_stud_image" required class="btn btn-primary">제출</button>

					</div>
					</form>




				</div>

			</div>

		</div>


	</div>

</div>

</html>
