<?php
  if ( isset($_FILES['UpLoad'])) {
    $extension = pathinfo($_FILES['UpLoad']['name'],PATHINFO_EXTENSION);
    if ($extension=='txt') {
      move_uploaded_file($_FILES['UpLoad']['tmp_name'], '../../uploads/' . $_FILES['UpLoad']['name']);
      $file= new SplFileObject("../../uploads/".$_FILES['UpLoad']['name']);
      while(!$file->eof())
      {
        echo $file->fgets()."<br>";
      }
    } else
      echo 'errorextension';
  }
  else
    echo 'false';
?>