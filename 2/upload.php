<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

/*var_dump($_FILES);*/

function loading(){
	//Если файл не пуст
	if(!empty($_FILES)){
		//создаем переменную для собранной от пользователя информации
		$uploaded = $_FILES['newimg'];
		//Если в полученном массиве нет ошибоок то:
		if ($uploaded['error'] == 0){
			//Собираем имя полученное от пользователя
			$name = basename($_FILES["newimg"]["name"]);
			//создаем из имени массив, разделенный точкой
			$get_neme = explode('.', $name);
			//Переводим последнее значение массива в верхний регистр
			$val = strtoupper(end($get_neme));
			//если переменная (из массива) соответствует указанным значениям, то осуществляем загрузку
			if ($val == 'JPG' || $val == 'JPEG' || $val == 'PNG') {
				//Перемещаем загруженный файл из tmp в нужное нам место
				move_uploaded_file( $uploaded['tmp_name'], __DIR__ . "/img/$name" );
				//при совпадении всех условий возвращаем:
				return 'Файл загружен успешно';
			}else{
				//Иначе:
				return 'Ошибка' ;
			}
		};
	}
};



