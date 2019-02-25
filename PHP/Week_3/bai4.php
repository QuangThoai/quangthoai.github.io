<?php
  // Set type of file is csv
  header("Content-type: text/csv");
  //download file when access page
  header("Content-Disposition: attachment; filename=file.csv");
?>