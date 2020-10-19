<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Регистрация</title>
</head>
<body>
	<form method="post">
		<div>
	   		<label>ИМЯ</label>
	    	<input type="text" id="Username" class="required" title="Введите имя"><br>
	    </div>
	    <div>
	    	<label>ЭЛЕКТРОННЫЙ АДРЕС</label>
	    	<input type="email" id="Email" name="Email"><br>
	    </div>
	    <div>
	    	<label>АДРЕС</label>
	    	<input type="text" id="Addres" name="Addres"><br>
	    </div>
	    <div>
	    	<label>ТЕЛЕФОН</label>
	    	<input type="text" id="Phone" name="Phone" pattern="8([0-9]{3})[0-9]{3}-[0-9]{2}-[0-9]{2}"><br>
	    </div>
	    <div>
	    	<label>ПАРОЛЬ</label>
	    	<input type="password" id="password" name="password"><br>
	    </div>
	    <div>
	    	<label>ПОДТВЕРДИТЕ ПАРОЛЬ</label>
	    	<input type="password" id="confirm_password" name="confirm_password"><br>
	    </div>
	</form>
</body>
</html>