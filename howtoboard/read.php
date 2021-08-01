<?php

include $_SERVER['DOCUMENT_ROOT']."/howtoboard/db.php"; /* db load */


?>

<!doctype html>
<head>

    <link rel="stylesheet" type="text/css" href="/howtoboard/style.css" />
    <link rel="stylesheet" type="text/css" href="/howtoboard/jquery/jquery-ui.css" />
    <script type="text/javascript" src="/howtoboard/jquery/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="/howtoboard/jquery/jquery-ui.js"></script>
    <script type="text/javascript" src="/howtoboard/jquery/common.js"></script>
    <script type="text/javascript" src="/howtoboard/jquery/reply.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
	<title>게시판</title>
<!--	<link rel="stylesheet" type="text/css" href="/howtoboard/style.css" />
-->
    <style>

        h2{
            text-align: center;
        }


        #board_read {
            width:900px;
            position: relative;
            word-break:break-all;
        }
        #user_info {
            text-align: right;
            font-size:14px;
        }
        #user_info ul li {
            float:left;
            margin-left:10px;
        }
     /*   #bo_line {
            color:#000000;

            width:880px;
            height:2px;
            background: gray;
            margin-top:20px;
        }*/
        #bo_content {
            text-align: left;
            margin-top:20px;
        }
        #bo_ser {
            font-size:14px;
            color:#000000;
            position: absolute;
            right: 0;
        }
        #bo_ser > ul > li {
            float:left;
            margin-left:10px;
        }
        /* 댓글 */
        .dap_ins{
            width:900px;
            margin-top:1000px;

            margin-top:;
            word-break:break-all;
        }
        .reply_view {
            width:900px;
            margin-top:10px;
            word-break:break-all;
        }
        .dap_lo {
            font-size: 14px;
            padding:10px 0 15px 0;
            border-bottom: solid 1px gray;
        }
        .dap_to {
            margin-top:5px;
        }
        .rep_me {
            font-size:12px;
        }
        .rep_me ul li {
            float:left;
            width: 30px;
        }
        .dat_delete {
            display: none;
        }
        .dat_edit {
            display:none;
        }
        .dap_sm {
            position: absolute;
            top: 10px;
        }
        .dap_edit_t{
            width:520px;
            height:70px;
            position: absolute;
            top: 40px;
        }
        .re_mo_bt {
            position: absolute;
            top:40px;
            right: 5px;
            width: 90px;
            height: 72px;
        }
        #re_content {
            width:700px;
            height: 56px;
        }
        .dap_ins {
            margin-top:50px;
        }
        .re_bt {
            position: absolute;
            width:100px;
            height:56px;
            font-size:16px;
            margin-left: 10px;
        }
        #foot_box {
            height: 50px;
        }

        #dat_user{
            ;
        }

    </style>
</head>
<body>
<?php
$bno = $_GET['idx']; /* bno함수에 idx값을 받아와 넣음*/
$hit = mysqli_fetch_array(query("select * from board where idx ='".$bno."'"));
$hit = $hit['hit'] + 1;
$fet = query("update board set hit = '".$hit."' where idx = '".$bno."'");
$sql = query("select * from board where idx='".$bno."'"); /* 받아온 idx값을 선택 */
$board = $sql->fetch_array();
?>
<div class="container">
<!-- 글 불러오기 -->
<div id="board_read">

	<h2>제목 : <?php echo $board['title']; ?></h2>
	<div id="user_info">
		작성자 : <?php echo $board['name']; ?> 작성일: <?php echo $board['date']; ?> 조회수:<?php echo $board['hit']; ?>
		<div id="bo_line"></div>
	</div>
	<div id="bo_content">
		내용 : <?php echo nl2br("$board[content]"); ?>
	</div>
	<!-- 목록, 수정, 삭제 -->
	<div id="bo_ser" style="margin-top: 20px">
		<ul>

            <button type="button"  onclick="location.href='/howtoboard/index.php'" class="btn btn-primary">목록가기</button>
            <button type="button"  onclick="location.href='/howtoboard/modify.php?idx=<?php echo $board['idx']; ?>'" class="btn btn-primary">수정</button>
            <button type="button" onclick="location.href='/howtoboard/delete.php?idx=<?php echo $board['idx']; ?>'" class="btn btn-primary">삭제</button>
        </ul>
	</div>
</div>

</div>

<!--- 댓글 입력 폼 -->
<div class="dap_ins">
    <form action="/howtoboard/reply_ok.php?idx=<?php echo $bno; ?>" method="post">
        <input type="text" name="dat_user" id="dat_user" class="dat_user" size="15" placeholder="아이디">
        <input type="password" name="dat_pw" id="dat_pw" class="dat_pw" size="15" placeholder="비밀번호">
        <div style="margin-top:10px; ">
            <textarea name="content" class="reply_content" id="re_content" ></textarea>
            <button id="rep_bt" class="re_bt">댓글</button>
        </div>
    </form>
</div>
<div id="foot_box"></div>

    <!--- 댓글 불러오기 -->
    <div class="reply_view">
        <h3>댓글 목록</h3>
		<?php
		$sql3 = query("select * from reply where con_num='".$bno."' order by idx asc");
		while($reply = $sql3->fetch_array()){
			?>
            <div class="dap_lo">
                <div><b><?php echo $reply['name'];?></b></div>
                <div class="dap_to comt_edit"><?php echo nl2br("$reply[content]"); ?></div>
                <div class="rep_me dap_to"><?php echo $reply['date']; ?></div>
                <div class="rep_me rep_menu">
                    <a class="dat_edit_bt" href="#">수정</a>
                    <a class="dat_delete_bt" href="#">삭제</a>
                </div>
                <!-- 댓글 수정 폼 dialog -->
                <div class="dat_edit">
                    <form method="post" action="/howtoboard/reply_modify_ok.php">
                        <input type="hidden" name="rno" value="<?php echo $reply['idx']; ?>" /><input type="hidden" name="b_no" value="<?php echo $bno; ?>">
                        <input type="password" name="pw" class="dap_sm" placeholder="비밀번호" />
                        <textarea name="content" class="dap_edit_t"><?php echo $reply['content']; ?></textarea>
                        <input type="submit" value="수정하기" class="re_mo_bt">
                    </form>
                </div>
                <!-- 댓글 삭제 비밀번호 확인 -->
                <div class='dat_delete'>
                    <form action="/howtoboard/reply_delete.php" method="post">
                        <input type="hidden" name="rno" value="<?php echo $reply['idx']; ?>" /><input type="hidden" name="b_no" value="<?php echo $bno; ?>">
                        <p>비밀번호<input type="password" name="pw" /> <input type="submit" value="확인"></p>
                    </form>
                </div>
            </div>
		<?php } ?>


</div>
</body>
</html>