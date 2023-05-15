<?php
session_start();
header('Content-Type: text/html; charset=utf-8');
require_once("connect/connect.php");

if (!$connect) {
  echo 'Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error();
  exit;
}
$nameFile =  $_FILES['img']['name'];
$tmp_name = $_FILES['img']['tmp_name'];
$RegFile = time() . $nameFile;
move_uploaded_file($tmp_name, "assets/img/" . $RegFile);

if (isset($_POST["title"])) {
  $sql = mysqli_query($connect, "INSERT INTO `products` (`title`, `img`, `description`, `strana`) VALUES ('{$_POST['title']}', '$RegFile', '{$_POST['description']}', '{$_POST['strana']}')");
  if ($sql) {
    echo "<script>alert('Товар успешно добавлен!')</script>";
    echo "<script>window.location = 'admin_panel.php'</script>";
  } else {
    echo '<p>Произошла ошибка: ' . mysqli_error($connect) . '</p>';
  }
}
?>
<?php
$sql = mysqli_query($connect, 'SELECT `ID`, `title`, `img`, `description` FROM `products`');
while ($result = mysqli_fetch_array($sql)) {
  echo "<script>alert('Товар успешно добавлен!')</script>";
  echo "<script>window.location = 'admin_panel.php'</script>";
}
?>