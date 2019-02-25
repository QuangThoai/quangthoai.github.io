<?php
  if ( isset($_FILES['UpLoad'])) {
    $extension = pathinfo($_FILES['UpLoad']['name'],PATHINFO_EXTENSION);
    if ($extension=='txt') {
      move_uploaded_file($_FILES['UpLoad']['tmp_name'], '../../uploads/' . $_FILES['UpLoad']['name']);
      $file=fopen('../../uploads/' . $_FILES['UpLoad']['name'],'r') or die ('Can not open file');
      while (!feof($file))
        echo fgets($file)."<br>";
      fclose($file);
    } else
      echo 'errorextension';
  }
  else
    echo 'false';
?>