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
    <style >
        #bo_line2  {
            width:880px;
            height:2px;
            background: lightgrey;
            margin-top:50px;
        }
        #bo_line{
            width:250px;
            height:2px;
            background: #ffffff;
            margin-top:20px;
        }
        .container{/*중앙정렬*/
        display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;}
    </style>
</head>
<body>


<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 2: Separate Popper and Bootstrap JS -->

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
<script src ="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>


</body>

<div class="container"  >
    <div class="row">
        <div class="col">


						<?php
						$login_id=$_SESSION['loginid'];
						$con=mysqli_connect("localhost","root","ehdgus48350","lol");
						$idx=$_GET['idx'];
						$cookie_value="1";
						$cookie_name=$idx;/*게시판 번호*/
						setcookie($cookie_name,$cookie_value,time()+(86400),"/");/* /는 전체경로에서 사용*/
						if(!isset($_COOKIE[$cookie_name])){
							$con=mysqli_connect("localhost","root","ehdgus48350","lol");

							$sql_count_update="update lol.board set count=count+1 where idx='$cookie_name'";
							$res2 = $con->query($sql_count_update);

						}
						$query="select * from lol.board where idx='$idx'";

						$query_run=mysqli_query($con,$query);
						foreach ($query_run as $row){

							$idx=$row['idx'];
							$title=$row['title'];
							$writer=$row['writer'];
							$img=$row['img'];


						/*	echo $row['idx'];
						띄어쓰기 : nbsp;
						*/
                            ?>
                            <div id="board_read">
                                <h1><?php echo "제목 :  {$row['title']}"; ?></h1>
                            </div>
                               <div class="container_distinction" style="display: flex;color: lightslategrey; float: right">

                            <div id="board_read">
								<?php echo "작성자 : {$row['writer']} |&nbsp;"; ?>
                            </div>
                            <div id="board_read">
								<?php echo "조회수 : {$row['count']} |&nbsp;"; ?>
                            </div>
                            <div id="board_read">
								<?php echo "작성일시 : {$row['wrtie_date']}"; ?>
                            </div>

                                 </div>
                            <div id="bo_line2"></div>
                            <div class="container_distinction" style="display: flex;color: lightslategrey; float: right">
	                            <?php

	                           /* $login_id = "tt";
	                            $writer = "tt";*/
	                            if( preg_replace("/\s+/", "", $login_id) ==preg_replace("/\s+/", "", $writer) ) {?>
                                        <!--작성자와 세션 아이뒤가 같으면,-->
                                    <td>
                                        <a href="board.php?idx=<?php echo $row['idx']; ?>" class="btn btn" style="float: right;background: #11ff58">게시판가기</a>

                                    </td>
                                    <td>
                                        <a href="board_edit.php?idx=<?php echo $row['idx']; ?>" class="btn btn-info" style="float: right">수정</a>

                                    </td>
                                    <form  onsubmit="return confirm('정말 삭제하시겠습니까? 삭제하면 복구가 불가능합니다');" action="/lol/board_curd_ok.php" method="post"><!--delete-->
                                        <input type="hidden"  name="delete_idx" value="<?php echo $row['idx']; ?>" >
                                        <input type="hidden" name="delete_hidden_image" value="<?php echo $row['img']; ?>">
                                        <button type="submit" name="delete_image" class="btn btn-danger" style="float: right">삭제</button>


                                    </form>

	                            <?php } else { ?>
                                    <!--작성자와 세션 아이뒤가 다르면,-->
                                    <td>
                                        <a href="board.php?idx=<?php echo $row['idx']; ?>" class="btn btn" style="float: right;background: #11ff58">게시판가기</a>

                                    </td>
		                            <?php
	                            }?>



                            </div>
                            <div id="bo_line"></div>

            <div  id="board_read" style="font-size: 20px;margin-top: 20px">
								<?php echo "내용 : {$row['content']}"; ?>
                            </div>


                              <!--  --><?php
/*
							echo "제목 : {$row['title']}</br>";
							echo "작성자 : {$row['writer']}</br></br></br></br>";
							echo "조회수 : {$row['count']}</br></br>";
							echo "작성일시 : {$row['wrtie_date']}</br></br>";
							echo "수정일시 : {$row['update_date']}</br></br>";
							echo "내용 : {$row['content']}</br></br>";
							echo "이미지 : {$row['img']}</br></br>";



							*/?>
                            <td width="10%">
                                <img style="margin-top: 30px" src="<?php echo $row['img']; ?>" width="300" height="300" alt="image">

                            </td>
							<?php
						}
						?>

                            <!--sdfdssd-->


                        <!--
											$stud_id=$row['id'];
											$name=$row['stud_name'];
											$class=$row['stud_class'];
											$phone=$row['stud_phone'];

											$image=$row['stud_image_old'];-->




        </div>

    </div>


</html>
