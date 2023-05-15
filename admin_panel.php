<?php
//  вся процедура работает на сессиях. Именно в ней хранятся данные  пользователя, пока он находится на сайте. Очень важно запустить их в  самом начале странички!!!
require_once("connect/connect.php");
session_start();
?>
<?php
if (!isset($_SESSION['Login'])) {
  echo "<script>alert('Извините, у вас нет прав.')</script>";
  echo "<script>window.location = 'index.php'</script>";
?>
  <?php
} else {
  if ($_SESSION['Login'] == '+7(111)111-11-11') {
  ?>
    <!DOCTYPE html>
    <html>

    <head>
      <meta charset="UTF-8">
      <meta name="viewpoint" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="assets/style/style.css">
      <link rel="shortcut icon" href="image/icon.ico" type="image/x-icon">
    </head>

    <body>
    <?php require_once 'app\header.php'; ?>

      <div class="use" style="display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}">        
        <h2>Добавить товар</h2>
        <div class="addproduct">
          <form action="addtobd.php" method="post" enctype="multipart/form-data">
            <table>
              <tr>
                <td>Наименование курорта:</td>
                <td><input class="validinput" type="text" name="title"></td>
              </tr>
              <tr>
                <td>Страна курорта:</td>
                <td>
                    <select class="validinput" type="text" name="strana">
                      <option value='RUS'>Россия</option>
                      <option value='TUR'>Турция</option>
                      <option value='KAZ'>Казахстан</option>
                      <option value='UZ'>Узбекистан</option>
                    </select>
                    </td>
              </tr>
              <tr>
                <td>Название изображения:</td>
                <td><input class="validinput" type="file" name="img"></td>
              </tr>
              <tr>
                <td>Описание курорта:</td>
                <td><textarea class="validinput" type="text" name="description"></textarea></td>
              </tr>
              <tr>
                <td><input class="pagstyle" type="submit" name="upload" value="Добавить товар"></td>
              </tr>
            </table>
          </form>
        </div>
        </div>
        <div>
  </div>
  <?php require_once 'app\footer.php'; ?>

    </body>
    
    </html>
<?php
  } else {
    echo "<script>alert('Извините, у вас нет прав.')</script>";
    echo "<script>window.location = 'index.php'</script>";
  }
}
?>