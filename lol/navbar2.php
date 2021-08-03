<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<style>
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

        li a:hover:not(.active) {
            background-color: #111;
        }

        .active {

            overflow: hidden;
            background-color: #333;
        }
	</style>
</head>
<body>

<ul style="font-size: 15px">

    <li><a href="/lol/home.php">Home</a></li>
	<li><a href="/lol/board.php">community</a></li>
	<li><a href="/lol/Mypage.php">Mypage</a></li>
    <?php if((!isset($_SESSION['loginid'])) && (!isset($_SESSION['email'])) ) {?>

    <li style="float:right"><a class="active" href="/lol/registration.php">회원가입</a></li>
    <li style="float:right"><a class="active" href="/lol/login.php">로그인</a></li>



    <?php } else { ?>

        <li style="float:right"><a class="active" href="/lol/logout.php">로그아웃</a></li>

    <?php  echo $_SESSION['loginid'];
    }?>
</ul>

</body>
</html>

