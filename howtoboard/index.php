<?php

include  $_SERVER['DOCUMENT_ROOT']."/howtoboard/db.php"; ?>
<!doctype html>
<head>
	<meta charset="UTF-8">
	<title>게시판</title>
	<link rel="stylesheet" type="text/css" href="/howtoboard/style.css?after" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <style>

        .ellipsis> * {

            display: table-cell;

            overflow: hidden;

            text-overflow: ellipsis;

        }


        .carousel-inner{

        }
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
        }

        li {
            float: left;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover {
            background-color: #111;
        }
        th{/*table 글자들 중앙정렬*/
            text-align: center;
            width: 100px;

        }

        table tr td{
            text-overflow: ellipsis; white-space: nowrap;      overflow: hidden; max-width: 200px;}
        body span{
            display: inline-block;
        }

.pagination{
    margin-top: 30px;
    text-align: center;
}



    </style>
</head>
<body>
<!--네비바-->
<ul>
    <li><a  onclick="location.
    href='edit.html'"
            class="active" href="/howtoboard/Main.php">Home</a></li>
    <li><a  onclick="location.href='/howtoboard/index.php'"

            href="/howtoboard/index.php">Community</a></li>
    <!--    <li><a href="#contact" onclick="location.href='../test/tt2.html'">파티원구함</a></li>
	-->    <li><a href="#about" onclick="location.href='/howtoboard/tt2.html'">전적검색</a></li>
    <ul>   <button type="button" class="btn btn-dark" style="float: right; font-size: 15px;"
                   onclick="location.href='/howtoboard/login.php'">로그인</button>



        <button type="button" class="btn btn-dark" style="float: right; font-size: 15px;"
                onclick="location.href='/howtoboard/registration.php'">회원가입</button>

    </ul>


</ul>

<div id="board_area">
	<h1>Community</h1>
<!--	<h4>자유롭게 글을 쓸 수 있는 게시판입니다.</h4>
-->	<table  class="list-table">
		<thead>
		<tr>
			<th width="70">번호</th>
			<th width="500">제목</th>
			<th width="120">글쓴이</th>
			<th width="100">작성일</th>
			<!-- 추천수 항목 추가 -->
			<th width="100">조회수</th>
			<th width="100">좋아요</th>
		</tr>
		</thead>
		<?php

		if(isset($_GET['page'])){
			$page = $_GET['page'];
		}else{
			$page = 1;
		}
		$sql = query("select * from board");
		$row_num = mysqli_num_rows($sql); //게시판 총 레코드 수
		$list = 5; //한 페이지에 보여줄 개수
		$block_ct = 10; //블록당 보여줄 페이지 개수

		$block_num = ceil($page/$block_ct); // 현재 페이지 블록 구하기
		$block_start = (($block_num - 1) * $block_ct) + 1; // 블록의 시작번호
		$block_end = $block_start + $block_ct - 1; //블록 마지막 번호

		$total_page = ceil($row_num / $list); // 페이징한 페이지 수 구하기
		if($block_end > $total_page) $block_end = $total_page; //만약 블록의 마지박 번호가 페이지수보다 많다면 마지박번호는 페이지 수
		$total_block = ceil($total_page/$block_ct); //블럭 총 개수
		$start_num = ($page-1) * $list; //시작번호 (page-1)에서 $list를 곱한다.

		$sql2 = query("select * from board order by idx asc limit $start_num, $list");
		while($board = $sql2->fetch_array()){
			$title=$board["title"];

			$con_idx = $board["idx"];
			$sql3 = query("select * from reply where con_num='".$board['idx']."'");
			$rep_count = mysqli_num_rows($sql3);

			?>

			<tbody>
			<tr>
				<td width="70"><?php echo $board['idx']; ?></td>
				<td width="500" >
					<?php
					$lockimg = "<img src='/img/lock.png' alt='lock' title='lock' with='20' height='20' />";
					if($board['lock_post']=="1")
					{ ?><a href='/howtoboard/secret_read.php?idx=<?php echo $board["idx"];?>'><?php echo $title, $lockimg;
						}else{?>

                        <!--- 추가부분 18.08.01 --->
						<?php
						$boardtime = $board['date']; //$boardtime변수에 board['date']값을 넣음
						$timenow = date("Y-m-d"); //$timenow변수에 현재 시간 Y-M-D를 넣음

						if($boardtime==$timenow){
							$img = "<img src='/img/new_image.png' with='20' height='20' alt='new' title='new' />";
						}else{
							$img ="";
						}
						?>
                        <!--- 추가부분 18.08.01 END -->
                        <a href='/howtoboard/read.php?idx=<?php echo $board["idx"]; ?>'><span style="background:white;"><?php echo $title; }?></span><span class="re_ct">[<?php echo $rep_count;?>]<?php echo $img; ?> </span></a></td>

         <td width="120"><?php echo $board['name']?></td>
				<td width="100"><?php echo $board['date']?></td>
				<td width="100"><?php echo $board['hit']; ?></td>
				<!-- 추천수 표시해주기 위해 추가한 부분 -->
				<td width="100"><?php echo $board['thumbup']?></td>
			</tr>
			</tbody>
		<?php } ?>
	</table>


</div>

<!--페이징 넘버-->
<div id="page_num" style="text-align: left">
    <ul class="pagination"  style="margin-top: 10px" >
		<?php
		if($page <= 1)
		{ //만약 page가 1보다 크거나 같다면
			echo "<li class='fo_re'>처음</li>"; //처음이라는 글자에 빨간색 표시
		}else{
			echo "<li><a href='?page=1'>처음</a></li>"; //알니라면 처음글자에 1번페이지로 갈 수있게 링크
		}
		if($page <= 1)
		{ //만약 page가 1보다 크거나 같다면 빈값

		}else{
			$pre = $page-1; //pre변수에 page-1을 해준다 만약 현재 페이지가 3인데 이전버튼을 누르면 2번페이지로 갈 수 있게 함
			echo "<li><a href='?page=$pre'>이전페이지</a></li>"; //이전글자에 pre변수를 링크한다. 이러면 이전버튼을 누를때마다 현재 페이지에서 -1하게 된다.
		}
		for($i=$block_start; $i<=$block_end; $i++){
			//for문 반복문을 사용하여, 초기값을 블록의 시작번호를 조건으로 블록시작번호가 마지박블록보다 작거나 같을 때까지 $i를 반복시킨다
			if($page == $i){ //만약 page가 $i와 같다면
				echo "<li class='fo_re'>[$i]</li>"; //현재 페이지에 해당하는 번호에 굵은 빨간색을 적용한다
			}else{
				echo "<li><a href='?page=$i'>[$i]</a></li>"; //아니라면 $i
			}
		}
		if($block_num >= $total_block){ //만약 현재 블록이 블록 총개수보다 크거나 같다면 빈 값
		}else{
			$next = $page + 1; //next변수에 page + 1을 해준다.
			echo "<li><a href='?page=$next'>다음 페이지</a></li>"; //다음글자에 next변수를 링크한다. 현재 4페이지에 있다면 +1하여 5페이지로 이동하게 된다.
		}
		if($page >= $total_page){ //만약 page가 페이지수보다 크거나 같다면
			echo "<li class='fo_re'>마지막</li>"; //마지막 글자에 긁은 빨간색을 적용한다.
		}else{
			echo "<li><a href='?page=$total_page'>마지막 페이지</a></li>"; //아니라면 마지막글자에 total_page를 링크한다.
		}
		?>
    </ul>
</div>

<div id="write_btn" style="text-align: right; margin-right: 400px; margin-top: 20px;">
    <a href="/howtoboard/write.php"><button style="font-size: 15px">글쓰기</button></a>
</div>
<!-- search 뷰 -->
<div class="search_box"  style="text-align: center; margin-left: 300px; margin-top: 20px">
    <form action="/howtoboard/search_result.php" method="get">
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

