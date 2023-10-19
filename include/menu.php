<?php
	// если посетитель является гостем, т.е не авторизован
	if ($_SESSION["auth"] != true) {
		// пункты меню -Регистрация и -Вход
		$menu = '
			<a href="./#register">Регистрация</a> |
			<a href="./#login">Вход</a>
		';
	} else {
		// если пользователь авторизован

		// пункт меню -Главная
		$menu = '<a href="./">Главная</a> | ';
		
		// если пользователь является администратором
		if ($_SESSION["role"] == "admin") {
			// пункт меню -Заявки
			$menu .= sprintf ("<a href='./admin.php?uid=%d'>Заявки</a> |", $_SESSION["user_id"]);
		}
		
		// пункты меню -Личный кабинет и -Выход
		$menu .= sprintf ("
			<a href='./personal-cabinet.php?uid=%d'>Личный кабинет</a> |
			<a href='./service/logout.php'>Выход</a>",
			$_SESSION["user_id"]
		);

	}
	// вывод пунктов меню
	// пункты меню не подсвечивают активную страницу
	// да и вряд ли хватит время на реализацию 
	print ($menu);