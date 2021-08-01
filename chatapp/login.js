const form=document.querySelector('.login form'),
    continueBtn = form.querySelector('.button input'),
    errorText = form.querySelector('.error-text');

;


form.onsubmit =(e)=>{
    e.preventDefault();/*제출한것으로부터 양식 막기*/
}

continueBtn.onclick=()=>{
    let xhr=new XMLHttpRequest();/*xml 파일 만들기*/
    xhr.open("POST","login_ok.php",true);
    xhr.onload=()=>{
        if (xhr.readyState===XMLHttpRequest.DONE){
            if(xhr.status===200){
                let data=xhr.response; /*url 전달되었는지 반응 보기*/
/*
                console.log(data);
*/

                if (data=="success"){
                    /*로그인 성공한 경우*/
                    location.href = "chat.php";/*채팅창으로 이동*//*todo*/


                }else {
                    /*로그인 실패한 경우*/
                    errorText.textContent=data;
                    errorText.style.display="block";

                }

            }
        }
    }

    /* php로 form 데이터 ajax 방식으로 보내기*/
    let formData=new FormData(form);
    xhr.send(formData);

}

