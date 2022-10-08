<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>UnionLab</title>
	<link rel="stylesheet" href="styles/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Lato&family=Roboto:wght@400&family=Rubik&display=swap" rel="stylesheet">
</head>
<body>
	<header>
		<div class="logo">
			<div class="logo_txt">
				<a href="">
					<p>UnionLab</p>
				</a>
			</div>
		</div>
		<nav class="navigation">
			<div class="nav_text">
				<a href="#" class="nav_link1">Главная</a>
			</div>
			<div class="nav_text">
				<a href="#" class="nav_link2">Найди работу</a>
			</div>
			<div class="nav_text">
				<a href="#" class="nav_link3">Найди работника</a>
			</div>
		</nav>
		<div class="login_bar">
			<div class="login_text">
				<a href="#">
					<p>Войти</p>
				</a>
			</div>
			<div class="login_photo">
				<a href="#">
					<img src="img/icon-human.svg" alt="man">
				</a>
			</div>
		</div>
		<div class="language_bar">
			<div class="language_text">
				<p>Русский</p>
			</div>
			<div class="language_photo">
				<img src="img/Arrow_Language.svg" alt="arrow">
			</div>
		</div>
	</header>
	<content>
		<div class="container1">
			<div class="title">
				<div class="title_block">
					<h3 class="h3">Поиск работников</h3>
				</div>
				<div class="sort">
					<div class="sort_block">
						<div class="start_show">
							<div class="sort_text1 sort_block_text">
								<p>Сначала новые</p>
							</div>
							<div class="img_sort">
								<img src="img/Arrow_Sort.svg" alt="" >
							</div>
						</div>
						<div class="sort_text2 sort_block_text">
								<p>Сначала<br> популярные</p>
						</div>
					</div>
				</div>
			</div>
			<div class="main_block">
				<div class="title_main_block">
					<div class="title_main_text">
						<b><h4>Резюме</h4></b>
					</div>
				</div>
				<div class="main_text_block">
					<?php
						for($i = 0; $i < 4; $i++):
					?>
					<div class="person_block">
						<div class="name_block">
							<a href="#">
								<p>Иванов Иван</p>
							</a>
						</div>
						<div class="character_block">Опыт работы: какой-то. Образование: какое-то. Навыки: какие-то. Личные ценности: какие-то. И т.д. 
						</div>
					</div>
					<?php endfor;?>
				</div>
				<div class="main_invite_block">
					<div class="main_invite_text">
						<a href="#">
							<p>Размести своё объявление о работе</p>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="container2">
			<div class="title">
				<div class="title_block">
					<h3 class="h3">Поиск работадателей</h3>
				</div>
				<div class="sort2">
					<div class="sort_block">
						<div class="start_show">
							<div class="sort_text1 sort_block_text">
								<p>Сначала новые</p>
							</div>
							<div class="img_sort">
								<img src="img/Arrow_Sort.svg" alt="" >
							</div>
						</div>
						<div class="sort_text2 sort_block_text">
								<p>Сначала<br> популярные</p>
						</div>
					</div>
				</div>
			</div>
			<div class="main_block">
				<div class="title_main_block">
					<div class="title_main_text">
						<b><h4>Вакансии</h4></b>
					</div>
				</div>
				<div class="main_text_block">
					<?php
						for($i = 0; $i < 4; $i++):
					?>
					<div class="person_block">
						<div class="name_block">
							<p>Прогрaммист</p>
						</div>
						<div class="character_block">Опыт работы: какой-то. Образование: необязательно. Навыки: какие-то. Требования: какие-то. Компания вам предоставит ... Зарплата ... И т.д. 
						</div>
					</div>
					<?php endfor;?>
				<div class="main_invite_block">
					<div class="main_invite_text">
						<a href="#">
							<p  class="un_padding">Размести своё резюме</p>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="container3">
			<div class="about_block">
				<div class="about_title">
					<div class="title_block_about">
						<h3 class="h3">О нас</h3>
					</div>
				</div>
				<div class="about_text">
					Комапания UnionLab является нечто большим, чем просто сайтом для 
					поисков работников. Мы современная платформа для взаимосвязи 
					между работником и соответственно работадателем. Благодаря 
					функциям нашего сайта пользователи могут общаться друг с другом,
					получать информацию о работниках или о работадателях, смотреть
					рекомендации из учебных заведений, а также найти для себя
					подходящий обучающий курс.
					Хоть мы пока и не влавствуем на рынке, и наши услуги являются 
					уникальнами, но точно знаем, что потребитель останется довольным
					после использования наших услуг 
				</div>
			</div>
		</div>
	</content>
	<footer>
		<div class="logo">
			<div class="logo_txt">
				<a href="">
					<p>UnionLab</p>
				</a>
			</div>
		</div>
	</footer>

	<script src="scripts/script.js"></script>
</body>
</html>