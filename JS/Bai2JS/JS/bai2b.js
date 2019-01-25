function submit_form() {
  var user=document.getElementById("user").value;
  var pass=document.getElementById("password").value;
  var email=document.getElementById("email").value;
  var brithday=document.getElementById("datecalendar").value;
  check_user(user);
  check_password(pass);
  check_email(email);
  check_birthday(brithday);
}
function reset_click() {
  document.getElementById("user").value="";
  document.getElementById("password").value="";
  document.getElementById("email").value="";
  document.getElementById("datecalendar").value="";
  document.getElementById("ck_pass").classList.add("dis_status");
  document.getElementById("ck_user").classList.add("dis_status");
  document.getElementById("ck_email").classList.add("dis_status");
  document.getElementById("ck_birthday").classList.add("dis_status");
}
function check_user(user) {
  if (user == "" || user.length < 8) {
    document.getElementById("ck_user").classList.remove("dis_status");
  } else {
    document.getElementById("ck_user").classList.add("dis_status");
  }
}
function check_password(pass) {
  if (pass == "" || pass.length < 8) {
    document.getElementById("ck_pass").classList.remove("dis_status");
  } else {
    document.getElementById("ck_pass").classList.add("dis_status");
  }
}
function check_email(email) {
  if (email == "" || email.length < 8) {
    document.getElementById("ck_email").classList.remove("dis_status");
    document.getElementById("ck_email").innerHTML = "Email not null and length more than 8 characters" ;
  } else {
    var re= /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if(re.test(email))
    {
      document.getElementById("ck_email").classList.add("dis_status");
    }
    else
    {
      document.getElementById("ck_email").classList.remove("dis_status");
      document.getElementById("ck_email").innerHTML = "Email: example@gmail.com" ;
    }
  }
}
function check_birthday(birthday) {
  if (birthday == "") {
    document.getElementById("ck_birthday").classList.remove("dis_status");
    document.getElementById("ck_birthday").innerHTML = "Brithday not null and before today" ;
  }
  else{
    var date=new Date();
    var curr_date=new Date();
    var day_birth=birthday.substr(0,2);
    var month_birth=birthday.substr(3,2) -1;
    var year_birth=birthday.substr(6,4);
    date.setFullYear(year_birth,month_birth,day_birth);
    if(date>curr_date)
    {
      document.getElementById("ck_birthday").classList.remove("dis_status");
      document.getElementById("ck_birthday").innerHTML = "Brithday not null and before today" ;
    }
    else
    {
      document.getElementById("ck_birthday").classList.add("dis_status");
    }
  }

}
