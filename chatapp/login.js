const form=document.querySelector('.login form'),
    continueBtn = form.querySelector('.button input'),
    errorText = form.querySelector('.error-text');




form.onsubmit =(e)=>{
    e.preventDefault();
}

continueBtn.onclick=()=>{
    let xhr=new XMLHttpRequest();/*xml 객체 만들기*/
    xhr.open("POST","login_ok.php",true);
    xhr.onload=()=>{
        if (xhr.readyState===XMLHttpRequest.DONE){
            if(xhr.status===200){
                let data=xhr.response; /*url 전달되었는지 반응 보기*/

                console.log(data);


                if (data==="로그인 성공했습니다"){
                    /*로그인 성공한 경우*/
                    alert(data);
                    location.href = "/chatapp/users.php";/*채팅창으로 이동*//*todo*/


                }else {
                    alert(data);
                    /*로그인 실패한 경우*//*
                    errorText.textContent=data;
                    errorText.style.display="block";*/

                }

            }
        }
    }

    /* php로 form 데이터 ajax 방식으로 보내기*/
    let formData=new FormData(form);
    xhr.send(formData);

}

