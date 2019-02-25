  <?php
  echo $createFile = tempnam('Files/', 'filetext');
  $file = new SplFileObject($createFile,'w');
  $file->fwrite('Trần Quang Thoại');
?>