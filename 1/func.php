<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

//file Читает содержимое файла и помещает его в массив
$gbook = file(__DIR__ . '/db.txt');

//Переводим элементы массива в строку, в качестве разделителя перенос строки
$book = implode("\n", $gbook);

//Собираем введенное пользователем значение, записываем в файл (db.txt)
function save_comm(){
	$str = $_POST['comment'] . "\n";
	//В файл помещаем значение принятое от пользователя, с пометкой FILE_APPEND, что бы сцществующий файл не перезаписывался, а принятое значение дописывалалось в конец
	file_put_contents('db.txt', $str, FILE_APPEND);
}

//Читает содержимое файла целиком и помещаем его в строку,
function get_comm(){
	return file_get_contents('db.txt');
}
