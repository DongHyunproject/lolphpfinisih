const form=document.querySelector(".typing-area"),
    inputField=form.querySelector(".input-field"),
    sendBtn = form.querySelector("button"),
    chatBox=document.querySelector(".chat-box");

;

form.onsubmit= (e)=>{/*페이지 리로드 막아줌.*/
    e.preventDefault();


}

sendBtn.onclick = ()=>{
    let xhr=new XMLHttpRequest();/*xml 객체 만들기*/
    xhr.open("POST","insert_chat.php",true);
    xhr.onload=()=>{
        if (xhr.readyState===XMLHttpRequest.DONE){
            if(xhr.status===200){
                inputField.value="";/*메시지 보내고나면 빈칸으로 다시 만들어주기*/


            }
        }
    }

    /* php로 form 데이터 ajax 방식으로 보내기*/
    let formData=new FormData(form);
    xhr.send(formData);

}
setInterval(()=>{
    let xhr=new XMLHttpRequest();/*xml 객체 만들기*/
    xhr.open("POST","get_chat.php",true);
    xhr.onload= ()=>{
        if (xhr.readyState===XMLHttpRequest.DONE){
            if(xhr.status===200){
                let data=xhr.response; /*url 전달되었는지 반응 보기*/
                chatBox.innerHTML=data;


            }
        }
    }
    /* php로 form 데이터 ajax 방식으로 보내기*/
    let formData=new FormData(form);
    xhr.send(formData);

},500);