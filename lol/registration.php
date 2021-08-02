<?php

?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>lol 회원가입</title>
    <link rel="stylesheet"href="/lol/style.css">
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">


</head>
<body>

<div class="wrapper">
    <section class="form signup">
        <header>LOL Community 회원가입 </header>
        <form action="/lol/registration_ok.php" method="post" enctype="multipart/form-data">
            <!--            <div class="error-text"></div>
			-->         <!--   <div class="name-details">-->
                <div class="field input">
                    <label>아이뒤 :
                        <input type="text" name="loginid" id="loginid" oninput="check_loginid()" placeholder="이름을 입력하세요" required>
                        <span id="check_loginid"></span>
                    </label>
                </div>
             <!--   <div class="field input">
                    <label>성:
                        <input type="text" name="lname" placeholder="성을 입력하세요" required></label>
                </div>-->
          <!--  </div>-->

            <div class="field input">
                <label>이메일:
                    <input type="text" name="email" id="email"  placeholder="이메일을 입력하세요" oninput="email_vaild_check()" required></label>
                <input type="hidden" name="isuser" value="0" required><!--관리자면 1, 유저면 0-->
                <span id="email_check"></span>

            </div>
            <div class="field input">
                <label>비밀번호:
                    <!--                        <i class="fas fa-eye"></i>패스워드 비밀번호 눈알 감시표시
					-->
                    <input type="password" name="password" id="password" oninput="password_vaild_check()" placeholder="비밀번호를 입력하세요" required></label>
                <span id="password_check"></span>

            </div>
            <div class="field input">
                <label>비밀번호 확인:
                    <!--                        <i class="fas fa-eye"></i>패스워드 비밀번호 눈알 감시표시
					-->
                    <input type="password" name="password2" id="password2"  placeholder="비밀번호를 입력하세요" required></label>
                <span id="password_check2"></span>

            </div>
            <div class="field image"  >
                <label>프로필 이미지:
                    <input type="file" name="profile_img" ></label>
            </div>
            <div class="field button">

                <input type="submit" value="회원가입" required name="save_image" >
            </div>

        </form>
        <div class="link">회원가입을 하셨나요?  <a href="login.php" style="color: blue">로그인하기</div>


    </section>
</div>
<!--<script src="pass-show-hide.js"></script>
-->
<script src="registration.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" ></script>

<script>
    function check_loginid() {
        /*아이뒤 중복체크*/
        jQuery.ajax({
            url: "check_availabilty.php",
            data:'loginid='+$("#loginid").val(),
            type: "POST",
            success:function(data){
                $("#check_loginid").html(data);
            },
            error:function (){}
        });
    }


    function password_vaild_check(){/*비밀번호 유효성 검사*/

        jQuery.ajax({
            url: "check_availabilty.php",
            data:'password='+$("#password").val(),
            type: "POST",
            success:function(data){
                $("#password_check").html(data);
            },
            error:function (){}
        });



    }
    function password_double_check2(){/* 위 비밀번호랑 일치하는지 확인 */
        jQuery.ajax({
            url: "check_availabilty.php",
            data:['password2='+$("#password2").val(),'password1='+$("#password1").val()],
            type: "POST",
            success:function(data){
                $("#password_check2").html(data);
            },
            error:function (){}
        });


    }
    function email_vaild_check(){
        jQuery.ajax({
            url: "check_availabilty.php",
            data:'email='+$("#email").val(),
            type: "POST",
            success:function(data){
                $("#email_check").html(data);
            },
            error:function (){}
        });

    }

</script>
</body>

</html>

