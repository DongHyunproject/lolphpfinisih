<?php
session_start();
/*error_reporting( E_ALL );
ini_set( "display_errors", 1 );*/
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
<style>
/*

*/
    .navbar .navbar-nav {

        display: inline-block;

        float: none;

    }



    .navbar .navbar-collapse {

        text-align: center;

    }


</style>

<body>




   <div class="container mt-5">
	   <div class="row">
		   <div class="col-md-12">
			   <div class="card">
				   <div class="card-header bg-primary">
                       <h4 class="text-white">게시판<?php echo $_SESSION['status'];  ?>  </h4>

				   </div>
                   <div class="card-body">
                       <?php
                       $con=mysqli_connect("localhost","root","ehdgus48350","adminpanel");
                       $query="select * from adminpanel.student order by id desc ";
                       $query_run=mysqli_query($con,$query);


                       ?>
                       <table class="table">
                           <thead>
                           <tr>
                               <th>글 번호</th>
                               <th>제    목</th>
                               <th>내    용</th>
                               <th>phone no</th>
                               <th>이미지</th>
                               <th>edit</th>
                               <th>delete</th>

                           </tr>
                           </thead>
                           <tbody>
                           <?php
                           if(mysqli_num_rows($query_run)>0){
                               foreach ($query_run as $row){
                                   ?>
                                   <tr>
                                       <td><?php echo $row['id']; ?></td>
                                       <td><a href="/phpimagecrud/read.php?id=<?php echo $row['id']; ?>"> <?php echo $row['stud_name']; ?></a></td>
                                       <td><?php echo $row['stud_class']; ?></td>
                                       <td><?php echo $row['stud_phone']; ?></td>
<!--                                    <td><?php /*echo $row['stud_image']*/?></td>
-->
                                       <td>
                                       <img src="<?php echo $row['stud_image']; ?>" width="100" height="100" alt="image입니다">

                                           </td>
                                       <td>
                                           <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-info">edit</a>

                                       </td>
                                       <td>
                                           <form action="code.php" method="post"><!--delete-->
                                               <input type="hidden"  name="delete_id" value="<?php echo $row['id']; ?>" >
                                               <input type="hidden" name="del_stud_image" value="<?php echo $row['stud_image']; ?>">
                                               <button type="submit" name="delete_stud_image" class="btn btn-danger">delete</button>


                                           </form>

                                       </td>
                                   </tr>
                                   <?php

                               }
                           }else {
                               ?>
                           <tr>
                               <td>해당 데이터가 없습니다.</td>
                           </tr>
                           <?php
                           }

                           ?>
                           </tbody>


                       </table>

                   </div>

			   </div>

		   </div>
	   </div>

   </div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>
