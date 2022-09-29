<?php
session_start();
if (!isset($_SESSION['admin']) and !$_SESSION['admin']) {
	$echo = "<div class='table'>
	<div class='tale-wrapper'>
		<div class='table-title'>Войти в панель администратора</div>
		<div class='table-content'>
			<form action='/scripts/login.php' method='post' id='login-form' class='login-form'>
				<input type='text' placeholder='Логин' class='input' name='login' required><br>
				<input type='password' placeholder='Пароль' class='input' name='password' required><br>
				<input type='submit' value='Войти' class='button'>
			</form>
		</div>
	</div>
</div>";
}

echo $echo;
