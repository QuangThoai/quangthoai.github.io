<?php
  require('classSession.php');
  $session = new MySessionHandler();
  // Set to true if using https
  $session->start_session('_s', false);

  $_SESSION['Test'] = 'This is test session';
  echo $_SESSION['Test'];
?>