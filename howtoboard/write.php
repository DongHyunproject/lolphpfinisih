<?php
?>
<!doctype html>
<head>
    <style>
        #write_title{
            text-align: center;
            width: 200px;
        }
        #upw{
            width: 200px;
            margin-top: 10px;
        }
        #ucontent{
            font-size:20px;
        }
        #in_title{


        }
        

    </style>
	<meta charset="UTF-8">
	<title>게시판</title>
	<link rel="stylesheet" type="text/css" href="/howtoboard/style.css" />
</head>
<body>
<div id="board_write">

	<h1><a id="write_title">Community 글쓰기</a></h1>
<!--	<h4>글을 작성하는 공간입니다.</h4>
-->	<div id="write_area">

		<form action="write_ok.php" method="post">

			<div class="in_title"></div>
			<div id="in_name">
                <textarea name="title" id="utitle" rows="1" cols="55" placeholder="글 제목을 입력하세요(최대 50자)" maxlength="100" required></textarea>
			</div>

			 <div class="wi_line"></div>
            <div id="in_name">
                <textarea name="name" id="uname" rows="1" cols="55" placeholder="작성자를 입력하세요" maxlength="16" required></textarea>
            </div>

            <div class="wi_line"></div>
<!--             <p><label> 비밀번호(최대 16자) : <input type="password" maxlength="16" name="pw" id="upw"  placeholder="비밀글 비밀번호 입력하세요" required /></label></p>
-->            </div>
			<div id="in_content">
				<textarea name="content" id="ucontent" placeholder="내용" required></textarea>
			</div>

			<div class="bt_se">
				<button type="submit">글쓰기 완료</button>
			</div>
		</form>
	</div>


</body>
</html>
