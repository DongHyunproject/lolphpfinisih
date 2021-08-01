<?php
include  $_SERVER['DOCUMENT_ROOT']."/howtoboard/db.php"; ?>
<!doctype html>
<head>
	<meta charset="UTF-8">
	<title>게시판</title>
	<link rel="stylesheet" type="text/css" href="/howtoboard/style.css" />
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

	</style>
</head>
<body>

<ul>
	<li><a  onclick="location.
    href='edit.html'"
	        class="active" href="/howtoboard/Main.php">Home</a></li>
	<li><a  onclick="location.href='/howtoboard/index.php'"

	        href="/howtoboard/index.php">Community</a></li>
	<!--    <li><a href="#contact" onclick="location.href='../test/tt2.html'">파티원구함</a></li>
	-->    <li><a href="#about" onclick="location.href='/howtoboard/tt2.html'">전적검색</a></li>
	<ul>   <button type="button" class="btn btn-dark" style="float: right;"
	               onclick="location.href='/howtoboard/login.php'">로그인</button>



		<button type="button" class="btn btn-dark" style="float: right;"
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
		// board테이블에서 idx를 기준으로 내림차순해서 10개까지 표시
		$sql = query("select * from board order by idx desc limit 0,10");
		while($board = $sql->fetch_array())
		{
			//title변수에 DB에서 가져온 title을 선택
			$title=$board["title"];
			$con_idx=$board["idx"];
			$reply_count=query("SELECT COUNT(*) as cnt FROM reply where con_num=$con_idx");
			$con_reply_count=$reply_count->fetch_array();


			if(strlen($title)>3000)
			{
				//title이 30을 넘어서면 ...표시
				$title=str_replace($board["title"],mb_substr($board["title"],0,30,"utf-8")."...",$board["title"]);
			}
			?>
			<tbody>
			<tr>
				<td width="70"><?php echo $board['idx']; ?></td>
				<td width="500" >
					<?php
					$lockimg = "<img src='/img/lock.png' alt='lock' title='lock' with='20' height='20' />";
					if($board['lock_post']=="1")
					{ ?><a href='/howtoboard/secret_read.php?idx=<?php echo $board["idx"];?>'><?php echo $title." [".$con_reply_count["cnt"]."]", $lockimg;
						}else{  ?>
						<a href='/howtoboard/read.php?idx=<?php echo $board["idx"]; ?>'><?php echo $title." [".$con_reply_count["cnt"]."]";}?></a></td>
				<td width="120"><?php echo $board['name']?></td>
				<td width="100"><?php echo $board['date']?></td>
				<td width="100"><?php echo $board['hit']; ?></td>
				<!-- 추천수 표시해주기 위해 추가한 부분 -->
				<td width="100"><?php echo $board['thumbup']?></td>
			</tr>
			</tbody>
		<?php } ?>
	</table>
	<div id="write_btn">
		<a href="/howtoboard/write.php"><button>글쓰기</button></a>
	</div>
</div>
</body>
</html>