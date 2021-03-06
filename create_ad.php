<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Добавление нового объявлеия</title>
</head>
<body>
	<main>
		<form enctype="multipart/form-data" method="post">
			<h1>Создание объявления</h1>
			<div>
				<p><input type="text" name="СontactPerson" placeholder="Контактное лицо" required></p>
				<p><input type="text" name="City" placeholder="Населеный пункт" required></p>
				<p><input type="text" name="Phone" placeholder="Номер телефона" required pattern="8([0-9]{3})[0-9]{3}-[0-9]{2}-[0-9]{2}"></p>
				<p><input type="text" name="Email" placeholder="Email" required></p>
				<p><select name="Category" placeholder="Выберите категорию"><
					<option>Все категории</option>
				</select></p>
				<p><input type="text" name="Name" placeholder="Название товара или услуги" required></p>
				<p><input type="text" name="Cost" placeholder="Стоимость" required></p>
				<p><textarea name="Description" placeholder="Описание"></textarea></p>
				<p><textarea name="Infi" placeholder="Общая информация"></textarea></p>
				<p><textarea name="DopInfo" placeholder="Дополнительная информация"></textarea></p>
			</div>
			<div>
				<p><input type="file" name="Foto" multiple accept="image/*"></p>
				<p><button>Создать объявление</button></p>
			</div>
		</form>
	</main>
</body>
</html>