<?php
include  $_SERVER['DOCUMENT_ROOT']."/lol/navbar2.php";
/* 검색 변수 */
$catagory = $_GET['catgo'];
$search_con = $_GET['search'];

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
<div  class="container">

	<?php if((!isset($_SESSION['loginid'])) && (!isset($_SESSION['email'])) ) {?>

	<?php  } else {?>
		<button style="float: right; margin-right: " onclick="location.href='board_create.php'"  name="create_button" class="btn btn-success" >글쓰기</button>
	<?php  }
	?>

	<div class="container " style="margin-top: 100px; width:1000px " >
		<div class="row">
			<div class="col-md-12">


				<h4 class="text">게시판
					<?php echo $_SESSION['status'];  ?>
				</h4>







				<?php
				$con=mysqli_connect("localhost","root","ehdgus48350","lol");
				$query="select * from lol.board order by idx desc ";
				$query_run=mysqli_query($con,$query);


				?>
				<table class="table">
					<thead>
					<tr  style="text-align: center">
						<th  width="10%">글번호</th>
						<th width="10%"> 이미지</th>
						<th width="30%">제    목</th>
						<th width="20%">작성자</th>
						<th width="20%">작성일시</th>

						<th width="10%">조회수</th>


						<!--	<th>edit</th>
							<th>delete</th>-->

					</tr>
					</thead>
					<tbody>
					<?php
					$search_sql="select * from lol.board where $catagory like '%$search_con%' order by idx desc";
					if(mysqli_num_rows($query_run)>0){
						foreach ($query_run as $row){
							$idx=$row['idx'];
							?>
							<tr style="text-align: center; font-size: 15px;">
								<td  width="10%"><?php echo $row['idx']; ?></td>
								<td width="10%">
									<img src="<?php echo $row['img']; ?>" width="100" height="100" alt="image">

								</td>
								<td width="30%"><a href="/lol/board_read.php?idx=<?php echo $row['idx']; ?>"> <?php echo $row['title']; ?></a></td>
								<td width="20%"><?php echo $row['writer']; ?></td>
								<td width="20%"><?php echo $row['wrtie_date']; ?></td>



								<td width="10%"><?php echo $row['count']; ?></td>
								<!--                                    <td><?php /*echo $row['stud_image']*/?></td>
-->

								<!--	<td width="100px" >
										<a href="edit.php?id=<?php /*echo $row['id']; */?>" class="btn btn-info">edit</a>

									</td width="100px">
									<td>
										<form action="code.php" method="post">
                                           삭제
											<input type="hidden"  name="delete_id" value="<?php /*echo $row['id']; */?>" >
											<input type="hidden" name="del_stud_image" value="<?php /*echo $row['stud_image']; */?>">
											<button type="submit" name="delete_stud_image" class="btn btn-danger">delete</button>


										</form>

									</td>-->

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
		<?php

		$cookiePno = $idx; // 여기서 $no는 상품번호이다.
		$i         = 0;
		if ( isset( $_COOKIE['today_view'] ) ) { // today_view라는 쿠키가 존재하면
			$todayview = $_COOKIE['today_view']; // $todayview 변수에 today_view 쿠키를 저장한다.
			$tod2      = explode( ",", $_COOKIE['today_view'] ); // today_view 쿠키를 ','로 나누어 구분한다.

			$tod = array_reverse( $tod2 ); // 최근 목록으로 뽑기 위해 배열을 최신 것부터로 반대로 정렬해준다.


			// 중복을 막기위한 save 변수 지정

			while ( $i < sizeof( $tod ) ) { // $tod배열의 사이즈만큼 반복한다.

				if ( $cookiePno == $tod[ $i ] ) {


					$save = 'no';


				}


				$i ++;


			}


		}

		// 저장된 쿠키값이 없을 경우 새로 쿠키를 저장하는 소스
		if ( ! isset( $_COOKIE['today_view'] ) ) {
			setcookie( 'today_view', $cookiePno, time() + 21600, "/" );

		}

		// 저장된 쿠키값이 존재하고, 중복된 값이 아닌 경우 기존의 today_view 쿠키에 현재 쿠키를 추가하는 소스
		if ( isset( $_COOKIE['today_view'] ) ) {
			if ( $save != 'no' ) {

				setcookie( 'today_view', $todayview . "," . $cookiePno, time() + 21600, "/" );


			}

			//저장된 쿠키값이 일정량 이상이면 초기화 하는 소스
			if ( sizeof( $tod ) > 10 ) {

				setcookie( 'today_view', $todayview . "," . $tod2[0], time() - 3600, "/" );


			}

		}


		?>
	</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


<!-- search 뷰 -->
<div class="search_box"  style="text-align: center; /*margin-right: 60px; */margin-top: 50px; margin-bottom: 200px">
	<form action="search_ok" method="get">
		<select name="catgo" style="font-size: 15px">
			<option value="title" style=>제목</option>
			<option value="name">글쓴이</option>
			<option value="content">내용</option>
		</select>
		<input type="text" name="search" size="50" style="font-size: 15px" required="required" /> <button style="font-size: 15px">검색</button>
	</form>
</div>

</body>
</html>
