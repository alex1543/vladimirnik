<!doctype html>
<html lang="ru">
<head>
<!-- saved from url=(0014)about:internet -->
<script>
document.createElement('header');
document.createElement('footer');
document.createElement('nav');
document.createElement('main');
document.createElement('aside');
document.createElement('content');

</script>
	<meta charset="UTF-8">
	<title>Владимир Никитин: Контакты</title>
	<meta name="description" content="Владимир Никитин, Личная страничка"> 
    <meta name="Keywords" content="Владимир Никитин, Личная страничка">
    
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<header>
		<a href="index.html"><img src="img/logo.jpg" title="Личная страничка Владимира Никитина" alt="Личная страничка Владимира Никитина" /></a>
		<nav>
		</nav>
	</header>
	<content>	
		<main>
		<aside>

			<ul>
			<li><a href="index.html">Главная</a></li>
			<li><a href="about.php">Обо мне</a></li>
			<li><a href="guestbook.php">Гостевая книга</a></li>
			<li><a href="interests.php">Мои интересы</a></li>
			<li><a href="information.php">Полезное</a></li>	
			<p>Почта</p>
			</ul>					
		</aside>
			<h3>Контакты</h3>

		<?php 

		include 'inc.php';
		echo MyReadBDSQL(5); 

		?>		
			
		</main>	
	</content>
	<footer>
		<a href="edit.php">Редактор</a>
		<h6>© 2014 Saint-Petersburg,<br />
		Веб-мастер: Alexey Subbotin<br />
		alesu1543@gmail.com</h6> 
	</footer>	
</body>
</html>