<?php
	session_start();
	$name="thoai";
	$_SESSION[$name]="Trần Quang Thoại";
	if (isset($_GET['del'])) {
		echo "Đã xóa session $name thành công";
		unset($_SESSION[$name]);
	}
?>
<!DOCTYPE html>
<html lang="vi">
	<head>
		<title></title>
		<meta charset="UTF-8">
	</head>
	<body>
		<form action="index.php" method="get">
			<?php
				if (isset($_SESSION[$name])) {
					echo "Tồn tại session: ".$name."<br>";
					echo "Giá trị của session: " . $_SESSION[$name] . "<br>";
					echo "<button name='del'>Delete</button>";
				}
				else {
					echo "Không tồn tại session";
				}
			?>
		</form>
	</body>
</html>
