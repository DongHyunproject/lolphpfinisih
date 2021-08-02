const form=document.querySelector('.signup form'),
    continueBtn = form.querySelector('.button input'),
    errorText = form.querySelector('.error-text');




form.onsubmit =(e)=>{
    e.preventDefault();/*제출한것으로부터 양식 막기*/
}

continueBtn.onclick=()=>{
    let xhr=new XMLHttpRequest();/*xml 파일 만들기*/
    xhr.open("POST","signup.php",true);
    xhr.onload=()=>{
        if (xhr.readyState===XMLHttpRequest.DONE){
           if(xhr.status===200){
               let data = xhr.response; /*url 전달되었는지 반응 보기*/
/*
               console.log(data);
*/

               switch (data) {
                   case "success":
                       alert(data);
                       location.href="/chatapp/login.php"/*todo*/

                       break;
                   case "회원가입이 성공하였습니다.":
                       alert(data);
                       location.href="/chatapp/login.php"/*todo*/
                       break;

                   default:   alert(data);
                       break;
               }
             /*  if (data==="success"){
                   location.href="login.php"/!*todo*!/
                   alert('회원가입 성공');

               }else {
                   if (data==="회원가입이 성공하였습니다."){
                       alert(data);
                       location.href="login.php"/!*todo*!/
                   }
                   else {
                       alert(data);
                   }

                  /!* errorText.textContent=data;
                   errorText.style.display="block";*!/

               }*/

           }
        }
    }

    /* php로 form 데이터 ajax 방식으로 보내기*/
    let formData=new FormData(form);
    xhr.send(formData);

}

