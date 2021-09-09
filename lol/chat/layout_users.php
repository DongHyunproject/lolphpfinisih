<?php
include  $_SERVER['DOCUMENT_ROOT']."/lol/navbar2.php";

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

	<title>채팅</title>
	<link rel="stylesheet" href="design2.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">


</head>
<body style="display: inline-block" >



<div class="wrapper" >
	<section class="users">
		<header>
			<?php
			$loginid_unique=$_SESSION['loginid'];
			$connection=mysqli_connect("localhost", "root","ehdgus48350","lol");
			$sql=mysqli_query($connection, "SELECT * FROM lol.member where loginid='$loginid_unique'");
			if(mysqli_num_rows($sql)>0){
				$row=mysqli_fetch_assoc($sql);

			}


			?>



			<div class="content">
				<img src="/lol/<?php echo $row['profile_img']; ?>" alt="">
				<div class="details">
					<span><?php echo $loginid_unique ?></span>

				</div>
			</div>

<!--			<a href="#" class="logout">로그아웃</a>
-->
		</header>


		<div class="search" >

			<span class="text">채팅할 사람을 고르세요</span>
			<input type="text" style="background-color: white" placeholder="이름을 입력하세요">

			<button><i class="fas fa-search"></i> </button>
		</div>
		<div class="users-list">

		</div>



	</section>

</div>
<script src="/lol/chat/users.js"></script>

</body>

</html>

