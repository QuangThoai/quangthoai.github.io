var status=0;
var date=new Date();
var curr_month=date.getMonth();
var curr_year=date.getFullYear();
var fristday;
// create a table calendar
function create_calendar() {
  var container = document.getElementById("contain");
  var navcalendar=document.createElement("div");
  navcalendar.setAttribute("class","navcalendar");
  navcalendar.setAttribute("id","nav_calendar");
  var table = document.createElement("table");
  table.setAttribute("class", "tab");
  table.setAttribute("id", "calendar");
  create_nav_month_year(table);
  create_dayinweek(table);
  navcalendar.appendChild(table);
  container.appendChild(navcalendar);
}
// create a row about days in week
function create_dayinweek(table) {
  var create_tr=document.createElement("tr");
  var dayinweek=["Sun","Mon","Tue","Wed","Thu","Fri","Sat"];
  for (var i=0;i<dayinweek.length;i++)
  {
    var create_td=document.createElement("td");
    create_td.setAttribute("class","daysinweek");
    create_td.innerHTML=dayinweek[i];
    create_tr.appendChild(create_td);
  }
  table.appendChild(create_tr);
}
// event handle when click in the textbox calendar
function showcalendar() {
  var contain=document.getElementById("contain");
  var navcalendar=document.getElementById("nav_calendar");
  var table=document.getElementById("calendar");
  if(status==0){
    if(contain.children.length>=2) {
      create_calendar();
      document.getElementById("nav_calendar").classList.remove("navcalendar");
      status=1;
      insert_row_calendar();
      return;
    }
    else
    {
      document.getElementById("nav_calendar").classList.remove("navcalendar");
      status=1;
      return;
    }
  }
  if(status==1) {
    document.getElementById("nav_calendar").classList.add("navcalendar");
    status=0;
    return;
  }
}
// How many days in months of year?
function daysInMonth (month, year) {
  return new Date(year, month+1, 0).getDate();
}
function insert_row_calendar() {
  var table=document.getElementById("calendar");
  del_calendar(table);
  for(var i=7;i<=42;i+=7)
  {
    var row=document.createElement("tr");
    for(var j=0;j<=6;j++)
    {
      var col=document.createElement("td");
      row.appendChild(col);
    }
    table.appendChild(row);
  }
  fristday=new Date(curr_year,curr_month,1);
  insert_day_calendar(fristday);
}
function del_calendar(table) {
  if(table.rows.length>0)
  {
    for(var i=table.rows.length-1;i>=2;i--)
    {
      table.deleteRow(i);
    }
  }
}
function insert_day_calendar(pDay) {
  var table=document.getElementById("calendar");
  var index= pDay.getDay();
  var change_index;
  var songay=daysInMonth(curr_month,curr_year);
  var day_st=1;
  var crrMonth=date.getMonth();
  var crrYear=date.getFullYear();
  for(var i=0;i<(index+songay)/7;i++) {
    if(i==0)
      change_index=index;
    else
      change_index=0;
    for (var j = change_index; j < 7; j++) {
      if (day_st <= songay) {
        table.rows[i+2].cells[j].innerHTML = day_st;
        if(date.getDate()==day_st && curr_month==crrMonth && curr_year==crrYear)
          table.rows[i+2].cells[j].setAttribute("class","curr-day");
        if(j==0)
          table.rows[i+2].cells[j].setAttribute("class","sunday");
        table.rows[i+2].cells[j].onclick=function(){
          showdate(this.innerHTML);
        }
        day_st++;
      }
      else
      {
        table.deleteRow(i+3);
      }
    }
  }
}
function showdate(ChoseDay) {
  var txt_month;
  if(ChoseDay<10)
    ChoseDay = "0" + ChoseDay;
  if((curr_month+1)<9)
    txt_month="0"+(curr_month+1);
  else
    txt_month=(curr_month+1);
  document.getElementById("datecalendar").value= ChoseDay + "/" + txt_month + "/" + curr_year;
  if(status==1) {
    document.getElementById("nav_calendar").classList.add("navcalendar");
    status=0;
    return;
  }
}
function changeMonth_Year() {
  document.getElementById("month").value=curr_month;
  document.getElementById("year").value=curr_year;
}
function preMonth() {
  if(curr_month==0)
  {
    curr_month=11;
    curr_year=curr_year-1;
  }
  else
    curr_month=curr_month-1;
  changeMonth_Year();
  insert_row_calendar();
}
function nextMonth() {
  if(curr_month==11)
  {
    curr_month=0;
    curr_year=curr_year+1;
  }
  else
    curr_month=curr_month+1;
  changeMonth_Year();
  insert_row_calendar();
}
function preYear() {
  if(curr_year>=1900)
    curr_year-=1;
  else
    alert("Year is null");
  changeMonth_Year();
  insert_row_calendar();
}
function nextYear() {
  if(curr_year<=date.getFullYear()+30)
    curr_year+=1;
  else
    alert("Year is null");
  changeMonth_Year();
  insert_row_calendar();
}

// create rows month and year
function create_nav_month_year(table){
  var create_tr=document.createElement("tr");
  var create_th_preYear=document.createElement("td");
  create_th_preYear.innerHTML="<=";
  create_th_preYear.setAttribute("class","control-btn");
  create_th_preYear.setAttribute("onclick","preYear()")
  var create_th_preMonth=document.createElement("td");
  create_th_preMonth.setAttribute("class","control-btn");
  create_th_preMonth.innerHTML="<-";
  create_th_preMonth.setAttribute("onclick","preMonth()")
  var create_th_Month=document.createElement("td");
  create_th_Month.setAttribute("colspan","2");
  var month=document.createElement("select");
  month.setAttribute("id","month");
  var monthInYear=["January","February","March","April","May","June",
    "July","August","September","October","November","December"];
  for (var i = 0; i < 12; i++) {
    var cr_month = document.createElement("option");
    cr_month.setAttribute("value", i);
    cr_month.innerHTML = monthInYear[i];
    if(i==curr_month)
    {
      cr_month.selected="selected";
    }
    month.appendChild(cr_month);
  }
  month.onchange=function (){
    curr_month=month.value;
    insert_row_calendar();
  }
  create_th_Month.appendChild(month);
  var create_th_Year=document.createElement("td");
  var year=document.createElement("select");
  year.setAttribute("id","year");
  for(var i= 1900;i<= date.getFullYear()+30;i++)
  {
    var create_year=document.createElement("option");
    create_year.innerHTML=i;
    if(i==curr_year)
    {
      create_year.selected="selected"
    }
    year.appendChild(create_year);
  }
  year.onchange=function(){
    curr_year=year.value;
    insert_row_calendar();
  }
  create_th_Year.appendChild(year);
  var create_th_nextYear=document.createElement("td");
  create_th_nextYear.innerHTML="=>";
  create_th_nextYear.setAttribute("class","control-btn");
  create_th_nextYear.setAttribute("onclick","nextYear()")
  var create_th_nextMonth=document.createElement("td");
  create_th_nextMonth.innerHTML="->";
  create_th_nextMonth.setAttribute("class","control-btn");
  create_th_nextMonth.setAttribute("onclick","nextMonth()")
  create_tr.appendChild(create_th_preYear);
  create_tr.appendChild(create_th_preMonth);
  create_tr.appendChild(create_th_Month);
  create_tr.appendChild(create_th_Year);
  create_tr.appendChild(create_th_nextMonth);
  create_tr.appendChild(create_th_nextYear);
  table.appendChild(create_tr);
  table.appendChild(create_tr);
}

