<?php
require_once '..\connect\connect.php';

$login = $_POST['Number'];
$password = $_POST['Password'];


//Check table users
//Отправляет запрос на базу данных
$mysqli_check = mysqli_query($connect, "select * from firstdata where Number='$login'");
//Выбирает строку из результатов в ассоциативном массиве
$row = mysqli_fetch_array($mysqli_check);

$password = md5($password);

$quary_b = mysqli_query($connect, "select * from firstdata where Password='$password' and Number='$login'");
$row_pass = mysqli_fetch_array($quary_b);


if(!empty($login) and !empty($password))
{
if ($login == $row['Number'] and $password == $row_pass['Password']) {
session_start();

if(!isset($_SESSION['Login']))
{
$_SESSION['Login'] = $login;
header('Location: /index.php');
}
else
{
header('Location: /index.php');
}

session_write_close();
}
else
{
printf("Incorrect user");
}
}
else
{
printf('Empty Login or Password');
}
header("Location: /index.php");
?>