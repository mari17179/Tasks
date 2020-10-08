<html>
<head></head>
<body>
	<?php

	if(isset($_POST['submit'])) {
		if (empty($_POST['comment'])) {
			$errorInComment = "Комментарий пустой";
		}
		if (empty($_POST['name'])) {
			$errorInName = "ФИО не указано";
		}
		if (empty($_POST['phone'])) {
			$errorInPhone = "Номер телефона не указан";
		}
		$signOfWrongEmail = "@gmail.ru";
		$isWrongEmail = strpos($_POST['email'], $signOfWrongEmail);
		if ($isWrongEmail) {
			$errorInEmail = "Регистрация пользователей с таким почтовым адресом невозможна";
		}
		if (empty($errorInComment) && empty($errorInName) && empty($errorInPhone) && empty($errorInEmail)) {
			echo "<script>alert(\"Форма отправлена!\");</script>";
		}
	}

	?>


	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css' />
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' />
  <link rel="stylesheet" type="text/css" href="style.css">

	<h1>Форма обратной связи</h1>

	<div class='container'>
		<div class='row main-form'>
			<form method='POST'>

			<div class='form-group'>
				<label for='comment' class='cols-sm-2 control-label'>Комментарий</label>
				<div class='cols-sm-10'>
				<span class="warning"><?php echo $errorInComment;?></span>
					<div class='input-group'>
					<textarea type='text' rows='8' class='form-control' name='comment' id='commente' placeholder='Введите комментарий' required ></textarea>
					</div>
				</div>
			</div>


		<div class='form-group'>
			<label for='name'  control-label>ФИО</label>
			<div class='cols-sm-10'>
			<span class='warning'><?php echo $errorInName;?></span>
				<div class='input-group'>
				<input type='text' class='form-control' name='name' id='name' placeholder='Введите ФИО' required />
				</div>
			</div>
		</div>

		<div class='form-group'>
			<label for='address' class='cols-sm-2 control-label'>Адрес</label>
			<div class='cols-sm-10'>
				<div class='input-group'>
				<input type='text' class='form-control' name='address' id='address' placeholder='Введите адрес'/>
				</div>
			</div>
		</div>

		 <div class='form-group'>
			 <label for='email' class='cols-sm-2 control-label'>Электронный адрес</label>
			 <div class='cols-sm-10'>
			 <span class="warning"><?php echo $errorInEmail;?></span>
				 <div class='input-group'>
				 <input type='email' class='form-control' name='email' id='email' placeholder='Введите электронный адрес'/>
				 </div>
			 </div>
		 </div>

		 <div class='form-group'>
			 <label for='phone' class='cols-sm-2 control-label'>Мобильный телефон</label>
			 <div class='cols-sm-10'>
			 <span class="warning"><?php echo $errorInPhone;?></span>
				 <div class='input-group'>
				 	<input type='text'  class='form-control' name='phone' id='phone' placeholder='Введите мобильный телефон' required />
				 </div>
			 </div>
		 </div>

		 <label class='custom-file'>
			<input type='file' id='file' class='custom-file-input'>
			<span class='custom-file-control'></span>
		 </label>


		 <div class='form-group'>
			<button type='submit' name='submit' class='btn btn-primary btn-lg btn-block login-button'>Отправить</button>
		 </div>

		 </form>
		 </div>
		 </div>
	</body>
</html>
