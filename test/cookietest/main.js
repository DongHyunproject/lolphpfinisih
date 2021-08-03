              jQuery(document).ready(function (){
                     var a= new Date();
                     a.setMinutes(a.getMinutes()+1);
                     jQuery('.yesiagree').click(function (){
                         jQuery('.stringPopup').hide();
                         Cookies.set("home_cookie_bar",1,{expires: a });
                         setCookie()
                     });
              });