<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" href="ajax/css/style.css">
		<script language="javascript" src="http://code.jquery.com/jquery-3.1.1.min.js"></script>
		<script src="ajax/js/ajax.js"></script>
		<script src="ajax/js/jquery.form.js"></script>
	</head>
	<body>
		<div class="box-upload">
			<h2>Upload File And Read File</h2>
			<form action="ajax/handing/bai1.php" method="post" enctype="multipart/form-data" id="formUpload" onsubmit="return false;">
				<input type="file" name="UpLoad" id="fileUpLoad">
				<button type="submit" class="btn-submit" name="ok">Upload</button>
				<div class="progress">
					<div class="progress-bar">0%</div>
				</div>
				<div class="status"></div>
			</form>
		</div>
	</body>
</html>