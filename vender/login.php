<?php
session_start();
if(isset($_SESSION['Login']))
{
    header("Location: /index.php");
}
session_write_close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация|Авторизация</title>
    <link type="text/css" href="resources/style.css" rel="stylesheet">
<style>
input {padding: 12px 20px;margin: 8px 0;box-sizing: border-box;border: 3px solid #ccc;-webkit-transition: 0.5s;transition: 0.5s;outline: none; border-radius:50px;}input:focus {border: 3px solid #555;}
.btn3 {padding: 0 20px;border: none; border-radius: 4px;height: 32px;font-size:18px;color:#fff;background-color: #3775dd;box-shadow: 2px 2px #45756d;cursor: pointer;}
.btn3:hover {background-color: #21487f;color:#fffff;}
.btn3:focus-visible {box-shadow: 0 0 0 3px lightskyblue;}
body{display: flex;width: 100vw;height: 100vh;align-items: center;flex-direction: column;align-content: center;justify-content: center;}
form{display: flex;align-items: center;flex-direction: column;align-content: center;justify-content: center;}
</style>

</head>
<body>
<h1 style="text-align:center">Вход</h1>
<div style="display: flex; justify-content: center;" class="form-center">

	<form action="/login_system/signin.php" method="post">
		<input class="input_rl" type="text" data-mask="phone" name="Number" required placeholder="Введите телефон">
		<input class="input_rl" type="Password" name="Password" placeholder="Введите пароль">
		<button class="btn3" type="submit" class="button-action">Войти</button>
		<p><div style="font-weight: Bold; font-family: sans-serif;">У вас нет аккаунта? - <a href="register.php">Зарегистрируйтесь!</a></div></p>
		<div style="font-weight: Bold; font-family: sans-serif;">Хочешь вернустья ?- <a href="/index.php">На главную!</a></div>
	</form>
</div>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://unpkg.com/imask"></script>
<script src="/main.js"></script>
</body>
</html>