$('.cookie-accept').click(function () { //on click event
    days = 182; //number of days to keep the cookie
    myDate = new Date();
    myDate.setTime(myDate.getTime()+(days*24*60*60*1000));
    document.cookie = "comply_cookie = comply_yes; expires = " + myDate.toGMTString(); //creates the cookie: name|value|expiry
    $("#cookies").slideUp("slow"); //jquery to slide it up
});


//---

document.getElementById("cookie-accept").onclick = function() {
    days = 182; //number of days to keep the cookie
    myDate = new Date();
    myDate.setTime(myDate.getTime()+(days*24*60*60*1000));
    document.cookie = "comply_cookie = comply_yes; expires = " + myDate.toGMTString(); //creates the cookie: name|value|expiry
    document.getElementById("cookies").parentNode.removeChild(elem);
}



function setCookie(name, value, expiredays) {
    var date = new Date();
    date.setDate(date.getDate() + expiredays);
    document.cookie = escape(name) + "=" + escape(value) + "; expires=" + date.toUTCString();
}

function closePopup() {
    if (document.getElementById("check").value) {
        setCookie("popupYN", "N", 1);
        self.close();
    }
}