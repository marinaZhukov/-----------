<!DOCTYPE html>
<html lang=ru>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Техносервис</title>
		<!-- подключение файла стилей -->
		<link rel="stylesheet" href="./css/style.css">
		<!-- подключение файлов скриптов -->
		<!-- для удобства скрипты вынесены в отдельные файлы -->
		<!-- скрипт носит имя файла в котором используется -->
		<script src="./script/index.js"></script>
		<script src="./script/personal-cabinet.js"></script>
		<script src="./script/admin.js"></script>
	</head>
	<body>
		<!-- logo сайта -->
		<div class="logo">
			<div class="content">
				<div class="img">
					<img src="logo/logo.ico" alt="">
				</div>
				<div class="text">
					<h1>Техносервис</h1>
					<h3>Ремонт и диагностика любой сложности</h3>
				</div>
			</div>
		</div>
		<header>
			<div class="content">
				<!-- подключение файла меню -->
				<?php include ("menu.php"); ?>
			</div>
		</header>
		<div class="message">
			<!-- вывод сообщений о действиях пользователя (в случае его наличия) -->
			<?php if (isset ($_GET["message"])) print ($_GET["message"]); ?>
		</div>