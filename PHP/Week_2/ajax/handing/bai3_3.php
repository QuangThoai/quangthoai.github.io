<?php
  if ( isset($_FILES['UpLoad'])) {
    $fileSize = (int)$_FILES['UpLoad']['size'] / (1024 * 1024);
    if ($fileSize>=0 && $fileSize < 10) {
      move_uploaded_file($_FILES['UpLoad']['tmp_name'], '../../uploads/' . $_FILES['UpLoad']['name']);
    } else
      echo 'false';
  }
  else
    echo 'false';
?>