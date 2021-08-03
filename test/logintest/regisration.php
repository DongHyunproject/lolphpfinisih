<?php
?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

<form method="post" action="/test/logintest/registration_check.php">
    <label>아이뒤<br><span id="ids"></span></label>
    <input type ="text" name="id" id="id1" onkeyup="idcheck()"><br>
    <input type ="hidden" id="idh" ">
    닉네임 : <input type ="text" name="nickname"  onkeyup="nicknamecheck()"><br>

	비밀번호 : <input type="password" name="password"  onkeyup="passwordcheck(this.value)"><br>
    비밀번호 확인 : <input type="password" name="passwordcheck"  onkeyup="passwordcheck2(this.value)"><br>

	<input type="submit">


</form>

<script>
    function idcheck(){
        var id_check=document.getElementById("id1").value.replace(/[^a-z0-9_-]/g,"");//비밀번호,영어 소문자와 숫자 필수로 있어야함.
    // , g는 전체적으로 이게 맞으면 ""로 바꿔줌.
    //_-도 허용, []안에 있는 형식이 아닌 다른 것을 적을 경우 ""으로 바꿔줌

/*w3school에 있는 형식*/
    document.getElementById("id1").value=id_check;
    var obj;//객체
    var dbParam;//db정보 담음
    var xmlhttp,myObj,x;
    obj={"table":"member","id":id_check};/*자바 스크립트 객체 형태로 저장*/
    dbParam=JSON.stringify(obj);/*자바 스크립트 객체 형태로 저장 된 것을 json 형식으로 저장*/
    xmlhttp=new XMLHttpRequest();/*서버에 요청한 데이터를 xmlhttp변수에 저장한다*/
    xmlhttp.onreadystatechange=function (){
        /*XMLHttpRequest 객체 상태가 바뀔 때마다 호출해서 저장함*/

        if(this.readyState==4 && this.status==200){/*readyState 프로퍼티는 XMLHttpRequest 객체의 현재 상태를 나타내며,
        4는 요청한 데이터의 처리가 완료되어 응답할 준비가 완료됨.,
        status  서버의 문서 상태
        200 : 서버에 문서가 존재함.
        404 : 서버에 문서가 존재하지 않음.
        */
            myObj=JSON.parse(this.responseText);/*
            idcheck.php로부터   응답 받은 json 형식의 문자열을
           자바스크립트 객체값으로 바꿔서 myobj에 저장

              */
            for (x in myObj){/*my obj에 담겨있는 자바스크립트 길이만큼 반복
            idcheck.php로부터 json값을
            */
                if(myObj[x]=='1'){
                    document.getElementById("ids").innerHTML="아이뒤가 존재합니다."
                    document.getElementById("ids").style.color="red";

                    document.getElementById("idh").value="";/**/
                }
                else {
                    document.getElementById("ids").innerHTML="사용할 수 있는 아이뒤 입니다."
                    document.getElementById("ids").style.color="blue";
                    document.getElementById("idh").value="1";/**/
                }
            }

        }

    };
    xmlhttp.open("POST","idcheck.php",true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    /* name= value & name2= value 라는 값을 전달할 때,
      %22value&22
      이런식으로 해서 전달됨.
      컨텐트 타입으로 전달
     */

 /*  content 는 idcheck.php? content=dbParam  이런식으로 보낸다*/
    xmlhttp.send("Content="+dbParam);
    }/*idcheck()*/

    function nicknamecheck(){

    }
    function passwordecheck(){

    }


</script>

</body>

</html>

