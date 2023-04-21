<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Владимир Никитин: Редактор</title>
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
			<li><a href="contacts.php">Почта</a></li>
			</ul>					
		</aside>
			<h3>Редактор</h3>


			<?php
	
			include 'inc.php';
			
			
			// блок записи в БД	

			if (isset($_POST["password"])) {
				if ($_POST["password"] == MyPW()) {
					
					MySaveBDSQL();
					
				} else {
					echo "<p style=\"margin-left:250px;\">У Вас нет прав доступа на редактирование.<br>"
					."Пожалуйста, вернитесь назад и повторите ввод.<br>"
					."Возможно Вы ошиблись при вводе пароля.</p>";
					exit;

				}
			}
			
			?>
			
	<FORM ACTION="edit.php" METHOD="POST">
		<table style="font-size:14px;margin:10px;padding:10px;border:1px gray solid;margin-left:230px;">
		<tr style="font-size:12px;margin:10px;padding:10px;"><td>Обо мне:</td>
		<td><TEXTAREA NAME="msg1" COLS=50 ROWS=10><?php echo MyReadBDSQL(2); ?></TEXTAREA></td></tr>
		<tr style="font-size:12px;margin:10px;padding:10px;"><td>Мои интересы:</td>
		<td><TEXTAREA NAME="msg2" COLS=50 ROWS=10><?php echo MyReadBDSQL(3); ?></TEXTAREA></td></tr>
		<tr style="font-size:12px;margin:10px;padding:10px;"><td>Полезное:</td>
		<td><TEXTAREA NAME="msg3" COLS=50 ROWS=10><?php echo MyReadBDSQL(4); ?></TEXTAREA></td></tr>
		<tr style="font-size:12px;margin:10px;padding:10px;"><td>Почта:</td>
		<td><TEXTAREA NAME="msg4" COLS=50 ROWS=10><?php echo MyReadBDSQL(5); ?></TEXTAREA></td></tr>
		<tr style="font-size:12px;margin:10px;padding:10px;"><td>&nbsp;</td>
		<td><INPUT TYPE="submit" VALUE=" Отредактировать ">
			<input type="password" name="password" value="Пароль">
		</td></tr>		
		</table>
	</FORM>
			
		
			
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