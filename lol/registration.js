/*ajax 회원가입 기능(중복확인 포함)*/

const form=document.querySelector('.signup form'),
    continueBtn = form.querySelector('.button input'),
    errorText = form.querySelector('.error-text');

;


form.onsubmit =(e)=>{
    e.preventDefault();/*제출한것으로부터 양식 막기*/
}

continueBtn.onclick=()=>{
    let xhr=new XMLHttpRequest();/*xml 파일 만들기*/
    xhr.open("POST","signup.php",true);
    xhr.onload=()=>{
        if (xhr.readyState===XMLHttpRequest.DONE){
            if(xhr.status===200){
                let data=xhr.response; /*url 전달되었는지 반응 보기*/
                /*
                               console.log(data);
                */
                if (data=="success"){
                    location.href="login.php"/*todo*/

                }else {/*
                   errorText.textContent=data;
                   errorText.style.display="block";
*/
                }

            }
        }
    }

    /* php로 form 데이터 ajax 방식으로 보내기*/
    let formData=new FormData(form);
    xhr.send(formData);

}

/* 토글 기능*/
const passwordField= document.querySelector(".form .field input[type='password']"),
    toggleBtn=document.querySelector(".form .field i");

toggleBtn.onclick =()=> {
    if (passwordField.type == "password") {
        passwordField.type = "text;"
        toggleBtn.classList.add("active")
    } else {
        passwordField.type = "password";
        toggleBtn.classList.remove("active")

    }
}

