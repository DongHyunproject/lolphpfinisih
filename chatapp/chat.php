<?php

session_start();
if(!isset($_SESSION['email'])){
	header("location:login.php");

}

?>
<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<title>채팅</title>
	<link rel="stylesheet" href="style2.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">


</head>
<body>
<div class="wrapper">
	<section class="chat-area">
		<header>
			<?php


			$email=$_GET['email'];

			$connection=mysqli_connect("localhost", "root","ehdgus48350","chatapp");
			$user_id=mysqli_real_escape_string($connection,$_GET['email']);
			$sql=mysqli_query($connection, "SELECT * FROM chatapp.users where email='$email'");
			if(mysqli_num_rows($sql)>0){
				$row=mysqli_fetch_assoc($sql);

			}else {
    echo "데이터가 없습니다";
   }

			?>
            <a href="layout_users.php" class="back-icon"><i class="fas fa-arrow-left"></i> </a><!--뒤로가기 빽 버튼-->
				<img src="<?php echo $row['img']?>" alt="">
				<div class="details">
                    <span><?php echo $row['fname']. "" .$row['lname'] ?></span>

				</div>

	      	</header>
              <div class="chat-box">



              </div>
        <form action="#" class="typing-area" autocomplete="off">
            <input type="text" name="outgoing_id" value="<?php echo $_SESSION['unique_id'] ?>" hidden>
            <input type="text" name="incoming_id" value="<?php echo $user_id; ?>" hidden>

            <input type="text" name="message" class="input-field" placeholder="메시지를 쓰세요" >
            <button class="message-submit-button" > 제출</button>

        </form>

	</section>

</div>
<script src="pass-show-hide.js"></script>
<script src="chat.js"></script>

</body>

</html>

