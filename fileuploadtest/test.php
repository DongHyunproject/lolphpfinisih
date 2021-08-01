
<?php
error_reporting( E_ALL );
ini_set( "display_errors", 1 );
$db = mysqli_connect("localhost","root","ehdgus48350","testDB");


?>
<!DOCTYPE html>
<html>
<head>
	<title>Store and retrieve image from database in PHP</title>
</head>
<body>

<?php


if(isset($_POST["submit"]))
{
	$var1 = rand(1111,9999);  // generate random number in $var1 variable
	$var2 = rand(1111,9999);  // generate random number in $var2 variable
	echo "var 1=$var1 ";
	echo "var2=$var2 ";


	$var3 = $var1.$var2;  // concatenate $var1 and $var2 in $var3
	$var3 = md5($var3);   // convert $var3 using md5 function and generate 32 characters hex number
	echo "var3=$var3 ";

	$fnm = $_FILES["image"]["name"];    // get the image name in $fnm variable
	echo "fnm=.$fnm ";
	/*todo*/
	$dst = "./upload/".$var3.$fnm;  // storing image path into the {all_images} folder with 32 characters hex number and file name
	$dst_db = "./upload/".$var3.$fnm; // storing image path into the database with 32 characters hex number and file name
echo ".$dst";
	move_uploaded_file($_FILES["image"]["tmp_name"],$dst);  // move image into the {all_images} folder with 32 characters hex number and image name

	$check = mysqli_query($db,"insert into testDB.tbltest(fname,images) values('$_POST[fname]','$dst_db')");  // executing insert query

	if($check)
	{
		echo '<script type="text/javascript"> alert("Data Inserted Seccessfully!"); </script>';  // alert message
	}
	else
	{
		echo '<script type="text/javascript"> alert("Error Uploading Data!"); </script>';  // when error occur
	}
}
?>

<h2>Insert Data</h2>

<form method="post" enctype="multipart/form-data">
	<table border="2">
		<tr>
			<td>Enter Name</td>
			<td><input type="text" name="fname" placeholder="Enter Name" Required></td>
		</tr>
		<tr>
			<td>Select Image</td>
			<td><input type="file" name="image" Required></td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" name="submit" value="Upload"></td>
		</tr>
	</table>
</form>

<hr/>

<h2>All Records</h2>

<table border="2">
	<tr>
		<td>Sr.No.</td>
		<td>Name</td>
		<td>Images</td>
	</tr>

	<?php

	$records = mysqli_query($db,"select * from testDB.tbltest"); // fetch data from database

	while($data = mysqli_fetch_array($records))
	{
		?>
		<tr>
			<td><?php echo $data['id']; ?></td>
			<td><?php echo $data['fname']; ?></td>
			<td><img src="<?php echo $data['images']; ?>" width="100" height="100"></td>
		</tr>
		<?php
	}
	?>

</table>

<?php mysqli_close($db);  // close connection ?>

</body>
</html>