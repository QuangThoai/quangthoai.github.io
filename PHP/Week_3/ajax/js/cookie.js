  var result=document.getElementById('result');
  var cname="thoai";
  var cvalue="quangthoai";
  //Event when click button
  var btnDelete=document.getElementById('btnDel');
  btnDelete.onclick=function () {
    removeCookie(cname);
    result.innerHTML="Đã xóa cookie "+cname;
  };
  //Construct cookie
  setCookie(cname,cvalue,3600);
  result.innerHTML="Cookie "+cname+" : "+getCookie("thoai");
  //Function set cookie with input name, value and timeout
  function setCookie(name, value, time) {
    var now = new Date();
    now.setTime(now.getTime() + time);
    var expires = "expires="+ now.toUTCString();
    document.cookie = name + "=" +  value + "; " + expires;
  }
  //Function get cookie with name
  function getCookie(nameCookie) {
    var name = nameCookie + "=";
    var list = document.cookie.split(';');
    for(var i = 0; i <list.length; i++) {
      var cookie = list[i];
      if (cookie.indexOf(name) == 0) {
        return cookie.substring(name.length,cookie.length);
      }
    }
    return "";
  }
  //Function remove cookie
  function removeCookie(nameCookie) {
    var now = new Date();
    now.setTime(now.getTime() - 3600);
    var expires = "expires="+ now.toUTCString();
    document.cookie = nameCookie + "="+";" + expires;
  }