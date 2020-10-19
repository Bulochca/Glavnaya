<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Доска объявлений</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<header>
		<div>
			<img src="image/logo.png" width="90" height="100">
			<div>
				<button>
					<a href="account.php">Личный кабинет</a>
				</button>
				<div class="dropdown-content">
					<a href="my_ad.php">Мои объявления</a>
					<a href="favourites.php">Избраное</a>
					<a href="#">Выход</a>
				</div>
			</div>
			<button><a href="authorization.php">Вход</a></button>
			<button><a href="create_ad">Добавить объявления</a></button>
		</div>
		<div>
			<h2>Поиск среди всех объявлений</h2>
			<input type="text" name="Name">
			<select>
				<option>Все категории</option>
			</select>
			<select>
				<option>Все города</option>
				<option>Москва</option>
				<option>Санкт-Питербург</option>
				<option>Магнитогорск</option>
			</select>
			<button>Найти</button>
		</div>
	</header>


	<main>
		<form method="post">
			<div>Объявления</div>
		</form>
	</main>


	<footer>
		<div>		
			<div class="leftfooter">
				<ul>
					<li><h2>Контактная информация</h2></li>
					<li>Общество с ограниченой ответственостью "Пр-17-1" (ООО "Пр-17-1")</li>
					<li>ИНН 7777777777</li>
					<li>КПП 123456789</li>
					<li>ОГРН 1027739241309</li>
					<li>Телефон: 8(909)098-77-11</li>
				</ul>
			</div>
			<div class="rightfooter">
				<ul>
					<li><h2>Наши соцсети</h2></li>
					<li>pr17-1@mail.ru</li>
					<li>skype: 123456789</li>
					<li><a href=""><img src="image/vk.png"></a></li>
					<li><a href=""><img src="image/facebook.png"></a></li>
					<li><a href=""><img src="image/ok.png"></a></li>
					<li><a href=""><img src="image/twi.png"></a></li>
				</ul>
			</div>
		</div>
	</footer>
</body>
</html>