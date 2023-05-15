<?php

session_start();

if(!isset($_SESSION['Login']))
{
    header('Location: /petrunev/register.php');
}
else
{
?>
    <link type="text/css" href="assets/style/style.css" rel="stylesheet">

<?php 
    require_once 'connect\connect.php';
    $login = $_SESSION['Login'];
    $testquery = mysqli_query($connect, "SELECT * FROM `firstdata` WHERE Number='$login'");
    
    $row = mysqli_fetch_array($testquery);
    //echo $row[4];


?>

<?php require_once "app/header.php" ?>

    <br><H1 style="text-align: center;">Личный кабинет</H1>

        <div style="display: flex; justify-content: center;">
			<div class="grid-4">
				<h2>Ваше имя</h2><input class="data" value="<?php echo $row[1]; ?>" />
                <h2>Ваша фамилия</h2><input class="pass" value="<?php echo $row[2]; ?>">
                <h2>Ваше отчество</h2><input class="pass" value="<?php echo $row[3]; ?>">        
			
				
			<div class="grid-4">
				<h2>Ваш номер телефона</h2><input class="data" value="<?php echo $row[4]; ?>" />
			</div><br>
            </div>
        </div>
        <?php require_once 'app\footer.php'; ?>



<?php
}
?>
