<?php
 if (isset($_POST['ok'])) {
   if (empty($_POST['idSession']) || empty($_POST['idSession'])) {
     echo 'a';
   } else {
     require('../../../../../Week_3/SessionDB/classSession.php');
     $session = new MySessionHandler();
     $session->start_session('quangthoai', false);
     $_SESSION[$_POST['idSession']]=$_POST['valueSession'];
     echo $_SESSION[$_POST['idSession']];
   }
 }
?>