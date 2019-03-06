<?php
 if (isset($_POST['ok'])) {
   if (empty($_POST['idSession']) || empty($_POST['idSession'])) {
     echo 'Empty session';
   } else {
     require('../../../../../Week_3/SessionDB/classSession.php');
     $session = new MySessionHandler();
     $session->start_session('quangthoai', false);
     $result = $session->read($_POST['idSession']);
     echo (empty($result)) ? '<b>This session is not exist..</b>' : 'Result: <b>' . $session->read($_POST['idSession']) . '</b>';
   }
 }
?>