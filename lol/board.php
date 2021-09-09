<?php
include  $_SERVER['DOCUMENT_ROOT']."/lol/navbar2.php";


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
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

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



<?php if((!isset($_SESSION['loginid'])) && (!isset($_SESSION['email'])) ) {?>

<?php  } else {?>
    <button style="float: right; margin-right: " onclick="location.href='board_create.php'"  name="create_button" class="btn btn-success" >글쓰기</button>
<?php  }
?>


<?php echo $_SESSION['status'];  ?>

<?php
$con=mysqli_connect("localhost","root","ehdgus48350","lol");
$query="select * from lol.board order by idx desc ";
$query_run=mysqli_query($con,$query);


?>




<?php
if(mysqli_num_rows($query_run)>0){
	foreach ($query_run as $row){
		$idx=$row['idx'];
		?>


		<?php

	}
}else {
	?>

	<?php
}

?>

<?php

$cookiePno = $idx; // 여기서 $no는 게시판번호이다.
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

<!-- 페이징-->
<script>
    $(document).ready(function(){

        load_data(1);

        function load_data(page, query = '')
        {
            $.ajax({
                url:"board_fetch.php",
                method:"POST",
                data:{page:page, query:query},
                success:function(data)
                {
                    $('#dynamic_content').html(data);
                }
            });
        }

        $(document).on('click', '.page-link', function(){
            var page = $(this).data('page_number');
            var query = $('#search_box').val();
            load_data(page, query);
        });



        $('#search_box').keyup(function(){
            var query = $('#search_box').val();
            load_data(1, query);
        });

    });
</script>

</div>
<!--ajax를 이용한 검색-->

<div class="form-group">
    <input type="text" style="width: 500px; float: right; margin-right: 50px" name="search_box" id="search_box" class="form-control" placeholder="찾을 제목을 쓰세요"

</div>
<div id="dynamic_content" class="table_responsive"></div>
<!-- search 뷰 -->
<!--<div class="search_box"  style="text-align: center; /*margin-right: 60px; */margin-top: 50px; margin-bottom: 200px">
    <form action="/lol/search_ok.php" method="get">
        <select name="catgo" style="font-size: 15px">
            <option value="title" style=>제목</option>
            <option value="name">글쓴이</option>
            <option value="content">내용</option>
        </select>
        <input type="text" name="search" size="50" style="font-size: 15px" required="required" /> <button style="font-size: 15px">검색</button>
    </form>
</div>-->


</body>
</html>
