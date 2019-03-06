<?php
	setcookie("thoai","Mr.Thoai is tranner at GMo-Z.com Runsystem",time()+600);
	if (isset($_POST['del'])) {
		setcookie("thoai", "", time() - 600);
		header("Location:cookie_php.php");
	}
?>
<!DOCTYPE html>
<html lang="vi">
  <head>
    <title></title>
    <meta charset="UTF-8">
  </head>
  <body>
    <form action="cookie_php.php" method="post">
      <?php
				if (isset($_COOKIE["thoai"] )) {
					echo "Tồn tại cookie: <br>";
					echo "Giá trị của cookie: " . $_COOKIE['thoai'] . "<br>";
					echo "<button name='del'>Delete</button>";
				}
				else {
					echo "Đã xóa cookie thành công";
				}
      ?>
    </form>
  </body>
</html>
