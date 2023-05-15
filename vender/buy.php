<?php
session_start();
require_once 'connect\connect.php';

$title = $_POST["title"];
$price = $_POST["price"];
$login = $_SESSION['Login'];

mysqli_query($connect, "INSERT INTO `trash` (`title`, `price`, `user_name`) VALUES ('$title', '$price', '$login')");

header("Location: ".$_SERVER["HTTP_REFERER"]);
?>