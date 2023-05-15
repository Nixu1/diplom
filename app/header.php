<style>
.topnav {overflow: hidden;background-color: #3775dd;margin-bottom:50px;}
.topnav a {float: left;display: block;color: white;text-align: center;padding: 14px 16px;text-decoration: none;font-size: 17px;}
.topnav a:hover {background-color: #21487f;color: white; font-weight:bold;}
.topnav input[type=text] {float: right;padding: 6px;border: none;margin-top: 8px;margin-right: 16px;font-size: 17px;}
.funck {float:right;}
.main {
  position: relative;
  display: flex;
  height: 100px;
  background-color:#6495ED;
  margin-bottom: 20px;

}

.one {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

.two {
  position: absolute;
  top: 50%;
  right: 0;
  transform: translate(-50%, -50%);
}

a {
text-decoration:none;
font-size: 22px;
margin-left: 40px;
color: black;
}

</style>
<div class="main">
<div class="one">

<a href="/index.php" class="logo">Travelmode</a>

        <a href="about.php">О нас</a>
        <a href="tours.php">Туры</a>
</div>
        <?php
        if ($_SESSION['Login'] == '+7(999)999-99-99') {
        ?>
          <a href="admin_panel.php" class="rysikDayn">Админ панель</a>
        <?php
        }?>
        <?php
            session_start();
            if(!isset($_SESSION['Login'])) {?>
                
                <a href="vender/login.php" style="float: right">Войти</a>
                <?php } else {?>
                    <div class="two"><a href="profile.php">Личный кабинет</a>
                    <a href="connect/exit.php">Выход</a></div>
                <?php }session_write_close();?>
                
    </div>