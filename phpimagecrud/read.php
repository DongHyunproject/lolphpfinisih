<?php
/*error_reporting( E_ALL );
ini_set( "display_errors", 1 );*/
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
                    <h4> 게시글 보기</h4>

                <div class="card-body">

					<?php
					$con=mysqli_connect("localhost","root","ehdgus48350","adminpanel");
					$id=$_GET['id'];
					echo $id;
					$query="select * from adminpanel.student where student.id='$id'";

					$query_run=mysqli_query($con,$query);
					foreach ($query_run as $row){

					    $stud_id=$row['id'];
                    $name=$row['stud_name'];
                    $class=$row['stud_class'];
                    $phone=$row['stud_phone'];
                    $image=$row['stud_image'];




						echo $row['id'];
						echo $row['stud_name'];
						echo $row['stud_class'];
						echo $row['stud_phone'];
						echo $row['stud_image'];



						?>

                        <?php
                    }
					?>
                    <div class="card-body">
                        sdfdssd

	                    <?php echo "$stud_id"; ?>
                    </div>
<!--
                    $stud_id=$row['id'];
                    $name=$row['stud_name'];
                    $class=$row['stud_class'];
                    $phone=$row['stud_phone'];

                    $image=$row['stud_image_old'];-->











            </div><!--card-body-->

        </div>

    </div>


</div>

</div>

    <td>
        <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-info">edit</a>

    </td>
    <form action="code.php" method="post"><!--delete-->
        <input type="hidden"  name="delete_id" value="<?php echo $row['id']; ?>" >
        <input type="hidden" name="del_stud_image" value="<?php echo $row['stud_image']; ?>">
        <button type="submit" name="delete_stud_image" class="btn btn-danger">delete</button>


    </form>


</html>
