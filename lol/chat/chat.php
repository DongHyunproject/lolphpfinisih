<?php

/*error_reporting( E_ALL );
ini_set( "display_errors", 1 );*/
session_start();

if(!isset($_SESSION['loginid'])){
	header("location:../login.php");

}


?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" ></script>

    <title>채팅</title>
    <link rel="stylesheet" href="design2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">


</head>
<body>
<div class="wrapper">
    <section class="chat-area">
        <header>
			<?php


			$loginid=$_GET['loginid'];


			$connection=mysqli_connect("localhost", "root","ehdgus48350","lol");
			$sql=mysqli_query($connection, "SELECT * FROM lol.member where loginid='$loginid'");
			if(mysqli_num_rows($sql)>0){
				$row=mysqli_fetch_assoc($sql);

			}else {
				echo "데이터가 없습니다";
			}

			?>
            <a href="layout_users.php" class="back-icon"><i class="fas fa-arrow-left"></i> </a><!--뒤로가기 빽 버튼-->
            <img src="/lol/<?php echo $row['profile_img']?>" alt="">
            <div class="details">
                <span><?php echo $row['loginid'] ?></span>

            </div>

        </header>
        <div class="chat-box">



        </div>
        <form action="#" class="typing-area" autocomplete="off">
            <input type="text" name="outgoing_id" value="<?php echo $_SESSION['loginid'] ?>" hidden>
            <input type="text" name="incoming_id" value="<?php echo $loginid; ?>" hidden>

            <input type="text" maxlength="200" name="message" class="input-field" placeholder="메시지를 쓰세요" >



            <button class="message-submit-button" > 제출</button>

        </form>

    </section>

</div>
<script src="/lol/chat/chat.js"></script>

</body>

</html>

