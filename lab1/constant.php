<?php
define('MY_CONSTANT', 'Значение моей константы');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Константы</title>
</head>
<body>
	<h1>Константы</h1>
	<?php

	if (defined('MY_CONSTANT')) {
		echo 'Значение константы MY_CONSTANT: ' . MY_CONSTANT . '<br><br>';
	} else {
		echo 'Константа MY_CONSTANT не определена<br><br>';
	}

	echo 'Текущая версия PHP: ' . PHP_VERSION . '<br>';
	echo 'Директория скрипта: ' . __DIR__ . '<br>';
	?>
</body>
</html>