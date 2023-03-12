<?php
	// cтарт сессии
	session_start();	
	// подключение файла соединения с базой данной
	include ("connect.php"); 
	// подключаем сервисные функции
	include ("service/func.php");
?>
<!-- подключение файла Хедера --> 
<?php include ("include/header.php"); ?> 

	<main onload="onload_page()">
		<div class="content">
			
			<div class="heading">Последние решённые заявки</div>
			<!-- счётчик количества решённых заявок -->
			<nav class="count">
				<!-- вызываем функцию из файла service/func.php -->
				<!-- возвращает количество заявок -->
				<p>Количество решённых заявок: <b><?php print (fnGetCountApplications()) ?></b></p>
			</nav>
			
			<!-- последние решённый заявки -->
			<div class="container">
				<!-- вызываем функцию из файла service/func.php -->
				<!-- возвращает список из 4 последних заявок -->
				<?php print (fnGetLatestApplications()) ?>
			</div>

			<?php 
				// подключаем формы
				include ("include/form_reg.php");
				include ("include/form_login.php");
			?>

		</div>
	</main>

<!-- подключение файла Футера -->
<?php include ("include/footer.php") ?>