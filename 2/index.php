<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

include (__DIR__ . '/upload.php');

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>

<form action="" method="post" enctype="multipart/form-data" >
	<label for="img">Загрузить файл</label><br>
		<input type="file" name="newimg" id="img">
	<label for="">
		<input type="submit" value=Загрузить>
	</label>
</form>

<p>
	<?php echo loading(); ?>
</p>

</body>
</html>