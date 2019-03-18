$(document).ready(function() {
  var btnShow = $('#js-btn-show');
  var listUsers = $('#js-users');

  btnShow.click(function() {
    listUsers.css('display', 'block');
  });
});