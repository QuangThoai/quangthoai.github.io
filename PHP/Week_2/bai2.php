<html>
  <body>
    <form action="" method="post" enctype="multipart/form-data">
      <input type="file" name="upload">
      <input type="submit" name="ok">
    </form>
  </body>
</html>
<?php
  if (isset($_POST['ok'])) {
    if (isset($_FILES['upload'])) {
      if ($_FILES['upload']['error'] > 0)
        echo "Upload lỗi rồi!";
      else {
        move_uploaded_file($_FILES['upload']['tmp_name'], 'uploads/' . $_FILES['upload']['name']);
        echo "upload thành công <br/>";
        echo 'Dường dẫn: uploads/' . $_FILES['upload']['name'] . '<br>';
        echo 'Loại file: ' . $_FILES['upload']['type'] . '<br>';
        echo 'Dung lượng: ' . ((int)$_FILES['upload']['size'] / 1024) . 'KB';
      }
    }
  }
?>