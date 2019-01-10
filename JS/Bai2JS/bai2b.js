function submit_form() {
  var user=document.getElementById("user").value;
  var pass=document.getElementById("password").value;
  var email=document.getElementById("email").value;
  check_user(user);
  check_password(pass);
  check_email(email);
}
function reset_click() {
  document.getElementById("user").value="";
  document.getElementById("password").value="";
  document.getElementById("email").value="";
  document.getElementById("datecalendar").value="";
  document.getElementById("ck_pass").classList.add("dis_status");
  document.getElementById("ck_user").classList.add("dis_status");
  document.getElementById("ck_email").classList.add("dis_status");
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
