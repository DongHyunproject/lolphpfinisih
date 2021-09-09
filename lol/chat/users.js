const  searchBar=document.querySelector(".users .search input");
const searchBtn=document.querySelector(".users .search button");
const userList=document.querySelector(".users .users-list");

searchBtn.onclick=()=>{
    searchBar.classList.toggle("active");
    searchBar.focus();
    searchBtn.classList.toggle("active");
    searchBar.value="";
}
searchBar.onkeyup=()=>{

    let searchTerm=searchBar.value;
    if (searchTerm !=""){
        searchBar.classList.add("active");
    }else {
        searchBar.classList.remove("active");
    }

    let xhr=new XMLHttpRequest();/*xml 객체 만들기*/
    xhr.open("POST","search.php",true);
    xhr.onload = ()=>{
        if (xhr.readyState===XMLHttpRequest.DONE){
            if(xhr.status===200){
                let data=xhr.response; /*url 전달되었는지 반응 보기*/
                userList.innerHTML=data;


            }
        }
    }
    xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded")
    xhr.send("searchTerm="+searchTerm);

}


setInterval(()=>{
    let xhr=new XMLHttpRequest();/*xml 객체 만들기*/
    xhr.open("GET","users.php",true);
    xhr.onload=()=>{
        if (xhr.readyState===XMLHttpRequest.DONE){
            if(xhr.status===200){
                let data=xhr.response; /*url 전달되었는지 반응 보기*/

                if (!searchBar.classList.contains("active")){
                    userList.innerHTML=data;
                }

            }
        }
    }
    xhr.send();
},500);