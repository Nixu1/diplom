<?php
//  вся процедура работает на сессиях. Именно в ней хранятся данные  пользователя, пока он находится на сайте. Очень важно запустить их в  самом начале странички!!!
session_start();
require("connect/connect.php");
header('Content-Type: text/html; charset=utf-8');
if (isset($_POST["prodid"])) {
    $prodid = $connect->real_escape_string($_POST["prodid"]);
    $sql = "DELETE FROM products WHERE id = '$prodid'";
    if ($connect->query($sql)) {
    } else {
        echo "Ошибка: " . $connect->error;
    }
    $connect->close();
    echo "<script>alert('Товар удален упешно!')</script>";
    echo "<script>history.back()</script>";
}
