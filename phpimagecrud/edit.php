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
                    <h4> php image curd test <?php $id=$_GET['id']; echo "게시물 번호?= $id" ?></h4>
                </div>
                <div class="card-body">

                    <?php
                    $con=mysqli_connect("localhost","root","ehdgus48350","adminpanel");

                    $id=$_GET['id'];
                    $query="select * from adminpanel.student where id='$id'";
                    $query_run=mysqli_query($con,$query);

                    if(mysqli_num_rows($query_run)>0){
                    foreach ($query_run as $row){
                    ?>
                        <form action="code.php" method="post"  enctype="multipart/form-data">
                            <input type="hidden" name="stud_id"  value="<?php echo $row['id']; ?>">

                            <!--textarea-->
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">이름 </label>
                                <textarea class="form-control rounded-0" name="stud_name" rows="10"></textarea>
                            </div>



                            <div class="form-group">
                                <label for="">반</label>
                                <input type="text" name="stud_class" required class="form-control" value="<?php echo $row['stud_class']; ?>" placeholder="반을 입력하세요.">

                            </div>
                            <div class="form-group">
                                <label for="">전번</label>
                                <input type="text" name="stud_phone"  required class="form-control" value="<?php echo $row['stud_phone']; ?>" placeholder="전번을 입력하세요.">

                            </div>
                            <div class="form-group">
                                <label for="">프로필</label>
                                <input type="file" name="stud_image" value="<?php echo $row['stud_image']; ?>" class="form-control" >
                                <input type="hidden" name="stud_image_old" value="<?php echo $row['stud_image']; ?>">
                            </div>
                            <div class="form-group" style="text-align: center" ">
                                <img src="<?php echo $row['stud_image']; ?>"   width="300px" height="300px" alt="image가 없습니다">


                            </div>


                            <div class="form-group" style="text-align: center; margin-top: 20px">
                                <button type="submit" name="update_stud_image" class="btn btn-primary">수정완료</button>

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
