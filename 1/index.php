<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

include (__DIR__ . '/func.php');

//Если переменная не пуста то:
if(!empty($_POST['comment'])){
	//то вызываем функцию (не до конца понимаю как мы вызываем функцию, return и echo выдают ошибку)
	save_comm();
	//редирект что бы сбросить полученны значения (сохраняются в форме)
	header("Location: index.php");
	exit;
}
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

<p>
<!--Выводим на экран содержимое новообразованного файла через функцию nl2br, что бы перевести в html все переносы строк 
(Иначе не сограняются так как в get_comm() мы переводим массив в строку)-->
    <?php echo nl2br(get_comm()); ?>
</p>

<form action="" method="post">
	<label for="comm">Введите текст</label><br>
	<input type="text" name="comment" id="comm">
	<label for="">
		<input type="submit" value="Отправить">
	</label>
</form>



</body>
</html>
