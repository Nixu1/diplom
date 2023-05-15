<?php 
    $connect = mysqli_connect('localhost','root','root','papadata');

    if (!$connect) {
            die('Error connect DataBase');
    }
?>