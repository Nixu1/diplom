<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Travelmode</title>
    <link type="text/css" href="assets/style/style.css" rel="stylesheet">

    <style>
.card {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 30%;
    
}

.card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
    padding: 2px 16px;
}

.btn3 {
    display: inline-block; 
    box-sizing: border-box;
    padding: 0 20px;
    margin: 0 15px 15px 0;
    outline: none;
    border: none; 
    border-radius: 4px;
    height: 32px;
    line-height: 32px;
    font-size: 14px;
    font-weight: 500;
    text-decoration: none;
    color: #fff;
    background-color: #3775dd;
    box-shadow: 0 2px #21487f;
    cursor: pointer;
    user-select: none;
    appearance: none;
    touch-action: manipulation; 
    vertical-align: top;
}
.btn3:hover {
    background-color: #002fed;
}
.btn3:active {
    background-color: #2f599e !important;
}
.btn3:focus-visible {
    box-shadow: 0 0 0 3px lightskyblue;
}
</style>

</head>
<body>



<?php require_once "app/header.php" ?>



<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="assets/img/slider_img_1.png" style="width:100%">
  <div class="text">Туры в Турцию напрямую из Омска</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="assets/img/slider_img_2.png" style="width:100%">
  <div class="text">Шерегеш</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="assets/img/slider_img_3.png" style="width:100%">
  <div class="text">Экскурсионные туры</div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div><br>



    

    <div style="height:100px; background-color:white; box-shadow: 10px 5px 5px black; display:flex;align-items: center;
    justify-content: center;">    
    <h1 style="font-size:40px;">Горячие туры прямо сейчас!</h1>
  </div>
  <div class="best">
    <?php require("pageno.php"); ?>
    <?php $sql = "SELECT * FROM products LIMIT $offset, $size_page"; ?>
    
    <?php if ($result = $connect->query($sql)) : ?>
      
      <?php foreach ($result as $row) : ?>
        
        <div class='image'>
          <a href="?id=<?= $row['id'] ?>&#win3"><img style="object-fit: cover;width: 400px;height:400px;" src="assets/img/<?= $row['img'] ?>"></a></br>
          <a class="titletext"><?= $row['title'] ?></a></br>
          <?php
                                            if ($row['strana'] == 'RUS') {
                                                echo "Россия";
                                            } else {
                                                if ($row['strana'] == 'UZ') {
                                                    echo "Узбекистан";
                                                } else {
                                                    if ($row['strana'] == 'KAZ') {
                                                        echo "Казахсатн";
                                                    } else {
                                                        if ($row['strana'] == 'TUR') {
                                                            echo "Турция";
                                                        } 
                                                    }
                                                }
                                            }
                                            ?>
          <?php
          if (isset($_SESSION['Login'])) { ?>
              <input type="hidden" name="addid" value="<?= $row['id'] ?>">
              <a href="?id=<?= $row['id'] ?>&#win4" style="text-decoration:none;"><input class="pagstyle" type="submit" value="Забранировать тур"></a>
              
              <a href="#x" class="overlay" id="win4"></a>
          <div class="popup" id="popka">
            <?php $id = $_GET['id'] ?>
            <?php $sql = "SELECT * FROM products WHERE id = $id"; ?>
            <?php echo $userid;?>
            <?php if ($result = $connect->query($sql)) : ?>
              
              <?php foreach ($result as $wor) : ?>
                <h2><?php echo $wor['title'] ?></h2>
                <hr>
                <div class='imagessss'>
                  <img style="object-fit: cover; height: 50%; width:50%;" src="assets/img/<?= $wor['img'] ?>">
                  <div>
                  <h3>Описание тура</h3>
                  <h5><?= $wor['description'] ?></h5>
                  <hr>
                  <?php
                                            if ($wor['strana'] == 'RUS') {
                                                echo "<b style=\"font-size:30px;margin-left:50%; \">Россия</b>";
                                            } else {
                                                if ($wor['strana'] == 'UZ') {
                                                    echo "<b style=\"font-size:30px;margin-left:50%; \">Узбекистан</b>";
                                                } else {
                                                    if ($wor['strana'] == 'KAZ') {
                                                        echo "<b style=\"font-size:30px;margin-left:50%; \">Казахсатн</b>";
                                                    } else {
                                                        if ($wor['strana'] == 'TUR') {
                                                            echo "<b style=\"font-size:30px;margin-left:50%; \">Турция</b>";
                                                        } 
                                                    }
                                                }
                                            }
                                            ?>
                <?php

        $userid = $_SESSION['id'];
        $result = mysqli_query($connect, "SELECT * FROM firstdata WHERE id='$userid'");
        $user = mysqli_fetch_assoc($result);?>
        <div class="order">
        <hr style="width:100%;"> 
            <div class="profedit">
                <h4>Заполните анкету</h4>
                <form action="../order.php" method="post">
                    <input class="validinput" type="text" name="name" value="<?= $user['name'] ?>" placeholder="Имя"><br><br>
                    <input class="validinput" type="email" name="email" value="<?= $user['email'] ?>" placeholder="Майл"><br><br>
                    <input class="validinput" type="tel" name="phone" id="phone" value="<?= $user['phone'] ?>" placeholder="Телефон"></input><br>
                    <input class="btn3" type="submit" name="submit" value="Заказать">
                </form>
            </div>
        </div>

                </div>
            
                                        </div>
              <?php endforeach; ?>
            <?php endif; ?>
          </div>

            <?php
                if ($_SESSION['Login'] == '+7(999)999-99-99') {
                ?>
                    <form action="proddelete.php" method="post">
                        <input type='hidden' name='prodid' value='<?= $row['id'] ?>'>
                        <input class='pagstyle' type='submit' value='Убрать тур'>
                    </form>
                <?php
                }
                ?>
          <?php
          } else {
          ?>
            <a style="word-break:break-all; font-size: 14px;">Авторизуйтесь, чтобы добавить товар в корзину</a>
          <?php } ?>
        </div>
      <?php endforeach; ?>
    <?php endif; ?>

  </div>
  <form action="pageno.php" method="get">
    <ul class="pagination">
      <li class="<?php if ($pageno <= 1) {
                    echo 'disabled';
                  } ?>">
        <a class="pagstyle" href="<?php if ($pageno <= 1) {
                                    echo '#';
                                  } else {
                                    echo "?pageno=" . ($pageno - 1);
                                  } ?>"><</a>
      </li>
      <li style="margin:30px;">
      <strong>
        <?php
        if (isset($_GET['pageno'])) {
          echo $_GET['pageno'];
        } else {
          echo 1;
        }
        ?>
      </strong>
      </li>
      <li class="<?php if ($pageno >= $total_pages) {
                    echo 'disabled';
                  } ?>">
        <a class="pagstyle" href="<?php if ($pageno >= $total_pages) {
                                    echo '#';
                                  } else {
                                    echo "?pageno=" . ($pageno + 1);
                                  } ?>">></a>
      </li>
    </ul>
  </form>


    <!-- <div class="stock" > -->
        <!-- <img src="assets/img/coupon.jpg" style="width: 100%; height: 400px;"></img> -->
    <!-- </div><br><br><br> -->

    </div><br>
    <div style="height:100px; background-color:white; box-shadow: 10px 5px 5px black; display:flex;align-items: center;
    justify-content: center;">    
    <h1 style="font-size:40px;">Туры по России!</h1>
  </div>      <div class="best">
    <?php $sql = "SELECT * FROM products WHERE strana = 'RUS'"?>
    <?php if ($result = $connect->query($sql)) : ?>
      <?php foreach ($result as $row) : ?>
        <div class='image'>
          <a href="?id=<?= $row['id'] ?>&#win3"><img style="object-fit: cover;width: 400px;height:400px;" src="assets/img/<?= $row['img'] ?>"></a></br>
          <a class="titletext"><?= $row['title'] ?></a></br>
          <?php
                                            if ($row['strana'] == 'RUS') {
                                                echo "Россия";
                                            } else {
                                                if ($row['strana'] == 'UZ') {
                                                    echo "Узбекистан";
                                                } else {
                                                    if ($row['strana'] == 'KAZ') {
                                                        echo "Казахсатн";
                                                    } else {
                                                        if ($row['strana'] == 'TUR') {
                                                            echo "Турция";
                                                        } 
                                                    }
                                                }
                                            }
                                            ?>
          <?php
          if (isset($_SESSION['Login'])) { ?>
              <input type="hidden" name="addid" value="<?= $row['id'] ?>">
              <a href="?id=<?= $row['id'] ?>&#win4" style="text-decoration:none;"><input class="pagstyle" type="submit" value="Забранировать тур"></a>
              <a href="#x" class="overlay" id="win4"></a>
          <div class="popup" id="popka">
            <?php $id = $_GET['id'] ?>
            <?php $sql = "SELECT * FROM products WHERE id = $id"; ?>
            <?php if ($result = $connect->query($sql)) : ?>
              <?php foreach ($result as $wor) : ?>
                <h2><?php echo $wor['title'] ?></h2>
                <hr>
                <div class='imagessss'>
                  <img style="object-fit: cover; height: 50%; width:50%;" src="assets/img/<?= $wor['img'] ?>">
                  <div>
                  <h3>Описание тура</h3>
                  <h5><?= $wor['description'] ?></h5>
                  <hr>
                  <?php
                                            if ($wor['strana'] == 'RUS') {
                                                echo "<b style=\"font-size:30px;margin-left:50%; \">Россия</b>";
                                            } else {
                                                if ($wor['strana'] == 'UZ') {
                                                    echo "<b style=\"font-size:30px;margin-left:50%; \">Узбекистан</b>";
                                                } else {
                                                    if ($wor['strana'] == 'KAZ') {
                                                        echo "<b style=\"font-size:30px;margin-left:50%; \">Казахсатн</b>";
                                                    } else {
                                                        if ($wor['strana'] == 'TUR') {
                                                            echo "<b style=\"font-size:30px;margin-left:50%; \">Турция</b>";
                                                        } 
                                                    }
                                                }
                                            }
                                            ?>
                <?php

        $userid = $_SESSION['id'];
        $result = mysqli_query($connect, "SELECT * FROM firstdata WHERE id='$userid'");
        $user = mysqli_fetch_assoc($result);
        ?>
        <div class="order">
        <hr style="width:100%;"> 
            <div class="profedit">
                <h4>Заполните анкету</h4>
                <form action="../order.php" method="post">
                    <input class="validinput" type="text" name="name" value="<?= $user['name'] ?>" placeholder="Имя"><br><br>
                    <input class="validinput" type="email" name="email" value="<?= $user['email'] ?>" placeholder="Майл"><br><br>
                    <input class="validinput" type="tel" name="phone" id="phone" value="<?= $user['phone'] ?>" placeholder="Телефон"></input><br>
                    <input class="btn3" type="submit" name="submit" value="Заказать">
                </form>
            </div>
        </div>

                </div>
            
                                        </div>
              <?php endforeach; ?>
            <?php endif; ?>
          </div>

            <?php
                if ($_SESSION['Login'] == '+7(999)999-99-99') {
                ?>
                    <form action="proddelete.php" method="post">
                        <input type='hidden' name='prodid' value='<?= $row['id'] ?>'>
                        <input class='pagstyle' type='submit' value='Убрать тур'>
                    </form>
                <?php
                }
                ?>
          <?php
          } else {
          ?>
            <a style="word-break:break-all; font-size: 14px;">Авторизуйтесь, чтобы добавить товар в корзину</a>
          <?php } ?>
        </div>
      <?php endforeach; ?>
    <?php endif; ?>
  </div>
      

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
    
</script>
<?php require_once 'app\footer.php'; ?>

</body>
</html>

