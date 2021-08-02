<?php
$con = mysqli_connect("localhost", "root", "ehdgus48350","image");

error_reporting( E_ALL );
ini_set( "display_errors", 1 );

if ($con){
	echo "DB 연결 성공<p>";
} else {
	echo "DB 연결 실패<p>";
	mysqli_connect_error();
	$con -> connect_error;
}
if(isset($_POST['upload'])){
    $file=$_FILES['image']['name'];

    $query="INSERT INTO image.upload(image) values ('$file')";

    $res=mysqli_connect($con,$query);
    if($res){
        move_uploaded_file($_FILES['image']['tmp_name'],"$file");
    }

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>image upload</title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
	>
	<style>


	</style>

</head>
<body>
<div class="container">
	<div class="col-md-12">
		<div class="row">
			<div class="col-md-6">
				<h3 class="text-center">
					upload image
				</h3>
				<form class="my-5" method="post" enctype="multipart/form-data">
<input type="file" name="image" class="form-control">
					<input type="submit" name="upload" value="upload" class="btn-success my-3" >


				</form>

			</div>
			<div class="col-md-6">
				<h3 class="text-center">
					이미지 보여주기
				</h3>
			</div>
		</div>


	</div>

</div>


</body>
</html>
