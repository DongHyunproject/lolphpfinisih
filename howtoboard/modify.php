<!--- 게시글 수정 -->
<?php
include $_SERVER['DOCUMENT_ROOT']."/howtoboard/db.php";

$bno = $_GET['idx'];
$sql = query("select * from board where idx='$bno';");
$board = $sql->fetch_array();
?>

<!doctype html>
<head>
    <meta charset="UTF-8">
    <title>게시판</title>
    <link rel="stylesheet" href="/howtoboard/style.css" />
    <style>
        #wi_line
    </style>
</head>
<body>
<div id="board_write">
    <h1><a href="/">자유게시판</a></h1>
    <h4>글 수정</h4>
    <div id="write_area">
        <form action="/howtoboard/modify_ok.php?idx=<?php echo $bno; ?>" method="post">
          <div   id="in_name">
             <textarea name="title" id="utitle" rows="1" cols="55" maxlength="100" required><?php echo $board['title']; ?></textarea>
            </div>
            <div class="wi_line" ></div>



            <div id="in_name">
       <textarea name="name" id="uname" rows="1" cols="55"  maxlength="100" required><?php echo $board['name']; ?></textarea>
            </div>
            <div class="wi_line"></div>
            <span> <div id="in_content">
           <textarea name="content" id="ucontent" placeholder="내용" required> <?php echo $board['content']; ?></textarea></span>
            </div>
       <!--     <div id="in_pw">
                <input type="password" name="pw" id="upw"  placeholder="비밀번호" required />
            </div>-->
            <div class="bt_se">
                <button type="submit">글 수정</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>