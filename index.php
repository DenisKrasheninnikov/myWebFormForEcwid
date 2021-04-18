<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Обратная связь</title>
	<link rel="stylesheet" href="https://d35z3p2poghz10.cloudfront.net/ecwid-sdk/css/1.3.9/ecwid-app-ui.css"/>
</head>
<body>
	<form action="mail.php" autocomplete="off" name="myForm" method="POST">
		<h1 class="h1">Ваши данные</h1>
		<div class="form-item>">
			<div class="form-group">
				<label for="firstname">Имя: </label>
				<input type="text" class="form-control" name="firstname" id="firstname" onfocus="this.value=''" placeholder="Имя" required>
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">E-mail: </label>
				<input type="text" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" onfocus="this.value=''" placeholder="user@email.com" required>
			</div>
			<div class="form-group">
				<label for="phone">Телефон: </label>
				<input type="text" class="form-control" placeholder="7(000)000-00-00" id="phone" name="phone" onfocus="this.value=''" required />
			</div>
			<div class="form-group">
				<label for="dateOfBirth">Дата рождения: </label>
				<input type="date" class="form-control" name="dateOfBirth" id="dateOfBirth" onfocus="this.value=''" placeholder="Дата рождения" required>
			</div>

			<div class="fieldset fieldset--textarea">
				<label for="contact_list">Поле для вопроса:</label>
				<div class="field field--monospace field--filled form-group">
					<textarea name="contact_list" class="field__textarea" id="contact_list" required></textarea>
				</div>
			</div>
		</div>
		<br>

		<div class="center">
			<button type="submit" class="btn btn-primary btn-medium" name="otprav">Отправить</button>
		</div>
	</form>
</body>
</html>