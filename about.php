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
</style>

</head>
<body>



<?php require_once "app/header.php" ?>
<div style="display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;">
    <div style="
        width:65%;
        hight:;
        border-radius:45px;
        border:1px solid black;
        text-align: center;
        background-color:white;
        

    }">
        <H1>Контакты</H1>
        <h2>Адрес:</h2>
        <p>г. Омск, Жукова 21</p><br>
        <h2>Почта для связи:</h2>
        <p>travelmode@gmail.com</p><br>
        <h2>График работы:</h2>
        <p>Ежедневно с 10:00 до 19:00</p><br>
    </div>
</div>
<?php require_once "app/footer.php" ?>

</body>
</html>
