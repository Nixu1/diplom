<?php
//  вся процедура работает на сессиях. Именно в ней хранятся данные  пользователя, пока он находится на сайте. Очень важно запустить их в  самом начале странички!!!
session_start();
require_once("connect/connect.php");
?>
  <?php
  if (isset($_GET['pageno'])) {
    $pageno = $_GET['pageno'];
  } else {
    $pageno = 1;
  }

  $size_page = 8;
  $offset = ($pageno - 1) * $size_page;
  $count_sql = "SELECT COUNT(*) FROM `products`";
  $result = mysqli_query($connect, $count_sql);
  $total_rows = mysqli_fetch_array($result)[0];
  $total_pages = ceil($total_rows / $size_page);
  ?>