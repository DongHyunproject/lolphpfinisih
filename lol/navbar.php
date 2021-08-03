<?php
session_start();

?>
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
    <li><a  onclick="location.href='/lol/home.php'"
            class="active" href="/lol/home.php">Home</a></li>

    <li><a  onclick="location.href='/lol/board.php'"
            href="/lol/board.php">Community</a></li>
    <li><a href="#contact" onclick="location.href='#'">Mypage</a></li>

    <li><a href="#"  onclick="location.href='/howtoboard/tt2.html'">전적검색</a></li>

    <ul>   <button type="button" class="btn btn-dark" style="float: right;"
                   onclick="location.href='/howtoboard/login.php'">로그인</button>



        <button type="button" class="btn btn-dark" style="float: right;"
                onclick="location.href='/howtoboard/registration.php'">회원가입</button>

    </ul>


</ul>

</body>
</html>