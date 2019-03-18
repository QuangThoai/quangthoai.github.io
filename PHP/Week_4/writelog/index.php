<?php
  include "log.php";
  $log=new Log();
  $log->emergency("This is log of emergency");
  $log->alert("This is log of alert");
  $log->critical("This is log of critical");
  $log->error("This is log error");
  $log->warning("This is log warning");
  $log->notice("This is log notice");
  $log->info("This is log info");
  $log->debug("This is log debug");
  $log->readLog();
?>