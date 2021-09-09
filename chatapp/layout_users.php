<?php
session_start();

/*
$test="user layout 세션아이뒤";
console.log($test.$_SESSION['unique_id']);

if(!isset($_SESSION['unique_id'])){
    header("location:login.php");

}

if(!isset($_SESSION['unique_id'])){

	$test="user layout 세션아이뒤";
	console.log($test.$_SESSION['unique_id']);
}*/
?>
<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<title>채팅</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">


</head>
<body>
<div class="wrapper">
	<section class="users">
		<header>
            <?php
            $email_unique=$_SESSION['unique_id'];

            $connection=mysqli_connect("localhost", "root","ehdgus48350","chatapp");
            $sql=mysqli_query($connection, "SELECT * FROM chatapp.users where email='$email_unique'");
            if(mysqli_num_rows($sql)>0){
                $row=mysqli_fetch_assoc($sql);

            }

            ?>
			<div class="content">
				<img src="<?php echo $row['img']?>" alt="">
				<div class="details">
					<span><?php echo $row['fname']. "" .$row['lname'] ?></span>
				</div>
			</div>

<!--			<a href="#" class="logout">로그아웃</a>
-->
		</header>


		<div class="search">

			<span class="text">채팅할 사람을 고르세요</span>
			<input type="text" placeholder="이름을 입력하세요">

			<button><i class="fas fa-search"></i> </button>
		</div>
		<div class="users-list">


		</div>


	</section>

</div>
<script src="/chatapp/users.js"></script>

</body>

</html>

