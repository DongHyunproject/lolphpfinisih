const form=document.querySelector(".typing-area"),
    inputField=form.querySelector(".input-field");

const sendBtn = form.querySelector("button"),
    chatBox=document.querySelector(".chat-box");



form.onsubmit = (e)=>{/*페이지 리로드 막아줌.*/
    e.preventDefault();


}

/*
    inputField.focus();
    inputField.onkeyup = ()=>{
        if(inputField.value != ""){
            sendBtn.classList.add("active");
        }else{
            sendBtn.classList.remove("active");
        }
    }
*/

sendBtn.onclick = ()=>{




    let xhr=new XMLHttpRequest();/*xml 객체 만들기*/
    xhr.open("POST","insert_chat.php",true);
    xhr.onload = ()=>{
        if (xhr.readyState===XMLHttpRequest.DONE){
            if(xhr.status===200){

                inputField.value="";/*메시지 보내고나면 빈칸으로 다시 만들어주기*/
                scroolToBottom();


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
                if (!chatBox.classList.contains("active")){
                    scroolToBottom();

                }
            }
        }
    }
    /* php로 form 데이터 ajax 방식으로 보내기*/
    let formData=new FormData(form);
    xhr.send(formData);

},500);

function scroolToBottom(){
chatBox.scrollTop=chatBox.scrollHeight;


}
chatBox.onmouseenter = ()=>{
chatBox.classList.add("active");
}
chatBox.onmouseleave = ()=>{
    chatBox.classList.remove("active");
}